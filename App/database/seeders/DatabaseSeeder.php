<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\GestionChapitres\{
    chapitresSeeder,
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   
        public function run(): void
        {
            $classes = [];
            $classes = array_merge(
                GestionChapitres::Classes()
            );
            $this->call($classes);
    
    
           
        }
    
}
