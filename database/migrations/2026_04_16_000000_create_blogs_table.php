<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::create('blogs', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
        //     $table->string('title');
        //     $table->string('slug')->unique();
        //     $table->text('excerpt')->nullable();
        //     $table->longText('content')->nullable();
        //     $table->string('image')->nullable();
    

        //     $table->boolean('is_published')->default(false);
        //     $table->timestamp('published_at')->nullable();
        //     $table->timestamps();
        // });

Schema::create('blogs', function (Blueprint $table) {

    $table->id();

    $table->foreignId('category_id')
        ->nullable()
        ->constrained()
        ->nullOnDelete();

    $table->string('title');

    $table->string('slug')
        ->unique();

    $table->text('excerpt')
        ->nullable();

    $table->longText('content')
        ->nullable();

    $table->string('image')
        ->nullable();

    $table->string('meta_title')
        ->nullable();

    $table->text('meta_description')
        ->nullable();

    $table->string('meta_keywords')
        ->nullable();
    $table->json('table_of_contents')
        ->nullable();
    $table->json('faqs')
        ->nullable();

    $table->boolean('is_featured')
        ->default(false);

    $table->boolean('is_published')
        ->default(false);

    $table->timestamp('published_at')
        ->nullable();

    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
