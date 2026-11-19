<?php

namespace Database\Seeders;

use App\Models\OfficeImage;
use Illuminate\Database\Seeder;

class OfficeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            // --- SECTION 1: WORKSPACE & ENGINEERING LABS (8 Photos) ---
            [
                'title' => 'Main Engineering Hall & Workstations',
                'caption' => 'The main development floor at 11/42 Krishna Nagar, Kanpur. Designed for focused coding sprints, dual-display workstations, and cross-functional collaboration.',
                'alt_text' => 'Backend Coders India main office interior and development hall in Krishna Nagar Kanpur',
                'image_path' => 'assets/images/office.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 1,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Office Reception & Brand Lounge',
                'caption' => 'Welcoming client reception and entrance lounge at our Kanpur office, featuring our illuminated brand installation and guest greeting area.',
                'alt_text' => 'Backend Coders India reception and office entrance lounge in Kanpur',
                'image_path' => 'assets/images/banner-team.png',
                'category' => 'Office Interior',
                'order' => 2,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Deep Focus Engineering Bay',
                'caption' => 'Clean desks equipped with dual screens, high-speed fiber internet, and dedicated staging environments for Laravel and cloud engineering.',
                'alt_text' => 'Developer desk and workstations at Backend Coders India in Kanpur',
                'image_path' => 'assets/Office/649426716_1304707918378187_6839822695956954278_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 3,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Sprint Architecture & Collaboration Zone',
                'caption' => 'Sprint planning area where engineers discuss database schemas, cloud infrastructure, and technical roadmaps.',
                'alt_text' => 'Collaborative development space at Backend Coders India Kanpur',
                'image_path' => 'assets/Office/649709421_1304707445044901_7896336242621366096_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 4,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Modern Development Infrastructure',
                'caption' => 'Ergonomic workstations, high-speed internal networks, and dedicated focus bays inside our Kanpur headquarters.',
                'alt_text' => 'Modern development infrastructure and engineering bay at Backend Coders India',
                'image_path' => 'assets/Office/650656692_1304708898378089_3171840685580638541_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 5,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Tech Brainstorming & Peer Code Reviews',
                'caption' => 'Engineers collaborating on architectural optimization, unit tests, and continuous deployment workflows.',
                'alt_text' => 'Knowledge sharing and code reviews at Backend Coders India Kanpur',
                'image_path' => 'assets/Office/650253160_1304708771711435_1524565240088187399_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 6,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Developer Workstation Pods',
                'caption' => 'Dedicated workstations providing developers with quiet focus areas for complex backend coding.',
                'alt_text' => 'Developer workstation pods at Backend Coders India',
                'image_path' => 'assets/Office/649828056_1304708531711459_7623861269217183882_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 7,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Engineering Bay Corridor & Meeting Pod',
                'caption' => 'Modern glass-partitioned meeting spaces and sprint rooms designed for focused delivery reviews.',
                'alt_text' => 'Office corridor and meeting spaces at Backend Coders India',
                'image_path' => 'assets/Office/650253337_1304706958378283_1119365827911085976_n.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 8,
                'is_featured' => false,
                'is_published' => true,
            ],

            // --- SECTION 2: TEAM EVENTS, CELEBRATIONS & FUN ACTIVITIES (6 Photos) ---
            [
                'title' => 'Grand Office Inauguration & Ribbon Cutting Ceremony',
                'caption' => 'Celebrating the official opening and ribbon cutting ceremony of Backend Coders India Kanpur headquarters.',
                'alt_text' => 'Grand office inauguration and ribbon cutting ceremony at Backend Coders India',
                'image_path' => 'assets/Office/649846683_1304711468377832_167130625954357209_n.jpg',
                'category' => 'Company Activities',
                'order' => 9,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Executive Leadership Opening the New Headquarters',
                'caption' => 'Managing Director Swati Verma and Founder Ravindra Verma inaugurating our new engineering floor and welcoming the team.',
                'alt_text' => 'Managing Director Swati Verma and Founder Ravindra Verma opening the new Backend Coders office',
                'image_path' => 'assets/Office/650395268_1304711511711161_8679916618918930754_n.jpg',
                'category' => 'Company Activities',
                'order' => 10,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Festival of Lights & Traditional Celebrations',
                'caption' => 'Team-wide cultural celebrations and festive traditions held at the Kanpur office, celebrating unity and company milestones in traditional attire.',
                'alt_text' => 'Festival of lights and ethnic day celebration with Backend Coders India team at Kanpur office',
                'image_path' => 'assets/Office/649519728_1304707361711576_8038595386224399026_n.jpg',
                'category' => 'Company Activities',
                'order' => 11,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Annual Team Milestone & Festive Gathering',
                'caption' => 'Company-wide team gathering celebrating successful software product launches and client milestones.',
                'alt_text' => 'Annual team gathering and milestone celebration at Backend Coders India',
                'image_path' => 'assets/Office/649839658_1304708855044760_6536602212172284341_n.jpg',
                'category' => 'Company Activities',
                'order' => 12,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'The Backend Coders India Team Family',
                'caption' => 'The complete engineering, design, and operations family gathered together at our Kanpur headquarters.',
                'alt_text' => 'Backend Coders India team group photograph inside Kanpur office',
                'image_path' => 'assets/images/team.jpg',
                'category' => 'Company Activities',
                'order' => 13,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Quarterly Delivery Milestone Win',
                'caption' => 'Celebrating successful enterprise software delivery sprints and client growth milestones.',
                'alt_text' => 'Quarterly milestone celebration with the engineering team at Backend Coders India',
                'image_path' => 'assets/Office/649770638_1304709371711375_7071558440575672634_n.jpg',
                'category' => 'Company Activities',
                'order' => 14,
                'is_featured' => false,
                'is_published' => true,
            ],

            // --- SECTION 3: PEOPLE & LEADERSHIP CULTURE (5 Photos) ---
            [
                'title' => 'Ravindra Verma – Founder & CEO',
                'caption' => 'Founder and Chief Executive Officer leading technology vision, architecture direction, and client partnerships.',
                'alt_text' => 'Ravindra Verma Founder and CEO of Backend Coders India',
                'image_path' => 'assets/images/ceo.webp',
                'category' => 'Team & People',
                'order' => 15,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Swati Verma – Managing Director',
                'caption' => 'Managing Director directing executive strategy, operational excellence, and enterprise client partnerships at Backend Coders India.',
                'alt_text' => 'Swati Verma Managing Director of Backend Coders India',
                'image_path' => 'assets/images/director.webp',
                'category' => 'Team & People',
                'order' => 16,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Adarsh – Lead Software Engineer',
                'caption' => 'Senior software engineer specializing in Laravel backend architecture, database optimization, and cloud deployments.',
                'alt_text' => 'Adarsh Lead Software Engineer at Backend Coders India',
                'image_path' => 'assets/images/adarsh.webp',
                'category' => 'Team & People',
                'order' => 17,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Arvind – Full-Stack Web Developer',
                'caption' => 'Full-stack developer engineering responsive web applications, modern JavaScript interfaces, and REST APIs.',
                'alt_text' => 'Arvind Full-Stack Developer at Backend Coders India',
                'image_path' => 'assets/images/arvind.webp',
                'category' => 'Team & People',
                'order' => 18,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Utkarsh – Software Engineer',
                'caption' => 'Software engineer dedicated to front-end performance, component architecture, and UI/UX implementation.',
                'alt_text' => 'Utkarsh Software Engineer at Backend Coders India',
                'image_path' => 'assets/images/utkarsh.webp',
                'category' => 'Team & People',
                'order' => 19,
                'is_featured' => false,
                'is_published' => true,
            ],
        ];

        // Remove any obsolete or duplicate images not present in the curated seed list
        $seedImagePaths = array_column($images, 'image_path');
        OfficeImage::whereNotIn('image_path', $seedImagePaths)->delete();

        foreach ($images as $imgData) {
            OfficeImage::updateOrCreate(
                ['image_path' => $imgData['image_path']],
                $imgData
            );
        }
    }
}
