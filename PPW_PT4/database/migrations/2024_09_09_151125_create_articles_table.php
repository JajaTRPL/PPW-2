<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();                  // Primary key
            $table->string('title');       // Kolom untuk judul artikel
            $table->text('content');       // Kolom untuk konten artikel
            $table->timestamps();          // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');   // Drop tabel jika rollback
    }
}
