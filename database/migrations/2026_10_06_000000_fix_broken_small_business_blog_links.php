<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('blogs')
            ->where('content', 'like', '%/page/website-development-company-kanpur%')
            ->get(['id', 'content'])
            ->each(function ($blog): void {
                $content = str_replace(
                    '/page/website-development-company-kanpur',
                    '/page/website-design-development',
                    (string) $blog->content
                );

                DB::table('blogs')
                    ->where('id', $blog->id)
                    ->update(['content' => $content, 'updated_at' => now()]);
            });
    }

    public function down(): void
    {
        // Keep repaired links rather than reintroducing links to a missing page.
    }
};
