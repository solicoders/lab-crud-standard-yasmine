<?php

namespace Database\Seeders\chapitres;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chapitresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapitres = [
            [
                'name' => 'Routing',
                'description' => 'Description for Chapter 1',
                'date_debut' => now(),
                'date_de_fin' => now()->addDays(7),
                'autoformationId' => 1, // Assuming autoformationId value
            ],
            [
                'name' => 'Orem Elequant',
                'description' => 'Description for Chapter 2',
                'date_debut' => now(),
                'date_de_fin' => now()->addDays(7),
                'autoformationId' => 2, // Assuming autoformationId value
            ],
            // Add more chapters as needed
        ];

        // Inserting data into the chapitres table
        DB::table('chapitres')->insert($chapitres);
    }
}
