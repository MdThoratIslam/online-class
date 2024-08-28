<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependent\PoliceStation;
use Database\Factories\Dependent\PoliceStationFactory;

class PoliceStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policeStationFactory = new PoliceStationFactory();
        $policeStationFactory->definition();
        foreach ($policeStationFactory->definition() as $row)
        {
            PoliceStation::create($row);
        }
    }
}
