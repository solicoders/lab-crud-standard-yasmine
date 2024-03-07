<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\NilUuid;

use Database\Seeders\GestionChapitres\{
    chapitresSeeder,
};


class GestionChapitres extends Seeder
{

    public function run(): void
    {
        $this->call(GestionChapitres::Classes());
    }

    public static function Classes(): array
    {
        return  [
            chapitresSeeder::class,
        ];
    }
}

