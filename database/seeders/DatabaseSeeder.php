<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $rol0 = new Rol();
        $rol0->nombre = 'Administrador';
        $rol0->save();

        $rol1 = new Rol();
        $rol1->nombre = 'Usuario';
        $rol1->save();
    }
}
