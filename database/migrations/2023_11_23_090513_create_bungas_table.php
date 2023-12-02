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
        Schema::create('bungas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->string('title');
            $table->integer('harga');
            $table->string('slug')->unique();
            $table->text('excrept');
            $table->text('deskripsi');
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bungas');
    }
};