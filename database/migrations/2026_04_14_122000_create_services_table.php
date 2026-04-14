<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('duration')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->text('summary')->nullable();
            $table->text('details')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedTinyInteger('priority')->default(50);
            $table->json('metadata')->nullable();
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['status', 'priority']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
