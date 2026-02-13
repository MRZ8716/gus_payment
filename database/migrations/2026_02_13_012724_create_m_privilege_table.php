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
        Schema::create('m_privilege', function (Blueprint $table) {
            $table->id();
            $table->string('privilege', 100);
            $table->integer('aktif')->default(1);

            $table->timestamps();

            $table->integer('user_create')->nullable();
            $table->integer('user_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_privilege');
    }
};
