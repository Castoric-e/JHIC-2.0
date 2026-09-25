<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_to_admin_login_when_visiting_admin_root(): void
    {
        $response = $this->get('/admin');
        $response->assertStatus(302);
        $response->assertRedirect(route('admin.login'));
    }

    public function test_guest_is_redirected_to_admin_login_when_visiting_dashboard(): void
    {
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(302);
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_login_page_renders_successfully(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Portal Super Admin');
    }

    private function createAdmin(): User
    {
        return User::factory()->create([
            'name' => 'Super Admin IDN',
            'email' => 'admin@idn.sch.id',
            'password' => bcrypt('password123'),
            'role' => 'super_admin',
        ]);
    }

    public function test_super_admin_can_login_and_redirect_to_dashboard(): void
    {
        $admin = $this->createAdmin();

        $response = $this->post('/admin/login', [
            'email' => 'admin@idn.sch.id',
            'password' => 'password123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($admin);
    }

    public function test_super_admin_can_view_dashboard(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->get('/admin/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Dashboard Super Admin');
        $response->assertSee('Total Artikel Terbit');
    }

    public function test_super_admin_can_view_articles_index(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->get('/admin/articles');
        $response->assertStatus(200);
        $response->assertSee('Daftar Artikel');
    }

    public function test_super_admin_can_create_article(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->post('/admin/articles', [
            'title' => 'Prestasi Santri IDN Juara Internasional 2026',
            'category' => 'Prestasi',
            'read_time' => '4 Menit Baca',
            'published_at' => '2026-09-25',
            'content' => '<p>Santri IDN berhasil meraih medali emas pada kompetisi dunia.</p>',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('admin.articles.index'));
        $this->assertDatabaseHas('articles', [
            'title' => 'Prestasi Santri IDN Juara Internasional 2026',
            'category' => 'Prestasi',
        ]);
    }

    public function test_super_admin_can_update_article(): void
    {
        $admin = $this->createAdmin();
        $article = Article::create([
            'title' => 'Judul Lama',
            'slug' => 'judul-lama',
            'category' => 'Berita',
            'read_time' => '3 Menit Baca',
            'published_at' => '2026-09-25',
            'content' => '<p>Konten lama</p>',
            'image' => 'pages/articles/artikel-img.avif',
        ]);

        $response = $this->actingAs($admin)->put("/admin/articles/{$article->id}", [
            'title' => 'Judul Baru Diperbarui',
            'category' => 'Teknologi',
            'read_time' => '5 Menit Baca',
            'published_at' => '2026-09-25',
            'content' => '<p>Konten baru diperbarui</p>',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('admin.articles.index'));
        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'title' => 'Judul Baru Diperbarui',
            'category' => 'Teknologi',
        ]);
    }

    public function test_super_admin_can_delete_article(): void
    {
        $admin = $this->createAdmin();
        $article = Article::create([
            'title' => 'Artikel Akan Dihapus',
            'slug' => 'artikel-akan-dihapus',
            'category' => 'Berita',
            'read_time' => '2 Menit Baca',
            'published_at' => '2026-09-25',
            'content' => '<p>Hapus ini</p>',
            'image' => 'pages/articles/artikel-img.avif',
        ]);

        $response = $this->actingAs($admin)->delete("/admin/articles/{$article->id}");
        $response->assertStatus(302);
        $response->assertRedirect(route('admin.articles.index'));
        $this->assertDatabaseMissing('articles', [
            'id' => $article->id,
        ]);
    }

    public function test_super_admin_can_logout(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->post('/admin/logout');
        $response->assertStatus(302);
        $response->assertRedirect(route('admin.login'));
        $this->assertGuest();
    }
}
