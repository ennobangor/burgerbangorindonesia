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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('author');
            $table->string('banner');
            // $table->integer('category_id');
            $table->foreignId('category_id')->constrained(table:'categories',indexName:'post_category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
