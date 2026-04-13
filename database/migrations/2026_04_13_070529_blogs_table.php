<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            // 🔷 RELATION (CATEGORY)
          
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            // 🔷 CORE CONTENT
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt'); 
            $table->longText('content')->nullable();

            // 🔷 MEDIA
            $table->string('thumbnail')->nullable();

            // 🔷 META
            $table->unsignedInteger('read_time')->default(1);
            $table->date('published_at')->nullable();

            // 🔷 FLAGS
            $table->boolean('is_featured')->default(false);
            $table->boolean('status')->default(true);

            $table->timestamps();

            // 🔷 OPTIONAL INDEXES (performance)
            $table->index(['category_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};