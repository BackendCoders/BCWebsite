<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            1 => [
                'title' => 'Backend Developers in Action',
                'file' => 'assets/images/backend-developers-in-action.mp4',
            ],
            2 => [
                'title' => 'Software Development in Progress',
                'file' => 'assets/images/software-development-in-progress.mp4',
            ],
            3 => [
                'title' => 'DevOps and Cloud Management in Action',
                'file' => 'assets/images/devops-and-cloud-management.mp4',
            ],
            4 => [
                'title' => 'Technical Support and Maintenance',
                'file' => 'assets/images/technical-support-and-maintenance.mp4',
            ],
        ];

        foreach ($videos as $id => $data) {
            Video::updateOrCreate(['id' => $id], $data);
        }
    }
}
