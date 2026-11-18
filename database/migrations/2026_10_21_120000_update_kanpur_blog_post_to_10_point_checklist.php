<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $content = <<<'HTML'
<p>Choosing the right website development partner in Kanpur is one of the most consequential decisions for your digital presence. The right web development company delivers a fast, secure, search-optimized platform that turns visitors into qualified leads. The wrong choice can lead to delayed launches, unexpected fees, sluggish load times, and frustrating vendor lock-in.</p>

<p>Rather than relying on arbitrary agency rankings or unverified claims, smart businesses use an objective evaluation framework. Below is a comprehensive, 10-point checklist to help you compare proposals, audit developer capabilities, and select the ideal web development company in Kanpur for your specific business requirements.</p>

<h2>1. Document Detailed Functional Scope and Technical Requirements</h2>
<p>Before contacting agencies for quotes, prepare a written project brief. Document the pages you need, user journeys, specific third-party integrations (such as payment gateways, CRM, or shipping APIs), target launch timeline, and required administrative capabilities.</p>
<p><strong>Why this matters:</strong> Asking multiple providers to respond to the exact same technical brief allows you to compare proposals on equal footing. A trustworthy proposal clearly distinguishes between core deliverables, third-party dependencies, and optional out-of-scope features, preventing unexpected cost increases midway through the build.</p>

<h2>2. Inspect Live, Verifiable Client Portfolios</h2>
<p>Never base your hiring decision solely on PDF mockups, graphic screenshots, or staging demos. Request links to at least three to five live websites the company has designed, coded, and launched for commercial clients.</p>
<ul>
    <li><strong>Open the sites on your smartphone:</strong> Check navigation smoothness, tap target sizes, and responsiveness across varying screen sizes.</li>
    <li><strong>Verify real-world performance:</strong> Run their portfolio URLs through tools like Google PageSpeed Insights or GTmetrix to see actual mobile performance.</li>
    <li><strong>Clarify the agency's specific role:</strong> Confirm whether they built the full end-to-end solution, designed the frontend, or simply installed an off-the-shelf theme.</li>
</ul>

<h2>3. Evaluate Modern Technical Architecture and Frameworks</h2>
<p>Avoid developers who default to outdated, bloated template builders that rely on dozens of unstable third-party plugins. Ask which tech stack they recommend for your specific project and why.</p>
<p>Whether your application requires <strong>Laravel (PHP)</strong> for custom logic and database integrity, modern JavaScript frameworks for interactive interfaces, headless CMS solutions, or customized eCommerce engines, the chosen stack must align with your maintenance capabilities and long-term scalability goals.</p>

<h2>4. Insist on 100% Client Ownership of Code and Digital Assets</h2>
<p>One of the most common pitfalls when hiring an agency is discovering post-launch that the provider retains rights to your source code, domain name, or cloud hosting account. Your development agreement should explicitly state that upon milestone payments:</p>
<ul>
    <li>All Git source code repositories, databases, and custom scripts belong entirely to your company.</li>
    <li>All DNS records, domains, SSL certificates, and cloud hosting accounts are registered under your business credentials.</li>
    <li>All design assets (Figma, SVG graphics, icons, typography licenses) are transferred to you without restrictive lock-in clauses.</li>
</ul>

<h2>5. Audit Mobile Responsiveness and Core Web Vitals</h2>
<p>In India, over 65% of website visits originate from mobile devices. If a website takes longer than 2.5 seconds to load on a 4G connection, potential customers bounce to competitors.</p>
<p>Require your developer to adhere to strict Core Web Vitals benchmarks:</p>
<ul>
    <li><strong>Largest Contentful Paint (LCP):</strong> Under 2.5 seconds.</li>
    <li><strong>Cumulative Layout Shift (CLS):</strong> Less than 0.1.</li>
    <li><strong>Interaction to Next Paint (INP):</strong> Under 200 milliseconds.</li>
    <li><strong>Asset Optimization:</strong> Modern responsive image formats (WebP, AVIF), asynchronous script loading, and clean CSS delivery.</li>
</ul>

