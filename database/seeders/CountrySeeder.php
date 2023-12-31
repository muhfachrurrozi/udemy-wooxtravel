<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\Country\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'Indonesia',
            'population' => '275.50',
            'territory' => '290.000',
            'avg_price' => '165.450',
            'description' => 'Dynamically benchmark granular alignments via pandemic bandwidth. Completely implement team driven alignments rather than value added niches. Distinctively network sustainable models without',
            'image' => '',
            'continent' => 'Asia'
        ]);

        // Country::Factory()->count(10)->create();
    }
}