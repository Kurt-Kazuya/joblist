<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], 
            [
                'name' => 'admin',
                'password' => Hash::make('password'),
                'admin' => true,
            ]
        );

        $curatedJobs = [
            ['title' => 'Software Developer', 'salary' => '₱50,000', 'description' => 'A software developer designs, codes, tests, and maintains software applications or systems...'],
            ['title' => 'Web Developer', 'salary' => '₱45,000', 'description' => 'A Web Developer creates, maintains, and updates websites and web applications...'],
            ['title' => 'Front-End Developer', 'salary' => '₱40,000', 'description' => 'A Front End Developer builds the user-facing, client-side portions of web applications...'],
            ['title' => 'Back-End Developer', 'salary' => '₱48,000', 'description' => 'A back-end developer builds and maintains the server-side logic, database structures, and APIs...'],
            ['title' => 'Full-Stack Developer', 'salary' => '₱55,000', 'description' => 'A full-stack developer handles both the front-end (user interface) and back-end server...'],
            ['title' => 'Data Analyst', 'salary' => '₱42,000', 'description' => 'A data analyst collects, cleans, and interprets complex data sets to help organizations...'],
            ['title' => 'Database Administrator', 'salary' => '₱47,000', 'description' => 'A Database Administrator manages, secures, and maintains an organizations data infrastructure...'],
            ['title' => 'Network Administrator', 'salary' => '₱44,000', 'description' => 'A Network Administrator manages an organizations day-to-day computer network operations...'],
            ['title' => 'Cybersecurity Analyst', 'salary' => '₱60,000', 'description' => 'A cybersecurity analyst protects an organizations data, networks, and systems from cyberattacks...'],
            ['title' => 'Mobile App Developer', 'salary' => '₱52,000', 'description' => 'A mobile developer designs, builds, tests, and maintains applications for smartphones...'],
            ['title' => 'UI/UX Designer', 'salary' => '₱38,000', 'description' => 'A UI/UX Designers responsibilities include gathering user requirements, designing elements...'],
            ['title' => 'System Analyst', 'salary' => '₱46,000', 'description' => 'A Systems Analyst bridges the gap between business needs and technology by evaluating...'],
            ['title' => 'IT Support Specialist', 'salary' => '₱30,000', 'description' => 'An IT Support Specialist ensures company hardware, software, and networks function properly...'],
            ['title' => 'Cloud Engineer', 'salary' => '₱58,000', 'description' => 'A Cloud Engineer makes sure applications, data, and services work smoothly on the internet...'],
            ['title' => 'DevOps Engineer', 'salary' => '₱62,000', 'description' => 'A DevOps Engineer bridges software development and IT operations, automating pipelines...'],
        ];

        foreach ($curatedJobs as $jobData) {
            Job::create($jobData);
        }
    }
}