<h2>6. Verify Built-In Technical SEO and Structured Data</h2>
<p>A website that looks impressive is ineffective if search engines cannot index and understand its content. Professional web development agencies in Kanpur integrate technical SEO into the core architecture from day one, not as an expensive add-on.</p>
<p>Ensure your scope of work includes clean semantic HTML5 markup, self-referencing canonical tags, customizable meta titles and descriptions, OpenGraph social preview tags, dynamic XML sitemaps, and Schema.org structured data (JSON-LD) for your organization, local business profile, and breadcrumbs.</p>

<h2>7. Demand Milestone-Based Pricing and Transparent Contracts</h2>
<p>Be cautious of providers who demand 100% payment upfront or offer vague, single-line estimates. Reputable agencies operate with structured, milestone-based payment schedules tied to tangible deliverables:</p>
<ul>
    <li><strong>Milestone 1:</strong> Architecture, wireframes, and UI design sign-off (25–30%).</li>
    <li><strong>Milestone 2:</strong> Core database, backend logic, and frontend templates integration (30–35%).</li>
    <li><strong>Milestone 3:</strong> Quality assurance, testing, content population, and staging review (20–25%).</li>
    <li><strong>Milestone 4:</strong> Final deployment, DNS propagation, code handover, and sign-off (10–15%).</li>
</ul>

<h2>8. Review Data Security, SSL, and Backup Protocols</h2>
<p>Web security cannot be an afterthought. Inquire about the security measures implemented to protect your customer data, lead inquiries, and admin dashboard.</p>
<p>Standard security requirements include HTTPS/SSL encryption enforcement, CSRF token validation on all contact and payment forms, SQL injection defense, XSS sanitation, secure hashed authentication, and scheduled daily or weekly database backups stored offsite.</p>

<h2>9. Confirm Dedicated Communication and Sprint Reporting</h2>
<p>Smooth project delivery depends on clear, consistent communication. Before signing, establish who your direct point of contact will be throughout the project lifecycle.</p>
<p>Will you communicate with a dedicated project manager or a lead developer? What communication channels will be used (such as Slack, WhatsApp, or email)? How frequently will progress updates be shared? A professional agency provides regular sprint demos on a password-protected staging URL so you can track progress in real time.</p>

<h2>10. Establish Post-Launch Warranty, Maintenance, and SLAs</h2>
<p>Software requires ongoing updates, security patches, and monitoring. Inquire about the agency's post-launch warranty and ongoing support terms before signing an agreement:</p>
<ul>
    <li><strong>Bug-Fix Warranty:</strong> A standard 30 to 90-day post-launch warranty during which any defects, broken layouts, or bugs are resolved at no extra charge.</li>
    <li><strong>Service Level Agreements (SLAs):</strong> Guaranteed response times for emergency outages versus non-urgent change requests.</li>
    <li><strong>Server & Security Maintenance:</strong> Options for routine framework updates, uptime monitoring, and scheduled security audits.</li>
</ul>

