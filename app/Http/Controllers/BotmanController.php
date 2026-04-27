<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BotmanController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        // Greetings
        $botman->hears('/\b(hi|hello|hey|yo|hai)\b/i', function ($bot) {
            $bot->reply("Hello! 👋 Welcome to Backend Coders.\n\nType `services`, `pricing`, `portfolio`, `contact`, or `help` to get started.");
        });

        $botman->hears('/\b(good morning|good afternoon|good evening)\b/i', function ($bot) {
            $bot->reply("Good day! 👋 How can I help you today?");
        });

        // Help / menu
        $botman->hears('/\b(help|menu|start|options|commands)\b/i', function ($bot) {
            $bot->reply($this->mainMenu());
        });

        // Thanks
        $botman->hears('/\b(thank you|thanks|thx|appreciate it|appreciate)\b/i', function ($bot) {
            $bot->reply("You're welcome! 😊 If you want, I can also show you our `services` or `pricing`.");
        });

        // Goodbye
        $botman->hears('/\b(bye|goodbye|see you|later|good night)\b/i', function ($bot) {
            $bot->reply("Goodbye! 👋 Feel free to come back anytime.");
        });

        // Services overview
        $botman->hears('/\b(services?|what do you do|what can you do|offer|provide)\b/i', function ($bot) {
            $bot->reply("We help businesses build, grow, and automate online.\n\n" . $this->serviceMenu());
        });

        // Specific services
        $botman->hears('/\b(web development|website|web design|landing page|ecommerce website)\b/i', function ($bot) {
            $bot->reply("🌐 Web Development\n\nWe build:\n• Business websites\n• Landing pages\n• E-commerce stores\n• Admin dashboards\n• Custom web apps\n\nWe use Laravel, React, Vue.js, and WordPress depending on the project.\n\nWant `pricing` or `timeline`?");
        });

        $botman->hears('/\b(software|web app|custom application|saas|dashboard|portal)\b/i', function ($bot) {
            $bot->reply("🧩 Custom Software Development\n\nWe create:\n• SaaS products\n• CRM / ERP systems\n• Client portals\n• Internal dashboards\n• Workflow automation tools\n\nShare your idea and I can help you scope it.");
        });

        $botman->hears('/\b(ios|android|mobile app|app development|flutter|react native)\b/i', function ($bot) {
            $bot->reply("📱 Mobile App Development\n\nWe build Android and iOS apps using Flutter and React Native.\n\nCommon use cases:\n• Booking apps\n• Delivery apps\n• Customer apps\n• Business utility apps");
        });

        $botman->hears('/\b(seo|search engine optimization|google ranking|organic traffic|keyword)\b/i', function ($bot) {
            $bot->reply("📈 SEO Services\n\nWe help with:\n• Keyword research\n• On-page SEO\n• Technical SEO\n• Local SEO\n• Link building\n• Content optimization\n\nAsk me about `pricing` or `results`.");
        });

        $botman->hears('/\b(digital marketing|social media|ads|lead generation|branding)\b/i', function ($bot) {
            $bot->reply("📣 Digital Marketing\n\nWe can support:\n• Google Ads\n• Social media strategy\n• Lead generation\n• Landing page optimization\n• Brand positioning");
        });

        // Pricing
        $botman->hears('/\b(price|pricing|cost|charges?|fee|budget|estimate|quote)\b/i', function ($bot) {
            $bot->reply("💰 Pricing\n\nEvery project is priced based on scope and features.\n\nTypical starting points:\n• Basic website: ₹15,000+\n• E-commerce website: ₹40,000+\n• SEO: ₹5,000/month+\n• Custom web app: ₹50,000+\n• Mobile app: project-based\n\nShare your requirements and I’ll help you estimate it.");
        });

        // Timeline
        $botman->hears('/\b(timeline|time|duration|how long|delivery|turnaround|when will it be ready)\b/i', function ($bot) {
            $bot->reply("⏱️ Timeline\n\nTypical delivery time depends on scope:\n• Simple website: 1-2 weeks\n• E-commerce website: 3-4 weeks\n• Custom web app: 4-8 weeks\n• Mobile app: 4-10 weeks\n• SEO: ongoing work\n\nIf you share your project details, I can give a more accurate timeline.");
        });

        // Contact
        $botman->hears('/\b(contact|reach you|connect|phone|call|whatsapp|email)\b/i', function ($bot) {
            $bot->reply("📞 Contact Us\n\n• Phone / WhatsApp: +91 9140092133\n• Email: info@backendcoders.com\n• Website: www.backendcoders.com\n\nYou can ask for a `call`, `meeting`, or `quote`.");
        });

        // Portfolio
        $botman->hears('/\b(portfolio|project|projects|work|case study|case studies|samples|examples)\b/i', function ($bot) {
            $bot->reply("🎨 Portfolio\n\nWe have delivered projects in:\n• E-commerce\n• SaaS\n• Corporate websites\n• Educational platforms\n• Healthcare apps\n• Internal business tools\n\nIf you want, I can also share our `web development` or `software` capabilities.");
        });

        // Technology
        $botman->hears('/\b(tech stack|technology stack|stack|framework|language|tools|backend|frontend)\b/i', function ($bot) {
            $bot->reply("🛠️ Technology Stack\n\nFrontend: React, Vue.js, Tailwind CSS\nBackend: Laravel, PHP, Node.js\nMobile: Flutter, React Native\nDatabase: MySQL, PostgreSQL, MongoDB\nCloud: AWS, Google Cloud\n\nAsk about a specific service and I’ll tell you the best tech choice.");
        });

        // About
        $botman->hears('/\b(about|who are you|company|background|your team|where are you from)\b/i', function ($bot) {
            $bot->reply("🏢 About Backend Coders\n\nWe are a web development and digital services company based in Kanpur, India.\n\nWe work on:\n• Websites\n• Web apps\n• SEO\n• Mobile apps\n• SaaS products\n\nType `services` to see everything we do.");
        });

        // Support
        $botman->hears('/\b(support|help me|issue|problem|bug|error|fix)\b/i', function ($bot) {
            $bot->reply("🆘 Support\n\nFor support, please email support@backendcoders.com\nFor urgent help, call +91 9140092133\n\nIf you're a client, we also provide post-launch support.");
        });

        // Training
        $botman->hears('/\b(training|train|learn|course|tutorial|workshop|classes)\b/i', function ($bot) {
            $bot->reply("📚 Training\n\nWe offer training in:\n• Laravel\n• React and Vue.js\n• Web development basics\n• SEO basics\n\nIf you want team training or one-on-one training, send us a message.");
        });

        // Careers
        $botman->hears('/\b(career|job|hiring|vacancy|vacancies|internship|work with you)\b/i', function ($bot) {
            $bot->reply("💼 Careers\n\nWe are often looking for:\n• Full Stack Developer\n• Frontend Developer\n• SEO Specialist\n• Mobile App Developer\n\nSend your resume to careers@backendcoders.com");
        });

        // Payments / process / maintenance
        $botman->hears('/\b(payment|pay|invoice|installment|advance|deposit)\b/i', function ($bot) {
            $bot->reply("💳 Payment Process\n\nUsually we work with an advance payment, then milestone-based payments depending on the project.\n\nIf you share your project size, I can suggest a suitable payment structure.");
        });

        $botman->hears('/\b(domain|hosting|maintenance|updates|amc|renewal)\b/i', function ($bot) {
            $bot->reply("🧰 Domain, Hosting, and Maintenance\n\nWe can help with:\n• Domain setup\n• Hosting setup\n• SSL installation\n• Website maintenance\n• Feature updates\n• Bug fixes\n\nAsk me for `contact` if you want our team to help.");
        });

        // Fallback
        $botman->fallback(function ($bot) {
            $bot->reply("I didn't understand that yet.\n\nTry one of these:\n• services\n• pricing\n• timeline\n• portfolio\n• contact\n• support\n• help");
        });

        $botman->listen();
    }

    public function webChat(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $message = $request->input('message', '');
        $response = $this->chatResponse($message);

        return response()->json($response);
    }

    private function mainMenu(): string
    {
        return "Here are the things you can ask me:\n\n• services\n• web development\n• software / SaaS\n• mobile app\n• SEO\n• pricing\n• timeline\n• portfolio\n• technology stack\n• contact\n• support\n• training\n• careers\n• payment\n• domain / hosting / maintenance";
    }

    private function serviceMenu(): string
    {
        return "Available services:\n\n• Web Development\n• Custom Software / SaaS\n• Mobile App Development\n• SEO Services\n• Digital Marketing\n• API Development\n• Maintenance and Support\n• Training";
    }

    private function chatResponse(string $message): array
    {
        $text = strtolower(trim($message));

        if (preg_match('/\b(hi|hello|hey|yo|hai)\b/i', $text) || preg_match('/\b(good morning|good afternoon|good evening)\b/i', $text)) {
            return ['text' => "Hello! 👋 Welcome to Backend Coders.\n\nType `services`, `pricing`, `portfolio`, `contact`, or `help` to get started.", 'buttons' => []];
        }

        if (preg_match('/\b(help|menu|start|options|commands)\b/i', $text)) {
            return ['text' => $this->mainMenu(), 'buttons' => []];
        }

        if (preg_match('/\b(thank you|thanks|thx|appreciate it|appreciate)\b/i', $text)) {
            return ['text' => "You're welcome! 😊 If you want, I can also show you our `services` or `pricing`.", 'buttons' => []];
        }

        if (preg_match('/\b(bye|goodbye|see you|later|good night)\b/i', $text)) {
            return ['text' => 'Goodbye! 👋 Feel free to come back anytime.', 'buttons' => []];
        }

        if (preg_match('/\b(services?|what do you do|what can you do|offer|provide)\b/i', $text)) {
            return ['text' => "We help businesses build, grow, and automate online.\n\n" . $this->serviceMenu(), 'buttons' => []];
        }

        if (preg_match('/\b(web development|website|web design|landing page|ecommerce website)\b/i', $text)) {
            return ['text' => "🌐 Web Development\n\nWe build:\n• Business websites\n• Landing pages\n• E-commerce stores\n• Admin dashboards\n• Custom web apps\n\nWe use Laravel, React, Vue.js, and WordPress depending on the project.\n\nWant `pricing` or `timeline`?", 'buttons' => []];
        }

        if (preg_match('/\b(software|web app|custom application|saas|dashboard|portal)\b/i', $text)) {
            return ['text' => "🧩 Custom Software Development\n\nWe create:\n• SaaS products\n• CRM / ERP systems\n• Client portals\n• Internal dashboards\n• Workflow automation tools\n\nShare your idea and I can help you scope it.", 'buttons' => []];
        }

        if (preg_match('/\b(ios|android|mobile app|app development|flutter|react native)\b/i', $text)) {
            return ['text' => "📱 Mobile App Development\n\nWe build Android and iOS apps using Flutter and React Native.\n\nCommon use cases:\n• Booking apps\n• Delivery apps\n• Customer apps\n• Business utility apps", 'buttons' => []];
        }

        if (preg_match('/\b(seo|search engine optimization|google ranking|organic traffic|keyword)\b/i', $text)) {
            return ['text' => "📈 SEO Services\n\nWe help with:\n• Keyword research\n• On-page SEO\n• Technical SEO\n• Local SEO\n• Link building\n• Content optimization\n\nAsk me about `pricing` or `results`.", 'buttons' => []];
        }

        if (preg_match('/\b(digital marketing|social media|ads|lead generation|branding)\b/i', $text)) {
            return ['text' => "📣 Digital Marketing\n\nWe can support:\n• Google Ads\n• Social media strategy\n• Lead generation\n• Landing page optimization\n• Brand positioning", 'buttons' => []];
        }

        if (preg_match('/\b(price|pricing|cost|charges?|fee|budget|estimate|quote)\b/i', $text)) {
            return ['text' => "💰 Pricing\n\nEvery project is priced based on scope and features.\n\nTypical starting points:\n• Basic website: ₹15,000+\n• E-commerce website: ₹40,000+\n• SEO: ₹5,000/month+\n• Custom web app: ₹50,000+\n• Mobile app: project-based\n\nShare your requirements and I’ll help you estimate it.", 'buttons' => []];
        }

        if (preg_match('/\b(timeline|time|duration|how long|delivery|turnaround|when will it be ready)\b/i', $text)) {
            return ['text' => "⏱️ Timeline\n\nTypical delivery time depends on scope:\n• Simple website: 1-2 weeks\n• E-commerce website: 3-4 weeks\n• Custom web app: 4-8 weeks\n• Mobile app: 4-10 weeks\n• SEO: ongoing work\n\nIf you share your project details, I can give a more accurate timeline.", 'buttons' => []];
        }

        if (preg_match('/\b(contact|reach you|connect|phone|call|whatsapp|email)\b/i', $text)) {
            return ['text' => "📞 Contact Us\n\n• Phone / WhatsApp: +91 9140092133\n• Email: info@backendcoders.com\n• Website: www.backendcoders.com\n\nYou can ask for a `call`, `meeting`, or `quote`.", 'buttons' => []];
        }

        if (preg_match('/\b(portfolio|project|projects|work|case study|case studies|samples|examples)\b/i', $text)) {
            return ['text' => "🎨 Portfolio\n\nWe have delivered projects in:\n• E-commerce\n• SaaS\n• Corporate websites\n• Educational platforms\n• Healthcare apps\n• Internal business tools\n\nIf you want, I can also share our `web development` or `software` capabilities.", 'buttons' => []];
        }

        if (preg_match('/\b(tech stack|technology stack|stack|framework|language|tools|backend|frontend)\b/i', $text)) {
            return ['text' => "🛠️ Technology Stack\n\nFrontend: React, Vue.js, Tailwind CSS\nBackend: Laravel, PHP, Node.js\nMobile: Flutter, React Native\nDatabase: MySQL, PostgreSQL, MongoDB\nCloud: AWS, Google Cloud\n\nAsk about a specific service and I’ll tell you the best tech choice.", 'buttons' => []];
        }

        if (preg_match('/\b(about|who are you|company|background|your team|where are you from)\b/i', $text)) {
            return ['text' => "🏢 About Backend Coders\n\nWe are a web development and digital services company based in Kanpur, India.\n\nWe work on:\n• Websites\n• Web apps\n• SEO\n• Mobile apps\n• SaaS products\n\nType `services` to see everything we do.", 'buttons' => []];
        }

        if (preg_match('/\b(support|help me|issue|problem|bug|error|fix)\b/i', $text)) {
            return ['text' => "🆘 Support\n\nFor support, please email support@backendcoders.com\nFor urgent help, call +91 9140092133\n\nIf you're a client, we also provide post-launch support.", 'buttons' => []];
        }

        if (preg_match('/\b(training|train|learn|course|tutorial|workshop|classes)\b/i', $text)) {
            return ['text' => "📚 Training\n\nWe offer training in:\n• Laravel\n• React and Vue.js\n• Web development basics\n• SEO basics\n\nIf you want team training or one-on-one training, send us a message.", 'buttons' => []];
        }

        if (preg_match('/\b(career|job|hiring|vacancy|vacancies|internship|work with you)\b/i', $text)) {
            return ['text' => "💼 Careers\n\nWe are often looking for:\n• Full Stack Developer\n• Frontend Developer\n• SEO Specialist\n• Mobile App Developer\n\nSend your resume to careers@backendcoders.com", 'buttons' => []];
        }

        if (preg_match('/\b(payment|pay|invoice|installment|advance|deposit)\b/i', $text)) {
            return ['text' => "💳 Payment Process\n\nUsually we work with an advance payment, then milestone-based payments depending on the project.\n\nIf you share your project size, I can suggest a suitable payment structure.", 'buttons' => []];
        }

        if (preg_match('/\b(domain|hosting|maintenance|updates|amc|renewal)\b/i', $text)) {
            return ['text' => "🧰 Domain, Hosting, and Maintenance\n\nWe can help with:\n• Domain setup\n• Hosting setup\n• SSL installation\n• Website maintenance\n• Feature updates\n• Bug fixes\n\nAsk me for `contact` if you want our team to help.", 'buttons' => []];
        }

        return [
            'text' => "I didn't understand that yet.\n\nTry one of these:\n• services\n• pricing\n• timeline\n• portfolio\n• contact\n• support\n• help",
            'buttons' => [],
        ];
    }
}
