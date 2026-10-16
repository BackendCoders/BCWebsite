<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('blogs')
            ->where('slug', 'like', '%custom-web-application-development%')
            ->get(['id', 'content'])
            ->each(function ($blog): void {
                $content = <<<'HTML'
<p>A custom web app can help your team do its work in one place. It can also give your customers an easier way to use your service. Start with the problem you want the app to solve.</p>

<h2>Plan around real tasks</h2>
<p>Write down the steps people take today. Talk with the staff and customers who do this work. Look for delays, repeated data entry, and tasks that cause mistakes.</p>
<p>Choose one main goal for the first version. For example, the app might help staff track orders or let customers book a service. A clear goal helps you decide what to build first.</p>

<h2>Choose the first features</h2>
<p>List the people who will use the app and what each person needs to do. A staff member may need to update an order. A customer may need to check its status. Give each person access to the parts of the app they need.</p>
<p>Keep the first version focused. Add the main tasks, key records, and any alerts people need. Save less urgent ideas for a later update. This makes the app easier to build, test, and improve.</p>

<h2>Plan how the app will work</h2>
<p>Some apps need to share data with tools you already use, such as payment, email, or stock systems. List these tools early. Check that they can connect to the new app and agree on which system owns each piece of data.</p>
<p>Plan for phones and computers. Use clear labels, readable text, and simple forms. Test the app with people who will use it. Their feedback can show where a step is hard to follow.</p>

<h2>Build in safety and room to grow</h2>
<p>Only collect data the app needs. Give each user the right level of access, and protect sign-ins and stored data. Keep backups and decide who will handle updates after launch.</p>
<p>Start with a small group of users. Fix problems they find before you invite more people. Review how the app is used and add features when there is a clear need.</p>

<h2>Set a clear project scope</h2>
<p>Before work starts, agree on the main features, who will use them, and what tools the app must connect to. Also plan for testing, hosting, support, and future changes. These choices help your team compare estimates and avoid surprises.</p>

<h2>Further reading</h2>
<p>These guides cover search basics, developer setup, and accessibility.</p>
<ul>
<li><a href="https://developers.google.com/search/docs/fundamentals/get-started-developers" target="_blank" rel="noopener noreferrer">Google Search guidance for developers</a></li>
<li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener noreferrer">Google Search Engine Optimization Starter Guide</a></li>
<li><a href="https://www.w3.org/WAI/standards-guidelines/wcag/" target="_blank" rel="noopener noreferrer">W3C Web Content Accessibility Guidelines</a></li>
</ul>
HTML;

                DB::table('blogs')
                    ->where('id', $blog->id)
                    ->update([
                        'content' => $content,
                        'excerpt' => 'Plan a custom web app around real tasks, clear user needs, key features, and ongoing support.',
                        'updated_at' => now(),
                    ]);
            });
    }

    public function down(): void
    {
        // Keep the simpler copy rather than restoring the older, harder-to-read text.
    }
};