<h2>10-Point Provider Evaluation Matrix</h2>
<p>Use this evaluation matrix to compare proposals from web development providers in Kanpur side by side:</p>
<div class="my-8 overflow-x-auto rounded-2xl border border-slate-200">
<table class="w-full min-w-[680px] border-collapse text-left">
    <thead>
        <tr class="bg-slate-100">
            <th class="p-4 font-bold text-slate-900 border-b border-slate-200">Evaluation Criteria</th>
            <th class="p-4 font-bold text-slate-900 border-b border-slate-200">Question to Ask Providers</th>
            <th class="p-4 font-bold text-slate-900 border-b border-slate-200">Green Flag (Good Sign)</th>
            <th class="p-4 font-bold text-slate-900 border-b border-slate-200">Red Flag (Warning)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">1. Scope Clarity</td>
            <td class="p-4 border-b border-slate-100">What specific deliverables are included in this quote?</td>
            <td class="p-4 border-b border-slate-100">Itemized line items, assumption notes, and change request policy.</td>
            <td class="p-4 border-b border-slate-100">Vague lump-sum pricing with no scope breakdown.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">2. Live Portfolio</td>
            <td class="p-4 border-b border-slate-100">Can you share 3 live websites you launched with similar functionality?</td>
            <td class="p-4 border-b border-slate-100">Live URLs that load fast and look sharp on mobile.</td>
            <td class="p-4 border-b border-slate-100">Only screenshots, Figma links, or non-working URLs.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">3. Tech Stack</td>
            <td class="p-4 border-b border-slate-100">Why is this platform and framework recommended for our business?</td>
            <td class="p-4 border-b border-slate-100">Clear trade-off explanation tied to your scale and maintenance.</td>
            <td class="p-4 border-b border-slate-100">"We use one template for every client regardless of requirements."</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">4. Code Ownership</td>
            <td class="p-4 border-b border-slate-100">Will we own 100% of the repository and database upon final payment?</td>
            <td class="p-4 border-b border-slate-100">Full intellectual property ownership explicitly guaranteed in contract.</td>
            <td class="p-4 border-b border-slate-100">Proprietary CMS lock-in or recurring code licensing fees.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">5. Performance & Mobile</td>
            <td class="p-4 border-b border-slate-100">What mobile speed benchmarks do you guarantee before launch?</td>
            <td class="p-4 border-b border-slate-100">Sub-2.5s LCP, responsive design testing across actual devices.</td>
            <td class="p-4 border-b border-slate-100">No speed guarantees or ignoring mobile PageSpeed scores.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">6. Technical SEO</td>
            <td class="p-4 border-b border-slate-100">Are Schema markup, meta tags, and canonical URLs built into the code?</td>
            <td class="p-4 border-b border-slate-100">Semantic HTML5, automated XML sitemaps, JSON-LD Schema included.</td>
            <td class="p-4 border-b border-slate-100">Treats basic technical SEO as an expensive separate contract.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">7. Payment Milestones</td>
            <td class="p-4 border-b border-slate-100">How are project payments structured across project phases?</td>
            <td class="p-4 border-b border-slate-100">3–4 milestone payments tied directly to verified deliverables.</td>
            <td class="p-4 border-b border-slate-100">Demanding full or 70%+ payment before seeing any progress.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">8. Security & Backups</td>
            <td class="p-4 border-b border-slate-100">What security and database backup protocols are implemented?</td>
            <td class="p-4 border-b border-slate-100">SSL, CSRF protection, secure auth, automated daily/weekly backups.</td>
            <td class="p-4 border-b border-slate-100">No backup plan or reliance on default, unhardened settings.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">9. Communication</td>
            <td class="p-4 border-b border-slate-100">Who is our direct contact and how often do we review progress?</td>
            <td class="p-4 border-b border-slate-100">Named lead contact with weekly staging reviews and demo links.</td>
            <td class="p-4 border-b border-slate-100">Unclear points of contact and multi-week communication blackouts.</td>
        </tr>
        <tr>
            <td class="p-4 border-b border-slate-100 font-semibold">10. Post-Launch Support</td>
            <td class="p-4 border-b border-slate-100">What warranty and SLA terms do you provide after deployment?</td>
            <td class="p-4 border-b border-slate-100">30–90 day bug-fix warranty and clear hourly or monthly maintenance SLA.</td>
            <td class="p-4 border-b border-slate-100">Disappearing immediately after launch; charging for initial bug fixes.</td>
        </tr>
    </tbody>
</table>
</div>

<h2>Practical Decision Checklist</h2>
<p>Before signing an agreement with any website development company in Kanpur, verify that you can check off every item on this list:</p>
<ul>
    <li>&check; <strong>Requirements Brief:</strong> We have shared an identical functional brief with every prospective vendor.</li>
    <li>&check; <strong>Live Verification:</strong> We have personally opened and tested at least three live websites built by the team.</li>
    <li>&check; <strong>Tech Fit:</strong> The recommended stack matches our business needs, expected traffic, and team skills.</li>
    <li>&check; <strong>Written IP Rights:</strong> The contract states that we own 100% of code, design files, domains, and data.</li>
    <li>&check; <strong>Speed Target:</strong> The agency commits to mobile responsiveness and Core Web Vitals performance.</li>
    <li>&check; <strong>SEO Foundation:</strong> Canonical URLs, meta data, and Schema markup are included natively.</li>
    <li>&check; <strong>Milestone Payments:</strong> Payments are tied to phased milestones and verified staging deliverables.</li>
    <li>&check; <strong>Security & Backups:</strong> HTTPS, CSRF validation, and automated backups are configured.</li>
    <li>&check; <strong>Single Contact:</strong> A named project manager or lead developer handles communication and weekly demos.</li>
    <li>&check; <strong>Warranty Period:</strong> A 30 to 90-day post-launch warranty covers defect resolution in writing.</li>
