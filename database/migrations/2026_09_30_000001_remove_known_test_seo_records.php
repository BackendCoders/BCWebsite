<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('pages')->whereIn('slug', [
            'rerum-pariatur-quia',
            'aspernatur-sit-id-co',
        ])->delete();

        $testProjectIds = DB::table('projects')
            ->get(['id', 'title'])
            ->filter(fn ($project) => Str::slug($project->title) === 'voluptatem-delectus')
            ->pluck('id');

        DB::table('projects')->whereIn('id', $testProjectIds)->delete();
    }

    public function down(): void
    {
        // Test records are intentionally removed and cannot be reconstructed.
    }
};
