<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $content = <<<'HTML'
<p>Choosing a website developer is easier when you compare the work and process that matter to your project. This guide gives you a practical way to assess a provider in Kanpur. It does not rank agencies or make claims about companies without verifiable evidence.</p>
<h2>Start with your project requirements</h2>
<p>Write down the pages, features, integrations, launch date, and support you need. Ask each provider to respond to the same brief. A proposal is easier to assess when it explains what is included, what depends on third parties, and what would change the price or schedule.</p>
<h2>Compare providers using the same criteria</h2>
<table><thead><tr><th>What to compare</th><th>Questions to ask</th><th>What a useful answer includes</th></tr></thead><tbody>
<tr><td>Relevant work</td><td>Can you show a launched project with similar needs?</td><td>A working example and a clear description of the provider's role.</td></tr>
<tr><td>Scope and cost</td><td>What is included in the estimate?</td><td>Deliverables, assumptions, exclusions, payment stages, and change handling.</td></tr>
<tr><td>Technical fit</td><td>Why do you recommend this platform and stack?</td><td>Trade-offs tied to your features, maintenance needs, and expected growth.</td></tr>
<tr><td>Communication</td><td>Who will manage the work and share progress?</td><td>A named contact, review points, and a way to raise issues.</td></tr>
<tr><td>Launch and support</td><td>What happens after launch?</td><td>Testing, handover, ownership of accounts and code, and support terms.</td></tr>
</tbody></table>
<h2>Check evidence before deciding</h2>
<p>Open the work samples yourself, check that they are live, and ask what the provider delivered. Speak with a reference if one is available. Treat awards, rankings, client counts, and performance promises as claims to verify rather than proof on their own.</p>
<h2>Choose the best fit for your needs</h2>
<p>The right partner is the one whose proposal fits your requirements, budget, and working style. Compare written proposals side by side, clarify unanswered questions, and make sure you will own your domain, content, design files, and source code as agreed.</p>
HTML;

        DB::table('blogs')
            ->where(function ($query) {
                $query->where('slug', 'like', '%website-development-company-in-kanpur%')
                    ->orWhere('slug', 'like', '%how-to-choose-a-website-development-company-in-kanpur%')
                    ->orWhere('title', 'like', '%Website Development Company in Kanpur%')
                    ->orWhere('title', 'like', '%How to Choose%');
            })
            ->update([
                'title' => 'How to Choose a Web Developer in Kanpur',
                'slug' => 'how-to-choose-a-website-development-company-in-kanpur',
                'excerpt' => 'Compare website developers using project scope, relevant work, technical fit, communication, and support. A practical guide for choosing a provider in Kanpur.',
                'content' => $content,
                'meta_title' => 'How to Choose a Web Developer in Kanpur | Backend Coders India',
                'meta_description' => 'A practical guide to comparing website developers in Kanpur by project scope, relevant work, technical fit, communication, and post-launch support.',
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        // This content migration intentionally has no destructive rollback.
    }
};