</ul>

<h2>Choosing the Best Fit for Your Business</h2>
<p>The right web development partner is not necessarily the cheapest quote or the one making unverified claims of being "#1". The ideal partner is the team whose proposal demonstrates a clear understanding of your requirements, provides realistic timelines, respects your intellectual property, and communicates transparently.</p>
<p>By applying this 10-point checklist to every vendor you consider, you protect your investment and build a high-performance digital asset designed for long-term growth.</p>
HTML;

        $faqs = [
            [
                'question' => 'How much does website development cost in Kanpur?',
                'answer' => 'Website development costs in Kanpur typically range from ₹15,000 to ₹40,000 for standard business presentation websites, and ₹40,000 to ₹1,50,000+ for custom web applications, eCommerce stores, or SaaS platforms with custom backend logic.',
            ],
            [
                'question' => 'How long does it take to develop a professional website in Kanpur?',
                'answer' => 'A standard business website typically takes 2 to 4 weeks, while custom web applications and eCommerce portals take between 6 to 12 weeks depending on features, integrations, and testing cycles.',
            ],
            [
                'question' => 'Should I choose a local Kanpur agency or a remote development company?',
                'answer' => 'A local Kanpur development partner allows for in-person meetings, aligned time zones, and direct accountability, while still providing international development standards when you verify their technical architecture and live portfolio.',
            ],
            [
                'question' => 'Who owns the website code and domain after project completion?',
                'answer' => 'You should always own 100% of your source code, database, domain, and assets. Ensure your contract explicitly guarantees full intellectual property transfer upon final payment.',
            ],
            [
                'question' => 'What happens if bugs are discovered after the website launches?',
                'answer' => 'A professional web development contract should include a 30 to 90-day post-launch warranty period where any bugs or defects in the agreed scope are corrected without additional charge.',
            ],
        ];

        $existingBlog = DB::table('blogs')
            ->where(function ($query) {
                $query->where('slug', 'how-to-choose-a-website-development-company-in-kanpur')
                    ->orWhere('slug', 'like', '%website-development-company-in-kanpur%')
                    ->orWhere('title', 'like', '%How to Choose%Kanpur%')
                    ->orWhere('title', 'like', '%Web Developer in Kanpur%');
            })->first();

        $blogData = [
            'title' => 'How to Choose a Web Development Company in Kanpur: 10-Point Checklist',
            'slug' => 'how-to-choose-a-website-development-company-in-kanpur',
            'excerpt' => 'Evaluating web developers in Kanpur? Use this practical 10-point checklist covering requirements, live portfolios, technology stacks, IP ownership, pricing models, and post-launch support.',
            'content' => $content,
            'meta_title' => 'How to Choose a Web Development Company in Kanpur: 10-Point Checklist | Backend Coders India',
            'meta_description' => 'A practical 10-point checklist for evaluating web development companies in Kanpur. Compare portfolios, code ownership, technical architecture, pricing, and SLAs.',
            'meta_keywords' => 'how to choose a website development company in Kanpur, web developer in Kanpur checklist, hiring a web development agency, website development cost Kanpur, web development evaluation checklist Kanpur',
            'faqs' => json_encode($faqs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
            'table_of_contents' => null, // Let accessor auto-generate TOC from the new H2 headings
            'is_published' => true,
            'updated_at' => now(),
        ];

        if ($existingBlog) {
            DB::table('blogs')->where('id', $existingBlog->id)->update($blogData);
        } else {
            DB::table('blogs')->insert(array_merge(['id' => 2, 'created_at' => now()], $blogData));
        }
    }

    public function down(): void
    {
        // No destructive rollback needed for content migrations.
    }
};
