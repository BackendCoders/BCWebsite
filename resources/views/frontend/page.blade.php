@extends('component.main')

@section('content')
@php
    $sections = $page?->sections ?? collect();
    $heroSection = $sections->firstWhere('type', 'hero');
    $heroItem = $heroSection?->items?->first();
    $heroImage = $heroItem?->image ?: $heroSection?->image;
    $contentSections = $sections->reject(fn ($section) => \Illuminate\Support\Str::lower((string) $section->type) === 'hero')->values();

    $mediaUrl = function ($path) {
        if (! $path) {
            return asset('assets/images/banner.png');
        }

        $path = trim(str_replace('\\', '/', (string) $path));

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        $path = ltrim($path, '/');

        if (\Illuminate\Support\Str::startsWith($path, 'public/')) {
            $path = \Illuminate\Support\Str::after($path, 'public/');
        }

        if (\Illuminate\Support\Str::startsWith($path, 'storage/')) {
            $path = \Illuminate\Support\Str::after($path, 'storage/');
        }

        if (\Illuminate\Support\Str::startsWith($path, ['assets/', 'images/', 'uploads/', 'files/']) && file_exists(public_path($path))) {
            return asset($path);
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        return route('media.file', ['path' => $path]);
    };

    $firstItem = fn ($section) => $section?->items?->first();
    $heroExtra = $heroItem?->extra ?? [];
    $pageTitle = strip_tags((string) ($page->meta_title ?: $page->title ?: 'Backend Coders India'));
    $pageHeading = $heroItem?->title ?: ($heroSection?->title ?: ($page->title ?: $pageTitle));
    $pageDescription = strip_tags((string) ($page->meta_description ?: $heroItem?->description ?: ''));
    $heroImageUrl = $heroImage ? $mediaUrl($heroImage) : asset('assets/images/banner.png');

    $pageCanonical = 'https://backendcodersindia.com/' . ltrim(request()->path(), '/');

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Services',
                'item' => route('frontend.service'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $pageTitle,
                'item' => $pageCanonical,
            ],
        ],
    ];

    $publisherSchema = [
        '@type' => 'Organization',
        '@id' => 'https://backendcodersindia.com/#organization',
        'name' => 'Backend Coders India',
        'url' => 'https://backendcodersindia.com',
        'logo' => [
            '@type' => 'ImageObject',
            '@id' => 'https://backendcodersindia.com/#logo',
            'url' => asset('assets/images/bci_icon.png'),
        ],
    ];

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => $pageCanonical . '#webpage',
        'name' => $pageTitle,
        'headline' => strip_tags((string) $pageHeading),
        'description' => $pageDescription,
        'url' => $pageCanonical,
        'primaryImageOfPage' => [
            '@type' => 'ImageObject',
            'url' => $heroImageUrl,
        ],
        'publisher' => $publisherSchema,
    ];

    $pageSlug = $page?->slug ?: request()->segment(2);

    $serviceCatalog = [
        'website-design-development' => [
            'name' => 'Website Design & Development Services in Kanpur',
            'serviceType' => 'Website Design & Development',
            'description' => 'Custom responsive websites, landing pages, enterprise web portals, and CMS solutions engineered with clean Laravel and modern frontend architecture.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => [
                'price' => '7999',
                'priceCurrency' => 'INR',
                'description' => 'Starter Business Website Plan with 1-page responsive layout, 1-year hosting, SSL, and domain setup.',
                'url' => 'https://backendcodersindia.com/packages',
            ],
        ],
        'mobile-app-development' => [
            'name' => 'Mobile App Development Company in Kanpur | Android & iOS',
            'serviceType' => 'Mobile Application Development',
            'description' => 'High-performance native Android, iOS, and cross-platform mobile apps with secure APIs, offline caching, and intuitive user experiences.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => [
                'price' => '19999',
                'priceCurrency' => 'INR',
                'description' => 'Starter Android App Plan with custom UI/UX design, up to 5 screens, and API integration.',
                'url' => 'https://backendcodersindia.com/packages',
            ],
        ],
        'erp-pos-software' => [
            'name' => 'ERP & POS Software Development Company in Kanpur',
            'serviceType' => 'ERP & POS Software Development',
            'description' => 'Custom enterprise resource planning and point-of-sale software engineered for Kanpur manufacturers, retail chains, and distributors with inventory control and GST billing.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
        'custom-web-applications' => [
            'name' => 'Custom Web Application Development Company in Kanpur',
            'serviceType' => 'Custom Web Application Development',
            'description' => 'Scalable, secure custom web applications built with Laravel, modern JavaScript, and enterprise-grade architecture for modern business growth in Kanpur.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
        'saas-development' => [
            'name' => 'SaaS Application Development Services',
            'serviceType' => 'SaaS Platform Development',
            'description' => 'End-to-end SaaS application development, multi-tenant cloud architecture, subscription billing, and API integrations by Backend Coders India.',
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
        'ecommerce-development' => [
            'name' => 'Custom E-Commerce Website Development Services',
            'serviceType' => 'E-Commerce Website Development',
            'description' => 'High-conversion online stores, custom shopping carts, payment gateway integrations, and scalable ecommerce software engineered for modern retail brands.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
        'api-development' => [
            'name' => 'API Development & Systems Integration Services',
            'serviceType' => 'API Development & Systems Integration',
            'description' => 'Secure, well-documented RESTful APIs, third-party webhook integrations, and high-performance microservices architecture.',
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
        'startup-mvp-development' => [
            'name' => 'Startup MVP Development Company in Kanpur',
            'serviceType' => 'Startup MVP Development',
            'description' => 'Turn startup ideas into validated, market-ready MVPs with rapid engineering cycles, lean architecture, and scalable foundations by Backend Coders India in Kanpur.',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kanpur'],
                ['@type' => 'State', 'name' => 'Uttar Pradesh'],
                ['@type' => 'Country', 'name' => 'India'],
            ],
            'offer' => null,
        ],
    ];

    $serviceAeoData = [
        'website-design-development' => [
            'direct_answer' => 'Website design and development builds responsive, accessible, and search-optimized websites tailored to your brand goals. Backend Coders India engineers custom corporate sites, lead generation landing pages, and web portals using clean Laravel architecture, helping Kanpur businesses and Indian startups turn casual search visitors into verified paying inquiries.',
            'pricing_h2' => 'How Much Does Website Design & Development Cost in Kanpur?',
            'pricing_intro' => 'Transparent fixed pricing backed by full source code ownership, zero recurring seat fees, and rapid milestone delivery.',
            'tiers' => [
                ['name' => 'Basic Website (Starter Plan)', 'price' => '₹7,999', 'period' => 'One-Time', 'timeline' => '5–7 Business Days', 'ideal' => 'Local Kanpur service firms, personal brands, and single-product landing pages', 'features' => ['1-Page Responsive Custom Layout', '1st Year Domain, Hosting & SSL Setup Included', 'Lead Contact Form with Instant Email Alerts', 'Social Media Links & WhatsApp Button Setup', 'Basic Technical On-Page SEO Setup', 'Full Source Code & Git Handover']],
                ['name' => 'Business Website (Growth Plan)', 'price' => '₹15,999', 'period' => 'One-Time', 'timeline' => '2–3 Weeks', 'ideal' => 'Expanding businesses, traders, manufacturers, and corporate firms', 'features' => ['Up to 15 Custom Responsive Pages', '1st Year Domain, Hosting & SSL Setup Included', 'Speed Optimization (Sub-2s Load Time)', 'Schema Markup & Google Analytics Setup', 'Blog & Knowledge Base Integration', '1 Month Dedicated Post-Launch Support'], 'featured' => true],
                ['name' => 'E-Commerce Website (Online Store)', 'price' => '₹24,999 – ₹49,999', 'period' => 'One-Time', 'timeline' => '3–4 Weeks', 'ideal' => 'Retail stores, D2C brands, and wholesalers selling products online', 'features' => ['Mobile-First Product Catalog & Inventory System', '1-Click Checkout & Razorpay / UPI Gateway Setup', 'Automated GST Tax Invoice Generation (PDF)', 'Courier API Integration (Shiprocket / BlueDart)', 'Customer Accounts, Order Tracking & Alerts', 'Full Database & Code Ownership (0% Commission)']],
            ],
            'kanpur_context' => 'From manufacturing suppliers in Dada Nagar and Panki to retail merchants along Naveen Market and Birhana Road, our Kanpur web development team crafts digital experiences that perform reliably on both mobile 4G networks and high-speed office connections.',
            'faqs' => [
                ['q' => 'Website banane mein kitna kharcha aata hai?', 'a' => 'Kanpur mein ek professional website banane ka kharcha website ke type aur features par depend karta hai. Backend Coders India mein single-page basic website ₹7,999 se start hoti hai (jisme 1st year domain, hosting aur SSL setup shamil hai). Multi-page business website ₹15,999 mein aati hai aur complete e-commerce store ₹24,999 se ₹49,999 ke beech shuru hota hai. Advance features jaise custom CRM, ERP ya multi-vendor marketplace ke liye requirements ke anusaar quotation diya jata hai. Detail packages dekhne ke liye humara packages page (/packages) visit karein ya Kanpur team se +91 91400 92133 par direct baat karein.'],
                ['q' => 'What is included in the website packages versus optional add-ons?', 'a' => 'All standard website packages include responsive frontend design, 1st year domain setup, fast cloud hosting, SSL certificate installation, contact forms, and full source code handover. Optional paid add-ons include ongoing monthly content marketing, custom third-party ERP/CRM connectors, multi-language localization, and post-warranty SLA maintenance retainers. Subsequent yearly hosting renewals are billed at cost with zero vendor lock-in.'],
                ['q' => 'How long does a website take to build and launch in Kanpur?', 'a' => 'A starter landing page website is typically delivered within 5 to 7 business days. Comprehensive corporate websites with up to 15 pages take 2 to 3 weeks, while complex dynamic portals require 3 to 5 weeks including testing and client revisions.'],
                ['q' => 'Will I own my website code and hosting after launch?', 'a' => 'Yes. Backend Coders India transfers 100% intellectual property ownership to you upon project sign-off. You receive direct access to your Git repository, database backups, and hosting credentials with zero ongoing lock-in fees.'],
                ['q' => 'Are your websites mobile-friendly and optimized for Google search?', 'a' => 'Yes. Every website is built mobile-first using clean semantic HTML5, fast Tailwind CSS stylesheets, and native technical SEO markup (including valid JSON-LD schema, canonical URLs, and Open Graph tags) to ensure rapid Google and AI indexation.'],
            ],
        ],
        'mobile-app-development' => [
            'direct_answer' => 'Mobile app development delivers high-performance Android, iOS, and cross-platform applications engineered for intuitive navigation and reliable offline performance. Backend Coders India develops custom mobile apps with secure REST APIs, payment gateways, and push notifications, helping Kanpur retail chains, logistics operators, and startups engage customers directly on their smartphones.',
            'pricing_h2' => 'How Much Does Custom Mobile App Development Cost in Kanpur?',
            'pricing_intro' => 'Milestone-based pricing with complete intellectual property handover and Play Store / App Store release support.',
            'tiers' => [
                ['name' => 'Starter Android App', 'price' => '₹19,999', 'period' => 'One-Time', 'timeline' => '3–4 Weeks', 'ideal' => 'Retail catalogs, booking apps, and local services', 'features' => ['Custom UI/UX Design (Up to 5 Screens)', 'Secure RESTful API Integration', 'Push Notification Messaging', 'Google Play Store Submission Assistance', 'Complete Source Code Handover']],
                ['name' => 'Cross-Platform App (Flutter)', 'price' => '₹39,999', 'period' => 'One-Time', 'timeline' => '6–8 Weeks', 'ideal' => 'Startups and B2B workflows requiring iOS + Android', 'features' => ['Single Codebase for Android & iOS', 'Offline SQLite Local Data Caching', 'Razorpay / Stripe Payment Gateway', 'User Profile & Order Management', '2 Months Post-Launch Bug Fix Support'], 'featured' => true],
                ['name' => 'Enterprise Mobile Platform', 'price' => '₹79,999+', 'period' => 'One-Time', 'timeline' => '8–12 Weeks', 'ideal' => 'Logistics fleets, field sales teams, and multi-vendor apps', 'features' => ['Live GPS & Route Dispatch Tracking', 'Multi-Role Staff Permission Engine', 'Real-Time WebSockets Synchronization', 'Admin Web Dashboard & Analytics', 'Dedicated SLA Maintenance Retainer']],
            ],
            'kanpur_context' => 'We engineer mobile solutions tailored to Kanpur’s active transport arteries along GT Road, regional distribution networks, and local commerce hubs requiring seamless offline data caching during connectivity drops.',
            'faqs' => [
                ['q' => 'Should I build a native Android app or a cross-platform Flutter app?', 'a' => 'For businesses targeting the majority Indian mobile market on a focused budget, a native Android app or Flutter app offers exceptional performance. Flutter allows you to launch on both Android and iOS simultaneously from a single codebase, reducing engineering and maintenance costs by up to 40%.'],
                ['q' => 'Do you assist with publishing to the Google Play Store and Apple App Store?', 'a' => 'Yes. We handle the entire release lifecycle including app signing, privacy policy compliance, asset generation, store listing setup, and resolving review feedback from Google and Apple.'],
                ['q' => 'Can the mobile app work when internet connectivity is interrupted?', 'a' => 'Yes. We architect mobile apps with local SQLite/Room caching and background synchronization, allowing users to browse catalogs, draft orders, and record field data even in low-connectivity areas.'],
            ],
        ],
        'erp-pos-software' => [
            'direct_answer' => 'ERP and POS software development streamlines inventory tracking, automated GST billing, multi-counter checkout, and financial accounting into a single unified dashboard. Backend Coders India builds modular, offline-resilient management systems tailored for Kanpur manufacturers in Panki, wholesale distributors in Nayaganj, and retail outlets needing error-free daily stock control.',
            'pricing_h2' => 'How Much Does Custom ERP & POS Software Development Cost in Kanpur?',
            'pricing_intro' => 'One-time custom software investment without expensive recurring monthly per-user licensing fees.',
            'tiers' => [
                ['name' => 'Retail POS & Billing System', 'price' => '₹39,999', 'period' => 'One-Time', 'timeline' => '3–4 Weeks', 'ideal' => 'Retail shops, apparel stores, and hardware outlets', 'features' => ['Fast Barcode Scanning & Thermal Printing', 'Automated GST Invoice Generation', 'Daily Cash Drawer Reconciliation', 'Single & Multi-Counter Synchronization', 'Zero Recurring Monthly Per-User Fees']],
                ['name' => 'Distribution & Stock ERP', 'price' => '₹79,999', 'period' => 'One-Time', 'timeline' => '6–8 Weeks', 'ideal' => 'Wholesale dealers, FMCG distributors, and warehouses', 'features' => ['Multi-Warehouse Real-Time Stock Tracking', 'Vendor Purchase Orders & Credit Ledgers', 'Customer Outstanding & Payment Reminders', 'Role-Based Operator Access Controls', 'Automated Daily Cloud Backups'], 'featured' => true],
                ['name' => 'Industrial Manufacturing ERP', 'price' => '₹1,49,999+', 'period' => 'One-Time', 'timeline' => '10–14 Weeks', 'ideal' => 'Factories, packaging units, and industrial plants', 'features' => ['Bill of Materials (BOM) & Work Orders', 'Batch Expiry & Raw Material Allocation', 'Machine Maintenance & Operator Logs', 'Comprehensive P&L and Balance Sheet Reports', 'Full Source Code & On-Premises Option']],
            ],
            'kanpur_context' => 'Purpose-built for Kanpur’s heavy industrial belts in Panki Industrial Estate, Fazalganj, Dada Nagar, and Rania, as well as wholesale grain and commodity markets across Nayaganj and Collectorganj.',
            'faqs' => [
                ['q' => 'Is your POS and ERP software fully GST-compliant?', 'a' => 'Yes. All systems generate GST-compliant tax invoices, credit/debit notes, HSN/SAC code summaries, and automated GSTR-1 / GSTR-3B exportable reports.'],
                ['q' => 'Can our staff continue billing if the internet goes down?', 'a' => 'Yes. We build POS counters with local offline storage capability. Counter staff can scan barcodes, generate printed bills, and accept cash offline; once internet connectivity resumes, transactions synchronize automatically with the cloud server.'],
                ['q' => 'Do we have to pay recurring monthly subscription fees per staff member?', 'a' => 'No. Unlike commercial SaaS ERPs that charge ₹1,500 to ₹4,000 per user every month, our custom ERP and POS software is delivered with a one-time project fee and full source code handover. You pay only for your standard server hosting.'],
            ],
        ],
        'saas-development' => [
            'direct_answer' => 'SaaS application development engineers scalable, multi-tenant cloud platforms featuring subscription billing, role-based user management, and automated customer onboarding. Backend Coders India architects secure software-as-a-service products using Laravel and modern databases, empowering early-stage founders and growing software companies to launch market-ready B2B solutions with predictable infrastructure costs.',
            'pricing_h2' => 'What Is the Investment Required to Build a Custom SaaS Platform?',
            'pricing_intro' => 'Modular development packages engineered for capital efficiency, rapid user feedback, and horizontal cloud scaling.',
            'tiers' => [
                ['name' => 'Starter SaaS MVP', 'price' => '₹39,999', 'period' => 'One-Time', 'timeline' => '4–6 Weeks', 'ideal' => 'Early-stage founders validating initial product-market fit', 'features' => ['Multi-Tenant User Onboarding & Auth', 'Razorpay / Stripe Recurring Subscription Billing', 'Clean Responsive User & Admin Dashboard', 'Transactional Email Alerts (Postmark/SES)', 'Complete Source Code Ownership']],
                ['name' => 'Growth SaaS Platform', 'price' => '₹89,999', 'period' => 'One-Time', 'timeline' => '8–10 Weeks', 'ideal' => 'Funded startups and B2B platforms scaling customer volume', 'features' => ['Strict Tenant Database / Schema Isolation', 'Automated Usage Metering & Tier Enforcement', 'Webhook Dispatcher & Public API Keys', 'In-App Notifications & Audit Logs', '2 Months Dedicated DevOps Support'], 'featured' => true],
                ['name' => 'Enterprise Multi-Tenant SaaS', 'price' => '₹1,69,999+', 'period' => 'One-Time', 'timeline' => '12–16 Weeks', 'ideal' => 'High-concurrency B2B software and international platforms', 'features' => ['Decoupled Microservice Cloud Architecture', 'Custom Tenant Subdomain / Custom Domain Routing', 'Single Sign-On (SSO / SAML) Integration', 'Automated CI/CD Deployment Pipelines', 'High-Availability Load Balancing Architecture']],
            ],
            'kanpur_context' => 'Partnering with technology founders emerging from Kanpur’s technical institutions (IIT Kanpur, HBTI), digital agencies, and B2B software innovators scaling across India and global markets.',
            'faqs' => [
                ['q' => 'How is tenant data security handled in a multi-tenant SaaS application?', 'a' => 'We implement strict data isolation models (either database-per-tenant or row-level tenant scoping with global query constraints) to ensure no organization can ever view or query another tenant’s sensitive data.'],
                ['q' => 'Which recurring payment gateways do you support for Indian and global subscribers?', 'a' => 'We integrate Razorpay Subscriptions (supporting RBI-compliant e-mandates and UPI AutoPay) for domestic Indian payments, and Stripe Billing / Lemon Squeezy for international credit card payments and automated tax calculation.'],
                ['q' => 'What tech stack do you recommend for high-performance SaaS development?', 'a' => 'We primarily build on Laravel with MySQL/PostgreSQL, Redis for caching and queue workers, and modern JavaScript (Vue/React or Alpine) with Tailwind CSS, providing unmatched developer productivity, enterprise security, and low cloud hosting costs.'],
            ],
        ],
        'ecommerce-development' => [
            'direct_answer' => 'Custom ecommerce development creates conversion-focused online stores, high-speed shopping carts, and automated order fulfillment pipelines. Backend Coders India builds secure ecommerce portals integrated with Razorpay, Stripe, and Shiprocket logistics, enabling Kanpur retail brands, apparel makers, and wholesale merchants to sell nationwide without paying recurring marketplace commission fees.',
            'pricing_h2' => 'How Much Does Custom E-Commerce Website Development Cost in Kanpur?',
            'pricing_intro' => 'Bespoke online storefronts engineered for fast checkout speeds, zero marketplace commission cuts, and seamless logistics.',
            'tiers' => [
                ['name' => 'D2C Brand Storefront', 'price' => '₹24,999', 'period' => 'One-Time', 'timeline' => '2–3 Weeks', 'ideal' => 'Single-brand retailers, boutique brands, and local producers', 'features' => ['Custom Mobile-Optimized Product Catalog', '1-Click Checkout & Dynamic Cart Drawer', 'Razorpay / Cash-on-Delivery (COD) Setup', 'Discount Coupon & Promo Engine', '1 Year Free Hosting & SSL Certificate']],
                ['name' => 'Advanced Retail Store', 'price' => '₹49,999', 'period' => 'One-Time', 'timeline' => '4–6 Weeks', 'ideal' => 'Growing ecommerce businesses with large inventory catalogs', 'features' => ['Automated Courier Integration (Shiprocket)', 'WhatsApp & SMS Automated Order Alerts', 'Customer Reviews & Product Rating Badges', 'Abandoned Cart Recovery Reminders', 'Automated Low-Stock Email Notifications'], 'featured' => true],
                ['name' => 'Multi-Vendor Marketplace', 'price' => '₹89,999+', 'period' => 'One-Time', 'timeline' => '8–10 Weeks', 'ideal' => 'Regional retail marketplaces and trade collectives', 'features' => ['Vendor Registration & Verification Portal', 'Automated Commission Splitting & Payouts', 'Individual Vendor Product & Order Dashboards', 'Multi-Warehouse Shipping Route Calculations', '3 Months Dedicated Technical Maintenance']],
            ],
            'kanpur_context' => 'Proven digital infrastructure for Kanpur’s famed leather goods manufacturers, textile and hosiery brands, spice producers, and regional artisans looking to expand direct-to-consumer reach across India.',
            'faqs' => [
                ['q' => 'Can you connect our online store with domestic Indian courier services?', 'a' => 'Yes. We integrate Shiprocket, Delhivery, BlueDart, and India Post APIs for real-time shipping rate calculation, automatic airway bill (AWB) label generation, and live customer tracking links.'],
                ['q' => 'Do you charge a commission percentage on each online sale?', 'a' => 'No. Unlike hosted platforms that take 0.5%–2% on every transaction, Backend Coders India delivers custom-built websites where you pay 0% agency commission. You retain 100% of your sales revenue minus only your standard payment gateway fees (typically ~2% for Razorpay).'],
                ['q' => 'Can the store handle flash sales and high traffic volumes?', 'a' => 'Yes. Our Laravel-based architectures utilize server-level Redis caching, database index optimization, and image CDN delivery, allowing your storefront to comfortably process hundreds of simultaneous checkouts without sluggishness.'],
            ],
        ],
        'custom-web-applications' => [
            'direct_answer' => 'Custom web application development builds secure, database-driven digital platforms engineered around your specific operational workflows. Backend Coders India develops bespoke business portals, internal management software, and client dashboards using clean Laravel and relational databases, helping regional enterprises replace scattered spreadsheets with reliable, automated cloud systems.',
            'pricing_h2' => 'What Are the Costs and Deliverables for Custom Web Applications?',
            'pricing_intro' => 'Purpose-built software engineered to eliminate manual bottlenecks and scale your specific operational workflows.',
            'tiers' => [
                ['name' => 'Internal Business Portal', 'price' => '₹24,999', 'period' => 'One-Time', 'timeline' => '3–4 Weeks', 'ideal' => 'Small offices, service businesses, and internal teams', 'features' => ['Normalized Relational Database Schema', 'Role-Based Authentication (Admin/Staff)', 'Custom Data Entry & CRUD Management', 'Automated PDF Invoice & Export Tools', 'Full Git Repository & Code Ownership']],
                ['name' => 'Operational Management System', 'price' => '₹59,999', 'period' => 'One-Time', 'timeline' => '6–8 Weeks', 'ideal' => 'Mid-size enterprises managing multi-step workflows', 'features' => ['Multi-Stage Approval Workflows', 'Third-Party API Data Synchronization', 'Automated Email & WhatsApp Status Alerts', 'Detailed Activity Audit Logs & History', '2 Months Dedicated Post-Launch Support'], 'featured' => true],
                ['name' => 'Enterprise Distributed System', 'price' => '₹1,19,999+', 'period' => 'One-Time', 'timeline' => '10–14 Weeks', 'ideal' => 'Large manufacturing, logistics, and healthcare organizations', 'features' => ['Decoupled Microservice Architecture', 'High-Throughput Database Query Optimization', 'Automated Server Monitoring & Failover', 'Custom Security & Penetration Testing', 'Dedicated SLA Maintenance Agreement']],
            ],
            'kanpur_context' => 'Serving Kanpur engineering contractors, healthcare diagnostic labs in Swaroop Nagar, packaging plants in Dada Nagar, and educational academies in Kakadeo seeking tailored workflow automation.',
            'faqs' => [
                ['q' => 'Why choose a custom web application over off-the-shelf software?', 'a' => 'Off-the-shelf software forces your staff to adapt to rigid external templates and charges expensive recurring seat licenses. A custom web application is engineered around your exact operational steps, eliminates manual duplicate data entry, and gives you total data privacy and zero recurring seat costs.'],
                ['q' => 'Can our custom web application integrate with our existing accounting or CRM tools?', 'a' => 'Yes. We build secure REST API connectors to synchronize data seamlessly with Tally, Zoho, Salesforce, Google Sheets, or custom legacy databases.'],
                ['q' => 'Who owns the custom software code after completion?', 'a' => 'You own 100% of all intellectual property, source code, database architecture, and documentation. Backend Coders India provides full Git repository transfers upon project handover.'],
            ],
        ],
        'startup-mvp-development' => [
            'direct_answer' => 'Startup MVP development translates early-stage product concepts into functional, market-ready minimum viable products within weeks. Backend Coders India focuses on rapid prototyping, core user loop validation, and clean architecture, enabling Indian tech founders to test user adoption, gather real feedback, and present working software to angel investors without overspending capital.',
            'pricing_h2' => 'How Much Does Startup MVP Development Cost in India?',
            'pricing_intro' => 'Lean, agile development sprints designed to get your product into real user hands within weeks, not months.',
            'tiers' => [
                ['name' => 'Lean Clickable Prototype', 'price' => '₹24,999', 'period' => 'One-Time', 'timeline' => '2–3 Weeks', 'ideal' => 'Concept validation, pitch decks, and early user testing', 'features' => ['Interactive High-Fidelity Responsive UI', 'Core User Flow Validation', 'User Registration & Mock Data Engine', 'Product Analytics & Heatmap Setup', 'Full Design Assets & Figma Files']],
                ['name' => 'Market-Ready Startup MVP', 'price' => '₹49,999', 'period' => 'One-Time', 'timeline' => '4–6 Weeks', 'ideal' => 'Early traction testing with real paying customers', 'features' => ['Production Database & User Authentication', 'Payment Gateway Integration (Razorpay/Stripe)', 'Core Transactional Loop Fully Coded', 'Basic Admin Management Panel', 'Investor Demo & Walkthrough Support'], 'featured' => true],
                ['name' => 'Seed-Stage Launch Architecture', 'price' => '₹99,999+', 'period' => 'One-Time', 'timeline' => '8–10 Weeks', 'ideal' => 'Startups preparing for seed funding or incubator applications', 'features' => ['Scalable Cloud Infrastructure (AWS/DigitalOcean)', 'Automated Unit & Feature Test Coverage', 'Comprehensive API Documentation', 'Security Hardening & Rate Limiting', '3 Months Dedicated Technical Advisory']],
            ],
            'kanpur_context' => 'Accelerating early-stage innovators and academic startups across the Kanpur-Lucknow technology corridor, helping founders build working software ready for incubator programs and seed capital.',
            'faqs' => [
                ['q' => 'How do you determine what features go into the Minimum Viable Product?', 'a' => 'We conduct a structured discovery sprint to identify the single core problem your product solves. Non-essential features are documented for subsequent roadmap releases, ensuring your launch timeline remains lean (under 6 weeks) and development capital is conserved.'],
                ['q' => 'Can the MVP codebase be scaled once we raise funding or grow users?', 'a' => 'Yes. We never build disposable throwaway prototypes. We write clean, modular Laravel and relational database code adhering to standard PSR conventions, allowing your future engineering team to extend features without rebuilding from scratch.'],
                ['q' => 'How quickly can our team begin development?', 'a' => 'Following an initial technical discovery call and scope sign-off, our engineering sprints commence within 3 to 5 business days.'],
            ],
        ],
        'api-development' => [
            'direct_answer' => 'API development and systems integration connects disparate software platforms through secure, documented RESTful and GraphQL endpoints. Backend Coders India engineers high-throughput API microservices, payment webhooks, and third-party database bridges, enabling Kanpur businesses to synchronize inventory, process transactions, and automate cross-platform communications with sub-second response times.',
            'pricing_h2' => 'How Much Does API Development & Systems Integration Cost?',
            'pricing_intro' => 'Robust, standards-compliant APIs built for secure high-concurrency throughput and straightforward developer integration.',
            'tiers' => [
                ['name' => 'Single Microservice API', 'price' => '₹14,999', 'period' => 'One-Time', 'timeline' => '1–2 Weeks', 'ideal' => 'Mobile app backends, specific microservice endpoints', 'features' => ['Up to 10 RESTful Endpoints with JSON Payloads', 'Token Authentication (Laravel Sanctum/JWT)', 'Input Validation & Error Formatting', 'OpenAPI / Swagger Interactive Documentation', 'Automated Postman Collection Export']],
                ['name' => 'System Integration Hub', 'price' => '₹29,999', 'period' => 'One-Time', 'timeline' => '3–4 Weeks', 'ideal' => 'Connecting CRMs, ERPs, payment gateways, and databases', 'features' => ['Bi-Directional Webhook Event Listeners', 'Automated Data Transformation & Mapping', 'Asynchronous Job Queue for High Volumes', 'Failed Request Retry & Error Alerting', '1 Month Dedicated Post-Launch Support'], 'featured' => true],
                ['name' => 'Enterprise API Gateway', 'price' => '₹59,999+', 'period' => 'One-Time', 'timeline' => '5–8 Weeks', 'ideal' => 'High-throughput platforms and public developer APIs', 'features' => ['High-Concurrency Redis Response Caching', 'Granular Rate Limiting & API Key Metering', 'Role-Based Scope Permissions (OAuth2)', 'Real-Time Request & Response Logging', 'Automated Integration Testing Suite']],
            ],
            'kanpur_context' => 'Bridging legacy Kanpur on-premises accounting systems (Tally, Busy) with modern cloud ecommerce storefronts, logistics trackers, and customer communication portals.',
            'faqs' => [
                ['q' => 'What documentation do you provide for third-party developers?', 'a' => 'We deliver complete interactive Swagger / OpenAPI documentation along with pre-configured Postman collections, including sample request payloads, parameter descriptions, authentication headers, and standard error code references.'],
                ['q' => 'How do you secure API endpoints against unauthorized access and abuse?', 'a' => 'We enforce token-based authentication (Bearer tokens or JWT), rate limiting to block brute-force attempts, strict CORS origin policies, input sanitization to prevent injection attacks, and SSL/HTTPS encryption across all endpoints.'],
                ['q' => 'Can you connect modern cloud applications with legacy on-premises software?', 'a' => 'Yes. We build secure middleware bridges that extract, format, and push data between local on-premises databases and modern cloud servers via secure scheduled workers or real-time webhooks.'],
            ],
        ],
    ];

    $currentAeo = $serviceAeoData[$pageSlug] ?? null;

    $serviceSchema = null;
    if (isset($serviceCatalog[$pageSlug])) {
        $svc = $serviceCatalog[$pageSlug];
        $serviceSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => $pageCanonical . '#service',
            'name' => $svc['name'],
            'serviceType' => $svc['serviceType'],
            'description' => $svc['description'],
            'url' => $pageCanonical,
            'provider' => [
                '@type' => 'Organization',
                '@id' => 'https://backendcodersindia.com/#organization',
                'name' => 'Backend Coders India',
                'url' => 'https://backendcodersindia.com',
            ],
            'areaServed' => $svc['areaServed'],
        ];

        if ($svc['offer']) {
            $serviceSchema['offers'] = [
                '@type' => 'Offer',
                'price' => $svc['offer']['price'],
                'priceCurrency' => $svc['offer']['priceCurrency'],
                'description' => $svc['offer']['description'],
                'url' => $svc['offer']['url'],
            ];
        }
    }

    $pageFaqSchema = null;
    if ($currentAeo && ! empty($currentAeo['faqs'])) {
        $pageFaqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($f) {
                return [
                    '@type' => 'Question',
                    'name' => $f['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $f['a'],
                    ],
                ];
            }, $currentAeo['faqs']),
        ];
    }
