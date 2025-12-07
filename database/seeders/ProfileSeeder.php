<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile; 

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Muhammad Adib Majdi',
            'title' => 'Software Developer',
            'summary' => 'Software Developer with experience in web, desktop, and backend development. Skilled in C#, Java, Python, and SQL.',
            'contacts' => json_encode([
                'phone' => '+62 895 3820 59796',
                'email' => 'adibmajdi@gmail.com',
                'location' => 'Waru, Sidoarjo, Jawa Timur',
            ]),
            'skills' => json_encode([
                'C#', 'Java', 'Python', 'JavaScript',
                'SQL Server', 'MySQL', 'UI/UX'
            ]),
            'education' => json_encode([
                [
                    'school' => 'Politeknik Elektronika Negeri Surabaya (PENS)',
                    'degree' => 'Bachelor of Computer Engineering',
                    'year' => '2016 - 2020'
                ]
            ]),
            'work_experience' => json_encode([
                [
                    'company' => 'PT. Mahkota Delta Sentosa Nusantara',
                    'title' => 'Software Developer',
                    'period' => 'Mar 2021 - Aug 2023',
                    'description' => 'Developed desktop and web applications, system migration, and collaborated with cross-functional teams.'
                ],
                [
                    'company' => 'PT Angkasa Pura I (Persero)',
                    'title' => 'Web Developer Intern',
                    'period' => 'Jan - Apr 2019',
                    'description' => 'Developed RFID attendance prototype.'
                ]
            ]),
            'cv_file' => 'adib_cv.pdf'
        ]);
    }
}
