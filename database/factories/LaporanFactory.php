<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Laporan;

class LaporanFactory extends Factory
{   

    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Laporan::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aspek_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            'slug' => $this->faker->unique()->sentence(),
            'isi_laporan' => $this->faker->sentence(mt_rand(20, 100)),
            'lampiran' => 'ini lampiran'
        ];
    }
}
