<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    public function run()
    {
        // Create tags
        $tags = [
            'Full-time',
            'Part-time',
            'Remote',
            'On-site',
            'Entry Level',
            'Mid Level',
            'Senior Level',
            'PHP',
            'JavaScript',
            'Python',
            'React',
            'Vue',
            'Laravel'
        ];

        foreach ($tags as $tagName) {
            Tag::create(['name' => $tagName]);
        }

        // Create some employers with users
        $companies = [
            'Tech Solutions Inc.',
            'Digital Innovations',
            'Web Masters',
            'Code Factory',
            'Software Giants'
        ];

        foreach ($companies as $index => $companyName) {
            $user = User::create([
                'first_name' => "Employer",
                'last_name' => ($index + 1),
                'email' => "employer{$index}@example.com",
                'password' => bcrypt('password')
            ]);

            Employer::create([
                'user_id' => $user->id,
                'name' => $companyName
            ]);
        }

        // Job titles and descriptions
        $jobTitles = [
            'Senior PHP Developer',
            'Frontend React Developer',
            'Full Stack Laravel Developer',
            'JavaScript Engineer',
            'Python Developer',
            'DevOps Engineer',
            'UI/UX Designer',
            'Product Manager',
            'QA Engineer',
            'Backend Developer',
            'Mobile App Developer',
            'Systems Architect',
            'Data Engineer',
            'Cloud Solutions Engineer',
            'Security Specialist'
        ];

        $employers = Employer::all();
        $tags = Tag::all();

        // Create 15 jobs
        foreach ($jobTitles as $title) {
            $job = Job::create([
                'title' => $title,
                'description' => fake()->paragraphs(3, true),
                'salary' => fake()->numberBetween(50, 150) . 'k USD per year',
                'employer_id' => $employers->random()->id
            ]);

            // Attach 2-4 random tags to each job
            $job->tags()->attach(
                $tags->random(rand(2, 4))->pluck('id')->toArray()
            );
        }
    }
}
