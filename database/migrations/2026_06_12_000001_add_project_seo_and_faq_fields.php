<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (! Schema::hasColumn('projects', 'meta_title')) {
                $table->string('meta_title')->nullable()->after('image');
            }

            if (! Schema::hasColumn('projects', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('meta_title');
            }

            if (! Schema::hasColumn('projects', 'meta_keywords')) {
                $table->string('meta_keywords')->nullable()->after('meta_description');
            }

            if (! Schema::hasColumn('projects', 'faqs')) {
                $table->json('faqs')->nullable()->after('meta_keywords');
            }
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $columns = array_filter([
                Schema::hasColumn('projects', 'faqs') ? 'faqs' : null,
                Schema::hasColumn('projects', 'meta_keywords') ? 'meta_keywords' : null,
                Schema::hasColumn('projects', 'meta_description') ? 'meta_description' : null,
                Schema::hasColumn('projects', 'meta_title') ? 'meta_title' : null,
            ]);

            if ($columns) {
                $table->dropColumn($columns);
            }
        });
    }
};
