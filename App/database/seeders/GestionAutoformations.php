<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\NilUuid;

use Database\Seeders\autoFormations\{
    AutoformationsSeeder,
};


class GestionAutoFormations extends Seeder
{

    public function run(): void
    {
        $this->call(GestionAutoFormations::Classes());
    }

    public static function Classes(): array
    {
        return  [
            AutoformationsSeeder::class,
        ];
    }
}

