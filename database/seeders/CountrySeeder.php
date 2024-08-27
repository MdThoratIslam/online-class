<?php

namespace Database\Seeders;

use App\Models\Dependent\Country;
use Database\Factories\Dependent\CountryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // how to permission factory
        $countryFactory = new CountryFactory();
        $countryFactory->definition();
        foreach ($countryFactory->definition() as $row)
        {
            Country::create($row);
        }
    }
}
