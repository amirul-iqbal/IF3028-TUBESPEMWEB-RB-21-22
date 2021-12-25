<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Laporan;
use App\Models\Aspek;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Aspek::create([
            'aspek_laporan' => 'Bangunan',
            'slug' => 'bangunan'
        ]);

        Aspek::create([
            'aspek_laporan' => 'Layanan',
            'slug' => 'layanan'
        ]);

        Laporan::factory(10)->create();        

    }
}
