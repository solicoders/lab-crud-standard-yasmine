<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\chapitres\chapitresSeeder;
use Illuminate\Database\Seeder;

use Database\Seeders\GestionAutoFormations\{
    AutoformationsSeeder,
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
                GestionAutoFormations::Classes()
            );
            $this->call($classes);
    
    
           
        }
    
}
