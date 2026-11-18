<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Page;
use App\Models\MenuItem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $page = Page::firstOrCreate(
            ['slug' => 'digital-marketing-agency-kanpur'],
            [
                'title' => 'Digital Marketing Agency in Kanpur That Tracks Leads, Not Likes',
                'meta_title' => 'Digital Marketing Agency in Kanpur | SEO, Ads & Social – Backend Coders India',
                'meta_description' => 'Kanpur digital marketing agency for SEO, Google Ads, Meta Ads and social media. Transparent monthly plans from ₹7,999. Free 30-min audit. Call today.',
                'canonical_url' => 'https://backendcodersindia.com/digital-marketing-agency-kanpur',
                'is_index' => true,
            ]
        );

        if (Schema::hasTable('menu_items') && $page) {
            MenuItem::firstOrCreate(
                ['page_id' => $page->id],
                [
                    'title' => 'Digital Marketing Agency in Kanpur',
                    'type' => MenuItem::TYPE_DIGITAL,
                    'order' => (MenuItem::max('order') ?? 0) + 1,
                    'is_active' => 1,
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $page = Page::where('slug', 'digital-marketing-agency-kanpur')->first();
        if ($page) {
            if (Schema::hasTable('menu_items')) {
                MenuItem::where('page_id', $page->id)->delete();
            }
            $page->delete();
        }
    }
};
