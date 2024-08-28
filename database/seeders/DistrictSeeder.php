<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependent\District;
use Database\Factories\Dependent\DistrictFactory;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // how to permission factory
        $districtFactory = new DistrictFactory();
        $districtFactory->definition();
        foreach ($districtFactory->definition() as $row)
        {
            District::create($row);
        }
    }
}
