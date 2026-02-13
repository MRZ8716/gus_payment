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

        Schema::create('m_user', function (Blueprint $table) {

            $table->id();
            $table->string('uid', 100)->unique();

            $table->string('nama', 200);
            $table->string('username', 200)->unique();
            $table->text('password');

            $table->string('email', 100)->nullable()->unique();
            $table->string('nik', 20)->nullable();
            $table->string('nik', 20)->nullable();

            $table->tinyInteger('mfa_aktif')->default(1);
            $table->string('mfa_google_secret_key', 200)->nullable()->unique();

            $table->integer('aktif')->default(1);

            $table->integer('user_create')->nullable();
            $table->integer('user_update')->nullable();

            $table->dateTime('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
