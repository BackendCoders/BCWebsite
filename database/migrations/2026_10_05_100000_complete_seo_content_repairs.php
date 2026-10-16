<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $comparison = <<<'HTML'
<p>Choosing a website developer is easier when you compare the work and process that matter to your project. This guide gives you a practical way to assess a provider in Kanpur. It does not rank agencies or make claims about companies without verifiable evidence.</p>
<h2>Start with your project requirements</h2>
<p>Write down the pages, features, integrations, launch date, and support you need. Ask each provider to respond to the same brief. A proposal is easier to assess when it explains what is included, what depends on third parties, and what would change the price or schedule.</p>
<h2>Comparison Matrix: questions to ask each provider</h2>
<div class="my-8 overflow-x-auto rounded-2xl border border-slate-200"><table class="w-full min-w-[680px] border-collapse text-left"><thead><tr><th class="bg-slate-100 p-4">What to compare</th><th class="bg-slate-100 p-4">Questions to ask</th><th class="bg-slate-100 p-4">What a useful answer includes</th></tr></thead><tbody>
<tr><td class="border-t p-4">Relevant work</td><td class="border-t p-4">Can you show a launched project with similar needs?</td><td class="border-t p-4">A working example and a clear description of the provider's role.</td></tr>
<tr><td class="border-t p-4">Scope and cost</td><td class="border-t p-4">What is included in the estimate?</td><td class="border-t p-4">Deliverables, assumptions, exclusions, payment stages, and change handling.</td></tr>
<tr><td class="border-t p-4">Technical fit</td><td class="border-t p-4">Why do you recommend this platform and stack?</td><td class="border-t p-4">Trade-offs tied to your features, maintenance needs, and expected growth.</td></tr>
<tr><td class="border-t p-4">Communication</td><td class="border-t p-4">Who will manage the work and share progress?</td><td class="border-t p-4">A named contact, review points, and a way to raise issues.</td></tr>
<tr><td class="border-t p-4">Launch and support</td><td class="border-t p-4">What happens after launch?</td><td class="border-t p-4">Testing, handover, ownership of accounts and code, and support terms.</td></tr>
</tbody></table></div>
<h2>Check evidence before deciding</h2>
<p>Open the work samples yourself, check that they are live, and ask what the provider delivered. Speak with a reference if one is available. Treat awards, rankings, client counts, and performance promises as claims to verify rather than proof on their own.</p>
<h2>Choose the best fit for your needs</h2>
<p>The right partner is the one whose proposal fits your requirements, budget, and working style. Compare written proposals side by side, clarify unanswered questions, and make sure you will own your domain, content, design files, and source code as agreed.</p>
HTML;

        DB::table('blogs')
            ->where(function ($query) {
                $query->where('slug', 'like', 'How to Choose a Website Development Company in Kanpur')
                    ->orWhere('title', 'like', 'How to Choose a Website Development Company in Kanpur');
            })
            ->update([
                'title' => 'How to Choose a Web Developer in Kanpur',
                'excerpt' => 'Compare website developers using project scope, relevant work, technical fit, communication, and support. A practical guide for choosing a provider in Kanpur.',
                'content' => $comparison,
                'meta_title' => 'How to Choose a Web Developer in Kanpur | Backend Coders India',
                'meta_description' => 'A practical guide to comparing website developers in Kanpur by project scope, relevant work, technical fit, communication, and post-launch support.',
                'faqs' => json_encode([
                    ['question' => 'How should I compare website developers?', 'answer' => 'Give each provider the same brief and compare relevant work, scope, price, technical approach, communication, and support in writing.'],
                    ['question' => 'Should I choose a developer by ranking?', 'answer' => 'Use verifiable work samples, references, and a proposal that fits your needs rather than an unsupported ranking.'],
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                'updated_at' => now(),
            ]);

        DB::table('blogs')->where('slug', 'like', '%website-development-cost%')->get(['id', 'content'])->each(function ($blog) {
            $content = (string) $blog->content;
            $content = str_ireplace(['₹1,500,000+', '&#8377;1,500,000+', '₹1,500,000', '&#8377;1,500,000'], ['₹1,50,000+', '&#8377;1,50,000+', '₹1,50,000', '&#8377;1,50,000'], $content);
            $content = str_ireplace(['Rs. 15,00,000+', 'Rs. 15,00,000'], ['Rs. 1,50,000+', 'Rs. 1,50,000'], $content);
            $content = str_ireplace('guarantee lightning-fast uptime', 'can support reliable service when configured and monitored appropriately', $content);
            DB::table('blogs')->where('id', $blog->id)->update(['content' => $content, 'updated_at' => now()]);
        });

        // Remove contradictory promises and correct common CMS copy errors wherever they occur.
        foreach (['sections' => ['title', 'content'], 'section_items' => ['title', 'description', 'extra']] as $table => $columns) {
            foreach (DB::table($table)->get() as $record) {
                $updates = [];
                foreach ($columns as $column) {
                    $value = $record->{$column} ?? null;
                    if (! is_string($value) || $value === '') continue;
                    $revised = str_ireplace(
                        ['Ready to Rank #1 on Google?', 'an best SEO agency', 'Best SEO agency', 'guarantee lightning-fast uptime', 'rank #1 on Google'],
                        ['Build a Search Strategy for Sustainable Growth', 'a search marketing agency', 'Search marketing agency', 'can support reliable service when configured and monitored appropriately', 'improve your organic search visibility'],
                        $value
                    );
                    if ($revised !== $value) $updates[$column] = $revised;
                }
                if ($updates) DB::table($table)->where('id', $record->id)->update($updates);
            }
        }

        DB::table('section_items')->whereRaw('LOWER(title) LIKE ?', ['%what makes backend coders india different%'])->update([
            'description' => 'Our team combines software development and digital marketing experience to plan work around each client’s goals. We agree on scope, milestones, communication, and measures before delivery begins.',
            'updated_at' => now(),
        ]);

        DB::table('pages')->whereIn('slug', ['about-backend-coders-software-digital-marketing-company-in-kanpur', 'software-digital-marketing-company-in-kanpur', 'seo-rocket-pro'])
            ->update([
                'meta_title' => DB::raw("CASE WHEN slug = 'seo-rocket-pro' THEN 'SEO Rocket Pro | Organic Search Services | Backend Coders India' ELSE 'About Backend Coders India | Software and Digital Services in Kanpur' END"),
                'meta_description' => DB::raw("CASE WHEN slug = 'seo-rocket-pro' THEN 'A practical search optimization service covering technical health, useful content, local visibility, and progress measurement. Search positions are not guaranteed.' ELSE 'Meet Backend Coders India, a Kanpur based team building websites, custom applications, and digital experiences around business needs.' END"),
                'is_index' => false,
                'canonical_url' => null,
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        // SEO copy corrections are intentionally not rolled back to avoid restoring misleading claims.
    }
};
