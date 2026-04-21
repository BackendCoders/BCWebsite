<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            if (!Schema::hasColumn('sections', 'content')) {
                $table->json('content')->nullable()->after('title');
            }
            if (!Schema::hasColumn('sections', 'image')) {
                $table->string('image')->nullable()->after('content');
            }
        });

        Schema::table('section_items', function (Blueprint $table) {
            if (!Schema::hasColumn('section_items', 'section_id')) {
                $table->foreignId('section_id')->nullable()->after('id')->constrained()->cascadeOnDelete();
            }
            if (!Schema::hasColumn('section_items', 'description')) {
                $table->text('description')->nullable()->after('title');
            }
            if (!Schema::hasColumn('section_items', 'image')) {
                $table->string('image')->nullable()->after('description');
            }
            if (!Schema::hasColumn('section_items', 'extra')) {
                $table->json('extra')->nullable()->after('image');
            }
        });
    }

    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            if (Schema::hasColumn('sections', 'image')) {
                $table->dropColumn('image');
            }
            if (Schema::hasColumn('sections', 'content')) {
                $table->dropColumn('content');
            }
        });

        Schema::table('section_items', function (Blueprint $table) {
            if (Schema::hasColumn('section_items', 'extra')) {
                $table->dropColumn('extra');
            }
            if (Schema::hasColumn('section_items', 'image')) {
                $table->dropColumn('image');
            }
            if (Schema::hasColumn('section_items', 'description')) {
                $table->dropColumn('description');
            }
            if (Schema::hasColumn('section_items', 'section_id')) {
                $table->dropConstrainedForeignId('section_id');
            }
        });
    }
};