@endphp

@push('head')
    {{-- Preload Largest Contentful Paint (LCP) Hero Image --}}
    <link rel="preload" as="image" href="{{ $heroImageUrl }}" fetchpriority="high">

    {{-- Structured Data: WebPage --}}
    <script type="application/ld+json">
{!! json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- Structured Data: BreadcrumbList --}}
    <script type="application/ld+json">
{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    @if($serviceSchema)
        {{-- Structured Data: Service --}}
        <script type="application/ld+json">
{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>
    @endif

    @if($pageFaqSchema)
        {{-- Structured Data: FAQPage --}}
        <script type="application/ld+json">
{!! json_encode($pageFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>
    @endif

@endpush

<main class="bg-white">

    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-[linear-gradient(135deg,#fff7f2_0%,#ffffff_45%,#fff1eb_100%)] py-16 text-slate-900 sm:py-20 lg:py-24" aria-label="Hero Section">
        <div class="pointer-events-none absolute inset-0 opacity-50" aria-hidden="true">
            <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-white/50 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#FD5528]/15 blur-3xl"></div>
        </div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2">
            <div>
                @php
                    $heroEyebrow = $heroExtra['eyebrow'] ?? null;
                    if ($heroEyebrow && \Illuminate\Support\Str::contains(\Illuminate\Support\Str::lower((string)$heroEyebrow), ['for modern business growth', 'modern business growth'])) {
                        $heroEyebrow = null;
                    }
                    if (! $heroEyebrow) {
                        $cleanTitle = trim((string) preg_replace('/\s*(?:for\s+)?modern\s+business\s+growth\b/i', '', (string)$pageTitle));
                        $heroEyebrow = $cleanTitle ?: null;
                    }
                @endphp
                @if($heroEyebrow)
                    <p class="mb-3 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                        {{ $heroEyebrow }}
                    </p>
                @endif

                <h1 class="text-4xl font-bold leading-tight text-slate-950 sm:text-5xl lg:text-6xl pb-2">
                    @if($heroItem && $heroItem->title)
                        {!! $heroItem->title !!}
                    @elseif($heroSection && $heroSection->title)
                        {!! $heroSection->title !!}
                    @elseif($page && $page->title)
                        {!! $page->title !!}
                    @else
                        {{ $pageTitle }}
                    @endif
                </h1>

                @if($currentAeo)
                    <div class="mt-6 rounded-2xl border-l-4 border-[#FD5528] bg-orange-50/90 p-4 sm:p-5 shadow-sm">
                        <span class="block text-xs font-bold uppercase tracking-wider text-[#FD5528] mb-1.5">Direct Service Overview</span>
                        <p class="text-base leading-relaxed text-slate-800 font-medium">
                            {{ $currentAeo['direct_answer'] }}
                        </p>
                    </div>
                @elseif($heroItem && $heroItem->description)
                    <div class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {!! $heroItem->description !!}
                    </div>
                @elseif($pageDescription)
                    <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                        {{ $pageDescription }}
                    </p>
                @endif

                @if(($heroExtra['sub_text'] ?? null) || ($heroExtra['button'] ?? null) || ($heroExtra['button_text'] ?? null) || ($heroExtra['secondary_button'] ?? null))
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
                        @if($heroExtra['button'] ?? null || $heroExtra['button_text'] ?? null)
                            <a
                                href="{{ $heroExtra['button_url'] ?? route('frontend.contact') }}"
                                target="{{ $heroExtra['button_target'] ?? '_self' }}"
                                @if(($heroExtra['button_target'] ?? '_self') === '_blank') rel="noopener noreferrer" @endif
                                class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.24)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                            >
                                {{ $heroExtra['button'] ?? $heroExtra['button_text'] }}
                            </a>
                        @endif

                        @if($heroExtra['secondary_button'] ?? null)
                            <a
                                href="{{ $heroExtra['secondary_button_url'] ?? '#' }}"
                                target="{{ $heroExtra['secondary_button_target'] ?? '_self' }}"
                                @if(($heroExtra['secondary_button_target'] ?? '_self') === '_blank') rel="noopener noreferrer" @endif
                                class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-6 py-3 font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-[#FD5528]"
                            >
                                {{ $heroExtra['secondary_button'] ?? ('Learn More About ' . strip_tags((string) ($heroItem?->title ?? $pageTitle))) }}
                            </a>
                        @endif
                    </div>
                @else
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="tel:+919140092133" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#FD5528] px-7 py-3.5 text-base font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.28)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]" id="page-call-now-btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Call Now: +91 914 0092 133</span>
                        </a>

                        <a href="https://wa.me/919140092133" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-2xl border border-emerald-500 bg-emerald-50 px-6 py-3.5 text-base font-semibold text-emerald-800 shadow-sm transition hover:-translate-y-0.5 hover:bg-emerald-100" id="page-whatsapp-btn">
                            <img src="{{ asset('assets/icons/whatsapp.png') }}" class="w-5 h-5" alt="WhatsApp">
                            <span>WhatsApp Us</span>
                        </a>

                        <a href="{{ route('frontend.contact') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-6 py-3.5 text-base font-semibold text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#FD5528] hover:text-[#FD5528]">
                            Request a Quote
                        </a>
                    </div>
                @endif
            </div>

            <div class="relative">
                @if($heroImage)
                    <img
                        src="{{ $mediaUrl($heroImage) }}"
                        alt="{{ strip_tags((string) ($heroItem?->title ?: $heroSection?->title ?: $pageTitle)) }}"
                        width="1200"
                        height="630"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                        onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                        class="h-[420px] w-full rounded-[2.25rem] object-cover shadow-[0_30px_80px_rgba(15,23,42,0.18)] ring-1 ring-black/5"
                    >
                @else
                    <img
                        src="{{ asset('assets/images/banner.png') }}"
                        alt="{{ strip_tags((string) ($heroItem?->title ?: $heroSection?->title ?: $pageTitle)) }}"
                        width="1200"
                        height="630"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                        class="h-[420px] w-full rounded-[2.25rem] object-cover shadow-[0_30px_80px_rgba(15,23,42,0.18)] ring-1 ring-black/5"
                    >
                @endif
            </div>
        </div>
    </section>

    {{-- DYNAMIC CONTENT SECTIONS --}}
    @foreach($contentSections as $section)
        @php
            $items = $section->items ?? collect();
            $sectionType = \Illuminate\Support\Str::lower((string) $section->type);
            $sectionTitle = $section->title ?: data_get($items->first(), 'extra.heading');
            $sectionSubtitle = data_get($items->first(), 'extra.subtitle') ?: data_get($items->first(), 'extra.sub_text') ?: data_get($section, 'extra.subtitle') ?: null;
            $sectionId = 'section-' . ($section->id ?? $loop->index);
        @endphp

        @switch($sectionType)
            {{-- CASE: SOCIAL MEDIA CONTENT STRATEGY --}}
            @case('social-media-content-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Content Strategy and Planning');
                    $leadDescription = data_get($leadItem, 'description');
                    $leadImage = $section->image ?: data_get($leadItem, 'image') ?: data_get($items->first(), 'image');
                    $leadImageAlt = strip_tags((string) (data_get($leadItem, 'title') ?: $leadTitle));
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24" aria-label="{{ $leadTitle }}">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-14">
                            <div class="order-2 lg:order-1">
                                <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-50 shadow-[0_25px_70px_rgba(15,23,42,0.10)]">
                                    @if($leadImage)
                                        <img
                                            src="{{ $mediaUrl($leadImage) }}"
                                            alt="{{ $leadImageAlt }}"
                                            width="1200"
                                            height="560"
                                            loading="lazy"
                                            decoding="async"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                            class="h-[320px] w-full object-cover sm:h-[420px] lg:h-[500px]"
                                        >
                                    @else
                                        <div class="flex h-[320px] items-center justify-center bg-[linear-gradient(135deg,#fff7f2_0%,#fff_60%,#fff1eb_100%)] px-8 text-center sm:h-[420px] lg:h-[500px]">
                                            <div>
                                                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Content Strategy</p>
                                                <p class="mt-4 text-2xl font-bold text-slate-900">{{ $leadTitle }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="order-1 text-center lg:order-2 lg:text-left">
                                <div class="mx-auto max-w-2xl lg:mx-0">
                                    <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                        Content Strategy
                                    </span>

                                    <h2 class="mt-6 text-3xl font-black leading-tight text-slate-900 sm:text-4xl md:text-5xl">
                                        {{ $leadTitle }}
                                    </h2>

                                    @if($leadDescription)
                                        <div class="mt-6 space-y-4 text-base leading-8 text-slate-600 sm:text-lg">
                                            {!! $leadDescription !!}
                                        </div>
                                    @endif

                                    @if($leadItem && $leadItem->title && $leadItem->title !== $leadTitle)
                                        <p class="mt-4 text-base leading-8 text-slate-600">
                                            {!! $leadItem->title !!}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="rounded-3xl border border-slate-200/80 bg-white p-7 text-center shadow-[0_10px_30px_rgba(15,23,42,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/20 hover:shadow-[0_20px_45px_rgba(253,85,40,0.10)]">
                                        <h3 class="text-lg font-bold text-slate-900">
                                            {{ $item->title }}
                                        </h3>
                                        @if($item->description)
                                            <div class="mt-3 text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: SOCIAL MEDIA REELS STRATEGY --}}
            @case('social-media-reels-strategy')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Reels and Creative Content Strategy');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-white py-20 sm:py-28" aria-label="{{ $leadTitle }}">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(253,85,40,0.05),transparent_30%)]" aria-hidden="true"></div>

                    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full border border-[#FD5528]/10 bg-[#FD5528]/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.28em] text-[#FD5528]">
                                Creative Content
                            </span>

                            <h2 class="mt-7 text-3xl font-black leading-[1.1] tracking-tight text-slate-950 sm:text-4xl md:text-5xl xl:text-6xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-8 max-w-7xl space-y-5 text-base leading-8 text-slate-600 sm:text-lg">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-12 grid justify-items-center gap-6 sm:grid-cols-2 xl:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="group relative w-full max-w-sm overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 text-center shadow-[0_12px_45px_rgba(15,23,42,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#FD5528]/20 hover:shadow-[0_25px_70px_rgba(253,85,40,0.10)]">
                                        <div class="absolute right-0 top-0 h-28 w-28 translate-x-10 -translate-y-10 rounded-full bg-[#FD5528]/5 blur-3xl transition-all duration-300 group-hover:bg-[#FD5528]/10" aria-hidden="true"></div>

                                        <div class="relative">
                                            <div class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FD5528]/10 text-sm font-bold text-[#FD5528]">
                                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                            </div>

                                            <h3 class="text-xl font-black leading-snug text-slate-950">
                                                {{ $item->title }}
                                            </h3>

                                            @if($item->description)
                                                <div class="mt-4 text-sm leading-7 text-slate-600">
                                                    {!! $item->description !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: SOCIAL MEDIA PAID CAMPAIGNS --}}
            @case('social-media-paid-campaigns')
                @php
                    $leadItem = $firstItem($section);
                    $featureItems = $items->slice(1)->values();
                    $leadTitle = $sectionTitle ?: data_get($leadItem, 'title', 'Paid Social Media Campaign Management');
                    $leadDescription = data_get($leadItem, 'description');
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-20 sm:py-24" aria-label="{{ $leadTitle }}">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">
                                Paid Social Media
                            </span>

                            <h2 class="mt-6 text-3xl font-black leading-tight text-slate-900 sm:text-4xl md:text-5xl">
                                {{ $leadTitle }}
                            </h2>

                            @if($leadDescription)
                                <div class="mx-auto mt-6 max-w-7xl space-y-4 text-base leading-8 text-slate-600 sm:text-lg">
                                    {!! $leadDescription !!}
                                </div>
                            @endif
                        </div>

                        @if($featureItems->isNotEmpty())
                            <div class="mt-12 grid justify-items-center gap-5 sm:grid-cols-2 xl:grid-cols-3">
                                @foreach($featureItems as $item)
                                    <div class="w-full max-w-sm rounded-3xl border border-slate-100 bg-white p-7 text-center shadow-sm transition hover:shadow-md">
                                        <h3 class="text-lg font-bold text-slate-900">
                                            {{ $item->title }}
                                        </h3>
                                        @if($item->description)
                                            <div class="mt-3 text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- CASE: ABOUT / CONTENT / TEXT --}}
            @case('about')
            @case('content')
            @case('text')
                @php
                    $item = $firstItem($section);
                    $contentImage = $item?->image ?: $section->image;
                @endphp

                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Content Section' }}">
                    @if($sectionType === 'content')
                        <div class="mx-auto max-w-7xl px-6 text-center">
                            @if($sectionTitle)
                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                    {{ $sectionTitle }}
                                </p>
                            @endif

                            @if($item && $item->title)
                                <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                    {!! $item->title !!}
                                </h2>
                            @endif

                            @if($item && $item->description)
                                <div class="mt-6 space-y-4 text-base leading-8 text-slate-600 text-justify">
                                    {!! $item->description !!}
                                </div>
                            @endif

                            @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                <div class="mt-8 flex justify-center">
                                    <a
                                        href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                        target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                        @if(data_get($item, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                        class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                                    >
                                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-2 lg:items-center">
                            <div>
                                @if($sectionTitle)
                                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                        {{ $sectionTitle }}
                                    </p>
                                @endif

                                @if($item && $item->title)
                                    <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                        {!! $item->title !!}
                                    </h2>
                                @endif

                                @if($item && $item->description)
                                    <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
                                        {!! $item->description !!}
                                    </div>
                                @endif

                                @if(data_get($item, 'extra.button_text') || data_get($item, 'extra.link_text'))
                                    <a
                                        href="{{ data_get($item, 'extra.button_url', route('frontend.contact')) }}"
                                        target="{{ data_get($item, 'extra.button_target', '_self') }}"
                                        @if(data_get($item, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                        class="mt-8 inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-[0_16px_36px_rgba(253,85,40,0.18)] transition hover:-translate-y-0.5 hover:bg-[#e94c20]"
                                    >
                                        {{ data_get($item, 'extra.button_text', data_get($item, 'extra.link_text', 'Learn More')) }}
                                    </a>
                                @endif
                            </div>

                            <div>
                                @if($contentImage)
                                    <img
                                        src="{{ $mediaUrl($contentImage) }}"
                                        alt="{{ strip_tags((string) ($item->title ?? $sectionTitle ?? $pageTitle)) }}"
                                        width="1200"
                                        height="720"
                                        loading="lazy"
                                        decoding="async"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                        class="w-full rounded-[1.75rem] object-cover shadow-2xl shadow-slate-200"
                                    >
                                @endif
                            </div>
                        </div>
                    @endif
                </section>
                @break

            {{-- CASE: SERVICES / CARDS / FEATURES --}}
            @case('services')
            @case('cards')
            @case('features')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Services Section' }}">
                    <div class="mx-auto max-w-7xl px-6 py-4">
                        @if($sectionTitle)
                            <div class="mx-auto max-w-7xl text-center">
                                <h2 class="text-2xl font-bold p-2 text-[#FD5528] my-8 sm:text-3xl">
                                    {{ $sectionTitle }}
                                </h2>
                                @if($sectionSubtitle)
                                    <p class="mx-auto max-w-3xl text-base leading-7 text-slate-700 mb-6">
                                        {{ $sectionSubtitle }}
                                    </p>
                                @endif
                            </div>
                        @endif

                        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                            @foreach($items as $item)
                                @php $extra = $item->extra ?? []; @endphp

                                <article data-aos="fade-up" class="group relative overflow-hidden rounded-[2rem] border border-orange-100 bg-white p-7 shadow-[0_16px_40px_rgba(15,23,42,0.08)] transition duration-500 hover:-translate-y-1 hover:shadow-[0_24px_60px_rgba(253,85,40,0.12)] text-gray-900">
                                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                                        <!-- LABEL -->
                                        <span class="text-[0.6rem] font-semibold uppercase tracking-[0.4em] text-[#FD5528]">
                                            {{ data_get($extra, 'label', 'Service') }}
                                        </span>

                                        <!-- ICON -->
                                        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-r from-[#b00000] to-[#fb813b] shadow-inner">
                                            @if($item->image)
                                                <img alt="" src="{{ $mediaUrl($item->image) }}" alt="{{ strip_tags((string) $item->title) }}" width="56" height="56" loading="lazy" decoding="async" onerror="this.onerror=null; this.src='{{ asset('assets/images/bci_icon.png') }}';" class="h-14 w-14 object-contain" />
                                            @else
                                                <img src="{{ asset('assets/images/bci_icon.png') }}" alt="Backend Coders India" width="48" height="48" loading="lazy" decoding="async" class="h-12 w-12 object-contain" />
                                            @endif
                                        </div>

                                        <!-- TITLE -->
                                        <h3 class="text-xl font-semibold text-slate-950">
                                            {{ $item->title }}
                                        </h3>

                                        <!-- DESCRIPTION -->
                                        @if($item->description)
                                            <div class="text-sm leading-7 text-slate-600">
                                                {!! $item->description !!}
                                            </div>
                                        @endif

                                        <!-- TAGS -->
                                        @php $tags = data_get($extra, 'tags', []); @endphp
                                        @if(is_array($tags) && count($tags))
                                            <div class="flex flex-wrap justify-center gap-3 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-[#FD5528]">
                                                @foreach($tags as $tag)
                                                    <span class="rounded-full border border-[#FD5528]/70 px-3 py-1">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: FAQ --}}
            @case('faq')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="Frequently Asked Questions">
                    <div class="mx-auto max-w-5xl px-6">
                        <div class="mx-auto max-w-7xl text-center">
                            <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                {{ $sectionTitle ?: 'FAQ' }}
                            </span>
                            <h2 class="mt-4 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
                                {{ $sectionTitle ?: 'Frequently Asked Questions' }}
                            </h2>
                        </div>

                        <div class="mt-8 space-y-4">
                            @foreach($items as $item)
                                <details class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.06)] transition hover:border-[#FD5528]/20">
                                    <summary class="cursor-pointer list-none font-medium text-slate-900">
                                        <span class="flex items-center justify-between gap-4">
                                            <span class="font-semibold text-slate-900">{!! $item->title !!}</span>
                                            <span class="text-2xl leading-none text-[#FD5528] transition-transform group-open:rotate-45" aria-hidden="true">+</span>
                                        </span>
                                    </summary>
                                    @if($item->description)
                                        <div class="mt-4 text-sm leading-7 text-slate-600">
                                            {!! $item->description !!}
                                        </div>
                                    @endif
                                </details>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: STATS / METRICS --}}
            @case('stats')
            @case('metrics')
                <section id="{{ $sectionId }}" class="bg-gradient-to-br from-slate-50 via-slate-100 to-[#fff4f0] py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Key Metrics' }}">
                    <div class="mx-auto max-w-7xl px-6 text-center">
                        <div class="mx-auto mb-16 max-w-4xl text-center">
                            <span class="inline-flex items-center rounded-full border border-[#FD5528]/20 bg-[#FD5528]/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">
                                {{ $sectionTitle ?: 'Performance Metrics' }}
                            </span>

                            <h2 class="mt-6 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                                {{ $sectionTitle ?: 'Services Designed To' }}
                                <span class="text-[#FD5528]">Drive Measurable Results</span>
                            </h2>

                            @if($sectionSubtitle)
                                <p class="mx-auto mt-5 max-w-5xl text-base leading-8 text-slate-600 sm:text-lg">
                                    {{ $sectionSubtitle }}
                                </p>
                            @else
                                <p class="mx-auto mt-5 max-w-5xl text-base leading-8 text-slate-600 sm:text-lg">
                                    Strategic campaign planning, continuous optimization, and conversion-focused digital solutions designed to increase visibility, generate qualified leads, and maximize return on investment.
                                </p>
                            @endif
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($items as $item)
                                @php $itemExtra = $item->extra ?? []; @endphp

                                <div class="group relative overflow-hidden rounded-[28px] border border-slate-200 bg-white p-7 shadow-[0_12px_40px_rgba(15,23,42,0.08)] transition-all duration-500 hover:-translate-y-2 hover:border-[#FD5528]/30 hover:shadow-[0_25px_60px_rgba(253,85,40,0.15)]">
                                    <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-[#020000] via-[#0e0300] to-[#000000]" aria-hidden="true"></div>
                                    <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-[#FD5528]/5 blur-3xl transition-all duration-500 group-hover:bg-[#FD5528]/10" aria-hidden="true"></div>

                                    <div class="relative mt-5">
                                        <p class="text-xl lg:text-3xl font-extrabold tracking-tight text-[#FD5528]">
                                            {{ data_get($itemExtra, 'value', $item->title) }}
                                        </p>
                                    </div>

                                    <div class="mt-5 h-px w-full bg-gradient-to-r from-[#FD5528]/20 via-slate-200 to-transparent" aria-hidden="true"></div>

                                    @if($item->description)
                                        <div class="mt-5 text-sm leading-7 text-slate-600 text-start">
                                            {!! $item->description !!}
                                        </div>
                                    @endif

                                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-[#FD5528] transition-all duration-500 group-hover:w-full" aria-hidden="true"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: TIMELINE / PROCESS / STEPS --}}
            @case('timeline')
            @case('process')
            @case('steps')
                <section id="{{ $sectionId }}" class="bg-slate-50 py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Our Process' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-[#FD5528] sm:text-3xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                            @foreach($items as $index => $item)
                                <div class="rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-[0_10px_30px_rgba(15,23,42,0.06)]">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#FD5528] font-bold text-white">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                    @if($item->title)
                                        <h3 class="mt-5 text-lg font-semibold text-slate-900">{{ $item->title }}</h3>
                                    @endif
                                    @if($item->description)
                                        <div class="mt-3 text-sm leading-7 text-slate-600">{!! $item->description !!}</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: GALLERY --}}
            @case('gallery')
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Gallery' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        <div class="flex flex-col items-center text-center">
                            @if($sectionTitle)
                                <span class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">{{ $sectionTitle }}</span>
                                <h2 class="mt-3 text-3xl font-bold text-slate-950 sm:text-4xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600 max-w-3xl">{{ $sectionSubtitle }}</p>
                                @endif
                            @endif

                            <div class="mt-12 grid w-full gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach($items as $item)
                                    @php $galleryImage = $item->image ?: $section->image; @endphp
                                    <div class="overflow-hidden rounded-[1.75rem]">
                                        @if($galleryImage)
                                            <img
                                                src="{{ $mediaUrl($galleryImage) }}"
                                                alt="{{ strip_tags((string) ($item->title ?: $sectionTitle ?: $pageTitle)) }}"
                                                width="720"
                                                height="480"
                                                loading="lazy"
                                                decoding="async"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                                class="h-60 w-full object-cover"
                                            >
                                        @endif
                                        <div class="group relative overflow-hidden rounded-[1.75rem] border border-orange-100 bg-white p-7 shadow-[0_12px_40px_rgba(15,23,42,0.06)] transition duration-500 hover:-translate-y-2 hover:border-[#F19737]/30 hover:shadow-[0_20px_60px_rgba(241,151,55,0.16)]" data-aos="zoom-in">
                                            <div class="relative z-10 mt-6 text-center">
                                                @if($item->title)
                                                    <h3 class="text-xl sm:text-2xl font-medium leading-tight text-[#2C2B44] transition duration-300 group-hover:text-[#F19737]">
                                                        {{ $item->title }}
                                                    </h3>
                                                @endif

                                                @if($item->description)
                                                    <div class="mt-5 rounded-2xl border border-orange-100 bg-gradient-to-br from-orange-50 to-slate-50 p-5">
                                                        <div class="text-sm sm:text-base leading-8 text-slate-600">
                                                            {!! $item->description !!}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="absolute bottom-0 left-0 h-1 w-0 bg-gradient-to-r from-[#F19737] to-[#da7840] transition-all duration-500 group-hover:w-full" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                @break

            {{-- CASE: CALL TO ACTION (CTA) --}}
            @case('cta')
                @php $cta = $items->first(); @endphp
                <section id="{{ $sectionId }}" class="relative overflow-hidden bg-gradient-to-r from-[#FC5124] via-[#FD5528] to-orange-400 py-20 text-white" aria-label="Call to Action">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,_white,_transparent_50%)]" aria-hidden="true"></div>
                    <div class="relative mx-auto max-w-5xl px-6 text-center">
                        @if($cta && $cta->title)
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                                {!! $cta->title !!}
                            </h2>
                        @endif

                        @if($cta && $cta->description)
                            <div class="mx-auto mt-4 max-w-6xl text-sm leading-8 text-white/90 sm:text-base md:text-lg">
                                {!! $cta->description !!}
                            </div>
                        @endif

                        @if($cta && (data_get($cta, 'extra.button_text') || data_get($cta, 'extra.button') || data_get($cta, 'extra.link_text')))
                            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                                <!-- Contact Button -->
                                <a
                                    href="{{ data_get($cta, 'extra.button_url', route('frontend.contact')) }}"
                                    target="{{ data_get($cta, 'extra.button_target', '_self') }}"
                                    @if(data_get($cta, 'extra.button_target', '_self') === '_blank') rel="noopener noreferrer" @endif
                                    class="inline-flex min-w-[180px] items-center justify-center rounded-xl bg-white px-6 py-3 font-semibold text-[#FC5124] shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                                >
                                    {{ data_get($cta, 'extra.button_text', data_get($cta, 'extra.button', data_get($cta, 'extra.link_text', 'Contact Us'))) }}
                                </a>

                                <!-- WhatsApp Button -->
                                <a
                                    href="https://wa.me/919140092133"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Contact us on WhatsApp"
                                    class="inline-flex min-w-[180px] items-center justify-center gap-2 rounded-xl border border-white/20 bg-[#25D366] px-6 py-3 font-semibold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:bg-[#20c55a] hover:shadow-xl"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="18"
                                         height="18"
                                         fill="currentColor"
                                         aria-hidden="true"
                                         viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 8.004 0C3.589 0 .004 3.584.004 8c0 1.41.368 2.788 1.067 4.004L0 16l4.104-1.063A7.965 7.965 0 0 0 8.004 16c4.415 0 8-3.584 8-8a7.95 7.95 0 0 0-2.403-5.674ZM8.004 14.5a6.47 6.47 0 0 1-3.297-.903l-.236-.14-2.435.63.65-2.37-.154-.244A6.44 6.44 0 0 1 1.504 8c0-3.584 2.916-6.5 6.5-6.5 1.736 0 3.366.675 4.593 1.9A6.456 6.456 0 0 1 14.504 8c0 3.584-2.916 6.5-6.5 6.5Zm3.565-4.886c-.195-.098-1.153-.57-1.331-.635-.178-.065-.308-.098-.438.098-.13.195-.503.635-.617.765-.113.13-.227.146-.422.049-.195-.098-.824-.304-1.57-.97-.58-.517-.972-1.155-1.086-1.35-.114-.195-.012-.3.086-.397.088-.087.195-.227.292-.34.097-.114.13-.195.195-.325.065-.13.032-.244-.016-.341-.049-.098-.438-1.056-.6-1.446-.158-.38-.319-.329-.438-.335l-.373-.006c-.13 0-.341.049-.52.244-.178.195-.682.667-.682 1.625 0 .959.699 1.885.796 2.015.098.13 1.378 2.104 3.339 2.95.467.202.832.322 1.116.412.469.149.896.128 1.234.078.376-.056 1.153-.471 1.315-.926.162-.454.162-.844.114-.926-.049-.081-.178-.13-.373-.227Z"/>
                                    </svg>
                                    WhatsApp
                                </a>
                            </div>
                        @endif
                    </div>
                </section>
                @break

            {{-- DEFAULT FALLBACK SECTION --}}
            @default
                @php $defaultImage = $item->image ?? $section->image; @endphp
                <section id="{{ $sectionId }}" class="bg-white py-16 sm:py-20" aria-label="{{ $sectionTitle ?: 'Overview' }}">
                    <div class="mx-auto max-w-7xl px-6">
                        @if($sectionTitle)
                            <div class="text-center">
                                <h2 class="text-2xl font-bold text-[#FD5528] sm:text-3xl">{{ $sectionTitle }}</h2>
                                @if($sectionSubtitle)
                                    <p class="mt-2 text-base leading-6 text-slate-600">{{ $sectionSubtitle }}</p>
                                @endif
                            </div>
                        @endif

                        <div class="mt-10 space-y-8">
                            @foreach($items as $item)
                                @php $rowImage = $item->image ?: $section->image; @endphp
                                <div class="grid gap-8 rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_14px_40px_rgba(15,23,42,0.06)] lg:grid-cols-2 lg:items-center">
                                    <div>
                                        @if($item->title)
                                            <h3 class="text-2xl font-bold text-slate-950">{!! $item->title !!}</h3>
                                        @endif
                                        @if($item->description)
                                            <div class="mt-4 text-base leading-8 text-slate-600">{!! $item->description !!}</div>
                                        @endif
                                    </div>

                                    @if($rowImage)
                                        <img
                                            src="{{ $mediaUrl($rowImage) }}"
                                            alt="{{ strip_tags((string) ($item->title ?: $sectionTitle ?: $pageTitle)) }}"
                                            width="1200"
                                            height="720"
                                            loading="lazy"
                                            decoding="async"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/images/banner.png') }}';"
                                            class="w-full rounded-[1.5rem] object-cover shadow-[0_16px_36px_rgba(15,23,42,0.10)]"
                                        >
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
        @endswitch
    @endforeach

    @if($contentSections->isEmpty())
        @if(in_array($page->slug, ['about-backend-coders-software-digital-marketing-company-in-kanpur', 'seo-rocket-pro'], true))
            @php
                $isAbout = $page->slug === 'about-backend-coders-software-digital-marketing-company-in-kanpur';
                $intro = $isAbout
                    ? 'Backend Coders India is a software and digital services team based in Kanpur. We work with businesses to plan, build, and improve websites, custom applications, and online customer journeys.'
                    : 'SEO Rocket Pro is a structured search optimization service for businesses that want to improve discoverability through useful content, sound technical foundations, and ongoing measurement. Search positions and lead volumes are not guaranteed.';
            @endphp
            <section class="bg-gradient-to-b from-orange-50 to-white py-16 sm:py-24">
                <div class="mx-auto max-w-5xl px-6">
                    <div class="rounded-[2rem] border border-orange-100 bg-white p-8 shadow-xl shadow-orange-100/60 sm:p-12">
                        <span class="inline-flex rounded-full bg-orange-50 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-[#FD5528]">{{ $isAbout ? 'About Backend Coders India' : 'SEO Rocket Pro' }}</span>
                        <h2 class="mt-5 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">{{ $isAbout ? 'Software and digital services built around your goals' : 'A practical plan for stronger organic visibility' }}</h2>
                        <p class="mt-5 text-lg leading-8 text-slate-600">{{ $intro }}</p>
                        <div class="mt-10 grid gap-5 md:grid-cols-3">
                            @foreach(($isAbout ? [['Plan with clarity', 'Define scope, priorities, and the right technical approach before work begins.'], ['Build for real use', 'Create accessible websites and software shaped around customer and team needs.'], ['Improve over time', 'Review performance and make practical improvements as requirements change.']] : [['Technical health', 'Review crawlability, page experience, site structure, and implementation issues.'], ['Useful content', 'Align page content with customer questions and clear business information.'], ['Measure progress', 'Track agreed indicators and use findings to guide the next round of work.']]) as [$heading, $copy])
                                <article class="rounded-2xl border border-slate-200 bg-slate-50 p-6"><h3 class="text-lg font-bold text-slate-900">{{ $heading }}</h3><p class="mt-3 leading-7 text-slate-600">{{ $copy }}</p></article>
                            @endforeach
                        </div>
                        <a href="{{ route('frontend.contact') }}" class="mt-9 inline-flex items-center rounded-xl bg-[#FD5528] px-6 py-3 font-semibold text-white shadow-lg shadow-orange-200 transition hover:bg-orange-600">Discuss your project</a>
                    </div>
                </div>
            </section>
        @else
            @if($currentAeo)
                {{-- QUESTION-BASED PRICING & COMPARISON SECTION --}}
                <section class="bg-slate-50 py-16 sm:py-24 border-y border-slate-200" id="pricing">
                    <div class="mx-auto max-w-7xl px-6">
                        <div class="mx-auto max-w-3xl text-center mb-14">
                            <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Transparent Investment</span>
                            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                                {{ $currentAeo['pricing_h2'] }}
                            </h2>
                            <p class="mt-4 text-base text-slate-600 leading-relaxed">
                                {{ $currentAeo['pricing_intro'] }}
                            </p>
                        </div>

                        <div class="grid gap-8 lg:grid-cols-3">
                            @foreach($currentAeo['tiers'] as $tier)
                                <div class="relative rounded-3xl border {{ !empty($tier['featured']) ? 'border-[#FD5528] ring-2 ring-[#FD5528]/20 bg-white shadow-xl' : 'border-slate-200 bg-white shadow-sm' }} p-8 flex flex-col justify-between">
                                    @if(!empty($tier['featured']))
                                        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 rounded-full bg-[#FD5528] px-4 py-1 text-xs font-bold uppercase tracking-wider text-white shadow-sm">
                                            Most Popular
                                        </div>
                                    @endif
                                    <div>
                                        <h3 class="text-xl font-bold text-slate-900">{{ $tier['name'] }}</h3>
                                        <p class="mt-2 text-xs text-slate-500 leading-relaxed"><strong class="text-slate-700">Best for:</strong> {{ $tier['ideal'] }}</p>
                                        <div class="mt-6 flex items-baseline gap-2">
                                            <span class="text-4xl font-extrabold tracking-tight text-slate-950">{{ $tier['price'] }}</span>
                                            <span class="text-xs font-semibold text-slate-500 uppercase">/ {{ $tier['period'] }}</span>
                                        </div>
                                        <div class="mt-3 inline-flex items-center gap-1.5 rounded-lg bg-orange-50 px-2.5 py-1 text-xs font-medium text-[#FD5528]">
                                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            Estimated Timeline: {{ $tier['timeline'] }}
                                        </div>
                                        <ul class="mt-6 space-y-3 text-xs text-slate-700 border-t border-slate-100 pt-6">
                                            @foreach($tier['features'] as $feature)
                                                <li class="flex items-start gap-2">
                                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                                    <span>{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mt-8 pt-4">
                                        <a href="#inquiry" class="block w-full text-center rounded-xl {{ !empty($tier['featured']) ? 'bg-[#FD5528] text-white hover:bg-orange-600 shadow-md shadow-orange-200' : 'bg-slate-900 text-white hover:bg-slate-800' }} py-3 text-sm font-semibold transition">
                                            Enquire For This Package
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- KANPUR & REGIONAL CONTEXT CALLOUT --}}
                        <div class="mt-14 rounded-2xl border border-orange-200/60 bg-gradient-to-r from-orange-50/80 via-white to-amber-50/60 p-6 sm:p-8">
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#FD5528] text-white font-bold text-xl">
                                    📍
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-slate-950">Local Kanpur &amp; Regional Business Advantage</h3>
                                    <p class="mt-1 text-sm text-slate-700 leading-relaxed">{{ $currentAeo['kanpur_context'] }}</p>
                                </div>
                                <a href="tel:+919140092133" class="inline-flex shrink-0 items-center gap-2 rounded-xl border border-orange-300 bg-white px-4 py-2 text-xs font-semibold text-[#FD5528] hover:bg-orange-50 transition">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    Call Kanpur Team (+91 91400 92133)
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            {{-- RICH DEFAULT SERVICE PAGE CONTENT & DELIVERABLES --}}
            <section class="bg-white py-16 sm:py-24 border-y border-slate-200">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="mx-auto max-w-3xl text-center mb-14">
                        <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Engineered For Scale</span>
                        <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                            Core Deliverables &amp; Engineering Standards
                        </h2>
                        <p class="mt-4 text-base text-slate-600 leading-relaxed">
                            Every solution delivered by Backend Coders India is architected for clean maintainability, sub-second response times, and predictable business scale.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="rounded-3xl border border-slate-200 bg-slate-50/50 p-8 shadow-sm">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] font-bold text-lg mb-6">
                                01
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Custom Architecture</h3>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                                Normalized relational database schemas, decoupled backend services, and clean API endpoints tailored to your exact business workflows.
                            </p>
                            <ul class="mt-5 space-y-2 text-xs text-slate-700 border-t border-slate-100 pt-4">
                                <li>✔ High-throughput query optimization</li>
                                <li>✔ Comprehensive role-based permissions</li>
                                <li>✔ Scalable microservice readiness</li>
                            </ul>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-slate-50/50 p-8 shadow-sm">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] font-bold text-lg mb-6">
                                02
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Security &amp; Resilience</h3>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                                Enterprise-grade security practices including encrypted database transactions, automated offsite backups, and strict data privacy compliance.
                            </p>
                            <ul class="mt-5 space-y-2 text-xs text-slate-700 border-t border-slate-100 pt-4">
                                <li>✔ CSRF &amp; SQL injection protection</li>
                                <li>✔ Automated SSL &amp; HTTPS enforcement</li>
                                <li>✔ Automated failure alerts &amp; logging</li>
                            </ul>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-slate-50/50 p-8 shadow-sm">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-[#FD5528] font-bold text-lg mb-6">
                                03
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Full IP Ownership</h3>
                            <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                                Complete ownership of all custom source code, documentation, and cloud deployment pipelines transferred to your business with zero recurring seat fees.
                            </p>
                            <ul class="mt-5 space-y-2 text-xs text-slate-700 border-t border-slate-100 pt-4">
                                <li>✔ 100% intellectual property transfer</li>
                                <li>✔ Full Git repository handover</li>
                                <li>✔ Documented deployment instructions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            {{-- 4-PHASE DEVELOPMENT PROCESS --}}
            <section class="bg-slate-50 py-16 sm:py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="mx-auto max-w-3xl text-center mb-12">
                        <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Milestone-Driven</span>
                        <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                            How We Deliver Your Software Project
                        </h2>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <span class="text-xs font-bold text-[#FD5528]">Phase 1</span>
                            <h3 class="mt-2 text-base font-bold text-slate-900">Discovery &amp; Scoping</h3>
                            <p class="mt-2 text-xs text-slate-600">Technical requirements mapping, timeline estimation, and architecture planning.</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <span class="text-xs font-bold text-[#FD5528]">Phase 2</span>
                            <h3 class="mt-2 text-base font-bold text-slate-900">Agile Sprint Builds</h3>
                            <p class="mt-2 text-xs text-slate-600">Two-week sprint iterations with interactive staging demos for transparent progress.</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <span class="text-xs font-bold text-[#FD5528]">Phase 3</span>
                            <h3 class="mt-2 text-base font-bold text-slate-900">Rigorous Testing</h3>
                            <p class="mt-2 text-xs text-slate-600">Automated unit tests, cross-device QA, and security validation before launch.</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <span class="text-xs font-bold text-[#FD5528]">Phase 4</span>
                            <h3 class="mt-2 text-base font-bold text-slate-900">Launch &amp; SLAs</h3>
                            <p class="mt-2 text-xs text-slate-600">Production deployment, server monitoring, warranty support, and SLA maintenance.</p>
                        </div>
                    </div>
                </div>
            {{-- VERIFIED PORTFOLIO EXAMPLES SECTION --}}
            @php
                $portfolioExamples = \App\Models\Project::query()->take(6)->get();
            @endphp
            @if($portfolioExamples->isNotEmpty())
                <section class="bg-slate-50 py-16 sm:py-20 border-t border-slate-200" id="portfolio-examples" aria-label="Kanpur Portfolio Deliveries">
                    <div class="mx-auto max-w-7xl px-6">
                        <div class="mx-auto max-w-3xl text-center mb-12">
                            <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Verified Work</span>
                            <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                                Kanpur &amp; Regional Portfolio Deliveries
                            </h2>
                            <p class="mt-3 text-base text-slate-600">
                                Explore genuine systems and applications delivered by Backend Coders India. Every project represents real engineering, custom architecture, and verifiable client solutions.
                            </p>
                        </div>

                        <div class="grid gap-8 md:grid-cols-3">
                            @foreach($portfolioExamples as $example)
                                <article class="flex flex-col justify-between rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                                    <div>
                                        <div class="overflow-hidden rounded-2xl bg-slate-900 border border-slate-100 aspect-video flex items-center justify-center mb-5">
                                            <img src="{{ $example->getImageUrl() }}" alt="{{ $example->title }}" loading="lazy" decoding="async" class="h-full w-full object-cover">
                                        </div>
                                        <span class="inline-flex rounded-full bg-orange-50 px-3 py-1 text-[0.65rem] font-bold uppercase tracking-wider text-[#FD5528] mb-2">
                                            {{ $example->category ?? 'Case Study' }}
                                        </span>
                                        <h3 class="text-lg font-bold text-slate-950 leading-snug">
                                            {{ $example->title }}
                                        </h3>
                                        <p class="mt-2 text-xs text-slate-600 line-clamp-3 leading-relaxed">
                                            {{ \Illuminate\Support\Str::limit(strip_tags((string)$example->description), 140) }}
                                        </p>
                                    </div>
                                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                                        <span class="text-xs font-medium text-slate-500">Client: {{ $example->client_name }}</span>
                                        <a href="{{ route('frontend.project-detail', ['slug' => \Illuminate\Support\Str::slug($example->title)]) }}" class="text-xs font-bold text-[#FD5528] hover:underline inline-flex items-center gap-1">
                                            View Case Study &rarr;
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <div class="mt-10 text-center">
                            <a href="{{ route('frontend.project') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-bold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                                View All Verified Projects &rarr;
                            </a>
                        </div>
                    </div>
                </section>
            @endif

            @if($currentAeo && !empty($currentAeo['faqs']))
                {{-- QUESTION-BASED FAQS ACCORDION / LIST --}}
                <section class="bg-white py-16 sm:py-20 border-t border-slate-200">
                    <div class="mx-auto max-w-5xl px-6">
                        <div class="text-center mb-12">
                            <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Clear Answers</span>
                            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                                Frequently Asked Questions About {{ $page->title }}
                            </h2>
                            <p class="mt-3 text-base text-slate-600">
                                Direct, factual answers to common questions about timelines, technology stack, ownership, and pricing.
                            </p>
                        </div>

                        <div class="space-y-4">
                            @foreach($currentAeo['faqs'] as $faq)
                                <div class="rounded-2xl border border-slate-200 bg-slate-50/60 p-6 shadow-sm">
                                    <h3 class="text-base font-bold text-slate-900 flex items-start gap-3">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-orange-100 text-[#FD5528] text-xs font-bold">Q</span>
                                        <span>{{ $faq['q'] }}</span>
                                    </h3>
                                    <div class="mt-3 pl-9 text-sm text-slate-600 leading-relaxed border-t border-slate-200/60 pt-3">
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif

            {{-- INQUIRY SECTION --}}
            <section id="inquiry" class="bg-gradient-to-b from-slate-50 to-white py-16 sm:py-24 border-t border-slate-200">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="mx-auto max-w-3xl text-center mb-12">
                        <span class="text-xs font-semibold uppercase tracking-widest text-[#FD5528]">Get in Touch</span>
                        <h2 class="mt-2 text-3xl font-bold text-slate-950 sm:text-4xl">
                            Discuss Your Project with Our Technical Team
                        </h2>
                        <p class="mt-3 text-base text-slate-600">
                            Tell us about your requirements. We will analyze technical feasibility, prepare scope estimates, and schedule an architecture call.
                        </p>
                    </div>

                    <div class="mx-auto max-w-4xl">
                        @include('frontend.form')
                    </div>
                </div>
            </section>
        @endif
    @endif
</main>
@endsection
