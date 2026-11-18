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
        Schema::create('office_images', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('caption')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('image_path');
            $table->string('category')->default('Workspace & Infrastructure');
            $table->integer('order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->index(['is_published', 'category', 'order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_images');
    }
};

