<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('major'); // RPL, TKJ, DKV
            $table->string('salary')->nullable();
            $table->string('work_location')->default('Onsite'); // Onsite, Hybrid, Remote/WFH
            $table->string('work_type')->default('Full-time'); // Full-time, Part-time, Contract, Internship, Freelance
            $table->string('company_name');
            $table->string('company_logo_char', 5)->nullable();
            $table->string('company_img')->nullable();
            $table->string('company_bg')->default('bg-blue-600');
            $table->string('location')->default('Greater Jakarta');
            $table->string('location_group')->default('Jabodetabek'); // Jabodetabek, Jawa, Kalimantan, Sumatra, Sulawesi, Papua, Other
            $table->string('posted_time')->default('Baru saja');
            $table->string('post_time_category')->default('Minggu ini'); // Hari ini, Minggu ini, Bulan ini, Tahun ini
            $table->string('apply_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Indexing for search & filter speed
            $table->index('major');
            $table->index('work_location');
            $table->index('work_type');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_jobs');
    }
};
