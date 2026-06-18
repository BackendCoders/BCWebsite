<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            if (! Schema::hasColumn('blogs', 'meta_title')) {
                $table->string('meta_title')->nullable()->after('image');
            }

            if (! Schema::hasColumn('blogs', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('meta_title');
            }

            if (! Schema::hasColumn('blogs', 'meta_keywords')) {
                $table->string('meta_keywords')->nullable()->after('meta_description');
            }

            if (! Schema::hasColumn('blogs', 'table_of_contents')) {
                $table->json('table_of_contents')->nullable()->after('meta_keywords');
            }

            if (! Schema::hasColumn('blogs', 'faqs')) {
                $table->json('faqs')->nullable()->after('table_of_contents');
            }

            if (! Schema::hasColumn('blogs', 'is_featured')) {
                $table->boolean('is_featured')->default(false)->after('faqs');
            }
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $columns = array_filter([
                Schema::hasColumn('blogs', 'is_featured') ? 'is_featured' : null,
                Schema::hasColumn('blogs', 'faqs') ? 'faqs' : null,
                Schema::hasColumn('blogs', 'table_of_contents') ? 'table_of_contents' : null,
                Schema::hasColumn('blogs', 'meta_keywords') ? 'meta_keywords' : null,
                Schema::hasColumn('blogs', 'meta_description') ? 'meta_description' : null,
                Schema::hasColumn('blogs', 'meta_title') ? 'meta_title' : null,
            ]);

            if (! empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};
