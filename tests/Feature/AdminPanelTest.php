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

    public function test_super_admin_can_view_career_index(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->get('/admin/career');
        $response->assertStatus(200);
        $response->assertSee('Daftar Lowongan Karir');
    }

    public function test_super_admin_can_create_career_job(): void
    {
        $admin = $this->createAdmin();

        $response = $this->actingAs($admin)->post('/admin/career', [
            'title' => 'Senior AI Engineer',
            'major' => 'RPL',
            'company_name' => 'Google Cloud Indonesia',
            'salary' => 'Rp 8 Juta',
            'work_location' => 'Remote/WFH',
            'work_type' => 'Full-time',
            'location' => 'Central Jakarta, DKI Jakarta',
            'location_group' => 'Jabodetabek',
            'is_active' => '1',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('admin.career.index'));
        $this->assertDatabaseHas('career_jobs', [
            'title' => 'Senior AI Engineer',
            'company_name' => 'Google Cloud Indonesia',
            'major' => 'RPL',
        ]);
    }

    public function test_super_admin_can_update_career_job(): void
    {
        $admin = $this->createAdmin();
        $job = \App\Models\CareerJob::create([
            'title' => 'Junior Network',
            'major' => 'TKJ',
            'company_name' => 'PT Cisco Mitra',
            'salary' => 'Rp 3 Juta',
            'work_location' => 'Onsite',
            'work_type' => 'Internship',
            'location' => 'Bogor, West Java',
            'location_group' => 'Jawa',
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->put("/admin/career/{$job->id}", [
            'title' => 'Network Security Lead',
            'major' => 'TKJ',
            'company_name' => 'PT Cisco Mitra Utama',
            'salary' => 'Rp 6 Juta',
            'work_location' => 'Hybrid',
            'work_type' => 'Full-time',
            'location' => 'Bogor, West Java',
            'location_group' => 'Jawa',
            'is_active' => '1',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('admin.career.index'));
        $this->assertDatabaseHas('career_jobs', [
            'id' => $job->id,
            'title' => 'Network Security Lead',
            'company_name' => 'PT Cisco Mitra Utama',
        ]);
    }

    public function test_super_admin_can_toggle_career_job_status(): void
    {
        $admin = $this->createAdmin();
        $job = \App\Models\CareerJob::create([
            'title' => 'Motion Designer',
            'major' => 'DKV',
            'company_name' => 'Studio Animasi',
            'salary' => 'Rp 2 Juta',
            'work_location' => 'Remote/WFH',
            'work_type' => 'Contract',
            'location' => 'Bandung, West Java',
            'location_group' => 'Jawa',
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->patch("/admin/career/{$job->id}/toggle");
        $response->assertStatus(302);
        $this->assertFalse($job->fresh()->is_active);
    }

    public function test_super_admin_can_delete_career_job(): void
    {
        $admin = $this->createAdmin();
        $job = \App\Models\CareerJob::create([
            'title' => 'Job To Delete',
            'major' => 'RPL',
            'company_name' => 'Temp Co',
            'location' => 'Jakarta',
            'location_group' => 'Jabodetabek',
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->delete("/admin/career/{$job->id}");
        $response->assertStatus(302);
        $response->assertRedirect(route('admin.career.index'));
        $this->assertDatabaseMissing('career_jobs', [
            'id' => $job->id,
        ]);
    }

    public function test_public_career_center_loads_active_jobs(): void
    {
        \App\Models\CareerJob::create([
            'title' => 'Cyber Forensics Officer',
            'major' => 'TKJ',
            'company_name' => 'BSSN Mitra',
            'salary' => 'Rp 7 Juta',
            'work_location' => 'Onsite',
            'work_type' => 'Full-time',
            'location' => 'Depok, West Java',
            'location_group' => 'Jabodetabek',
            'is_active' => true,
        ]);

        $response = $this->get('/career-center');
        $response->assertStatus(200);
        $response->assertSee('Cyber Forensics Officer');
    }
}

