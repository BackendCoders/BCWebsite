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
            // Workspace & Office
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
                'title' => 'High-Performance Developer Workstations',
                'caption' => 'Developer workstations equipped with dual monitors, high-speed fiber internet, and dedicated staging environments for Laravel and cloud engineering.',
                'alt_text' => 'Developer desk and workstations at Backend Coders India in Kanpur',
                'image_path' => 'assets/images/work-space.jpg',
                'category' => 'Workspace & Infrastructure',
                'order' => 3,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Collaborative Architecture & Sprint Zone',
                'caption' => 'Sprint planning area where engineers discuss database schemas, cloud infrastructure, and technical roadmaps.',
                'alt_text' => 'Collaborative development space at Backend Coders India Kanpur',
                'image_path' => 'assets/images/about.webp',
                'category' => 'Workspace & Infrastructure',
                'order' => 4,
                'is_featured' => false,
                'is_published' => true,
            ],

            // Events & Fun Activities
            [
                'title' => 'Office Festival & Ethnic Day Celebration',
                'caption' => 'Team-wide cultural celebrations and festive traditions held at the Kanpur office, celebrating unity and company milestones in traditional attire.',
                'alt_text' => 'Festival and ethnic day celebration with Backend Coders India team at Kanpur office',
                'image_path' => 'assets/images/team.jpg',
                'category' => 'Company Activities',
                'order' => 5,
                'is_featured' => true,
                'is_published' => true,
            ],
            [
                'title' => 'Annual Team Milestone & Event Gathering',
                'caption' => 'Company-wide team gathering celebrating successful software product launches and client milestones.',
                'alt_text' => 'Annual team gathering and milestone celebration at Backend Coders India',
                'image_path' => 'assets/images/team-banner.webp',
                'category' => 'Company Activities',
                'order' => 6,
                'is_featured' => false,
                'is_published' => true,
            ],

            // People & Leadership Culture
            [
                'title' => 'Ravindra Verma – Founder & CEO',
                'caption' => 'Founder and Chief Executive Officer leading technology vision, architecture direction, and client partnerships.',
                'alt_text' => 'Ravindra Verma Founder and CEO of Backend Coders India',
                'image_path' => 'assets/images/ceo.webp',
                'category' => 'Team & People',
                'order' => 7,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Kajal Kumari – Managing Director',
                'caption' => 'Managing Director overseeing strategic operations, human relations, and enterprise delivery excellence.',
                'alt_text' => 'Kajal Kumari Managing Director at Backend Coders India',
                'image_path' => 'assets/images/director.webp',
                'category' => 'Team & People',
                'order' => 8,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Adarsh – Lead Software Engineer',
                'caption' => 'Senior software engineer specializing in Laravel backend architecture, database optimization, and cloud deployments.',
                'alt_text' => 'Adarsh Lead Software Engineer at Backend Coders India',
                'image_path' => 'assets/images/adarsh.webp',
                'category' => 'Team & People',
                'order' => 9,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Arvind – Full-Stack Web Developer',
                'caption' => 'Full-stack developer engineering responsive web applications, modern JavaScript interfaces, and REST APIs.',
                'alt_text' => 'Arvind Full-Stack Developer at Backend Coders India',
                'image_path' => 'assets/images/arvind.webp',
                'category' => 'Team & People',
                'order' => 10,
                'is_featured' => false,
                'is_published' => true,
            ],
            [
                'title' => 'Utkarsh – Software Engineer',
                'caption' => 'Software engineer dedicated to front-end performance, component architecture, and UI/UX implementation.',
                'alt_text' => 'Utkarsh Software Engineer at Backend Coders India',
                'image_path' => 'assets/images/utkarsh.webp',
                'category' => 'Team & People',
                'order' => 11,
                'is_featured' => false,
                'is_published' => true,
            ],
        ];

        foreach ($images as $imgData) {
            OfficeImage::updateOrCreate(
                ['image_path' => $imgData['image_path']],
                $imgData
            );
        }
    }
}
