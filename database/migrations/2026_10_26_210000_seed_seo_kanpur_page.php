<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Page;
use App\Models\MenuItem;
use App\Models\Section;
use App\Models\SectionItem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $page = Page::firstOrCreate(
            ['slug' => 'seo'],
            [
                'title' => 'Build Sustainable <br><span class="text-[#FD5528]">Organic Search Visibility</span>',
                'meta_title' => 'SEO Company in Kanpur | SEO Services That Bring Leads – Backend Coders India',
                'meta_description' => 'Professional SEO company in Kanpur. We provide technical site audits, on-page keyword optimization, local SEO, and ethical link outreach to drive organic leads. Plans from ₹7,999/mo.',
                'canonical_url' => 'https://backendcodersindia.com/seo',
                'meta_keywords' => 'SEO company in Kanpur, SEO services Kanpur, SEO agency Kanpur, SEO expert Kanpur, technical SEO, local SEO Kanpur',
                'is_index' => true,
            ]
        );

        if (Schema::hasTable('menu_items') && $page) {
            MenuItem::firstOrCreate(
                ['page_id' => $page->id],
                [
                    'title' => 'SEO Services',
                    'type' => MenuItem::TYPE_DIGITAL,
                    'order' => (MenuItem::max('order') ?? 0) + 1,
                    'is_active' => 1,
                ]
            );
        }

        // Seed editable CMS sections if not already present
        if ($page && $page->sections()->count() === 0) {
            // 1. Hero Section
            $heroSection = Section::create([
                'page_id' => $page->id,
                'type' => 'hero',
                'title' => 'Build Sustainable Organic Search Visibility',
                'order' => 1,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $heroSection->id,
                'type' => 'hero_item',
                'title' => 'Build Sustainable <br><span class="text-[#FD5528]">Organic Search Visibility</span>',
                'description' => 'Search engine optimization (SEO) improves a website\'s organic visibility across Google and AI search engines through technical crawlability fixes, keyword-mapped content, and authoritative signals. Backend Coders India delivers managed monthly SEO for Kanpur and regional Indian businesses, helping local service firms, manufacturers, and ecommerce brands earn qualified organic inquiries without paying for continuous ad clicks.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
                'extra' => [
                    'sub_text' => 'Plans include keyword research, technical site improvements, helpful content production, and monthly progress reviews. Fixed monthly packages start at ₹7,999/month; search positions and lead volumes are not guaranteed.',
                    'button_text' => 'Get a Free SEO Audit',
                    'button_url' => '#contact',
                ],
                'order' => 1,
            ]);

            // 2. About Section
            $aboutSection = Section::create([
                'page_id' => $page->id,
                'type' => 'about',
                'title' => 'Why Search Optimization',
                'order' => 2,
            ]);

            SectionItem::create([
                'page_id' => $page->id,
                'section_id' => $aboutSection->id,
                'type' => 'about_item',
                'title' => 'How Do Professional SEO Services in Kanpur Drive Sustainable Growth?',
                'description' => 'We analyze how potential customers search for your products and identify practical improvements across website code, information architecture, and content clarity. By focusing on verified technical fixes and high-intent regional keywords, we help Kanpur businesses build durable search authority across Uttar Pradesh and national Indian markets.',
                'order' => 1,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $page = Page::where('slug', 'seo')->first();
        if ($page) {
            if (Schema::hasTable('menu_items')) {
                MenuItem::where('page_id', $page->id)->delete();
            }
            if (Schema::hasTable('section_items')) {
                SectionItem::where('page_id', $page->id)->delete();
            }
            if (Schema::hasTable('sections')) {
                Section::where('page_id', $page->id)->delete();
            }
            $page->delete();
        }
    }
};
