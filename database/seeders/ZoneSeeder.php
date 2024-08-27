<?php

namespace Database\Seeders;

use App\Models\Dependent\Zone;
use Database\Factories\Dependent\ZoneFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // how to permission factory
        $zoneFactory = new ZoneFactory();
        $zoneFactory->definition();
        foreach ($zoneFactory->definition() as $row)
        {
            Zone::create($row);
        }
    }
}
