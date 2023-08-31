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
        Schema::create('movie_tag', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_id');
            $table->integer('tag_id');
            $table->timestamps();
            $table->index(['movie_id', 'tag_id']);
            $table->softDeletes();
        });

        Artisan::call('db:seed', [
            '--class' => 'MovieTagSeeder',
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_tag');
    }
};
