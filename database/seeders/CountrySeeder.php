<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(10)
            ->create()
            ->each(function ($country) {
                $country->cities()->saveMany(City::factory(mt_rand(1, 10))
                    ->make());
            });
    }
}
