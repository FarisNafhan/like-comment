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
        Schema::create('likes', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('foto_id');
            $table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
<<<<<<< HEAD
            $table->date('tanggal');
=======
            $table->date('Tanggal');
>>>>>>> 21fed020a1d1a480896a1f9c099ffbbf0eb48d14
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
