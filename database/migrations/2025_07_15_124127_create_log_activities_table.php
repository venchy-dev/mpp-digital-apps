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
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->string('status_code');
            $table->string('action');                          // Nama aksi, contoh: login, update_user
            $table->string('module')->nullable();              // Modul terkait, contoh: User Management
            $table->text('description')->nullable();           // Ringkasan aktivitas atau perubahan
            $table->string('ip_address', 45)->nullable();      // IP pelaku
            $table->text('user_agent')->nullable();            // Informasi browser/device
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_activities');
    }
};
