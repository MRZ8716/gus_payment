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
        Schema::create('m_jenis_tiket', function (Blueprint $table) {

            $table->id();
            $table->string('jenis_tiket');

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
        Schema::dropIfExists('m_jenis_tiket');
    }
};
