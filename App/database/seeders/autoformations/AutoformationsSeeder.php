<?php

namespace Database\Seeders\autoformations;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $autoformations = [
            [
                'name' => 'Introduction to Programming',
                'description' => 'A beginner-friendly course covering basic programming concepts.',
                'date_debut' => now(),
                'date_de_fin' => now()
            ],
            [
                'name' => 'Web Development Fundamentals',
                'description' => 'Learn the basics of web development including HTML, CSS, and JavaScript.',
                'date_debut' => now(),
                'date_de_fin' => now()
            ],
            [
                'name' => 'Data Science Essentials',
                'description' => 'An introduction to data science and analytics techniques.',
                'date_debut' => now(),
                'date_de_fin' => now()
            ],
            // Add more dummy data as needed
        ];

        foreach ($autoformations as $formation) {
            DB::table('autoformations')->insert($formation);
        }
    }
    
}
