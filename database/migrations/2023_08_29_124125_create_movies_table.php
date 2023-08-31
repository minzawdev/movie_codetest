<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->integer('genre_id');
            $table->integer('author_id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('summary');
            $table->string('cover_image')->nullable();
            $table->string('pdf_url')->nullable();
            $table->index(['genre_id','author_id','user_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed',[
            '--class' => 'MovieSeeder',
            '--force'=> true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
