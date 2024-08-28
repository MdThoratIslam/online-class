<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependent\Division;
use Database\Factories\Dependent\DivisionFactory;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisionFactory = new DivisionFactory();
        $divisionFactory->definition();
        foreach ($divisionFactory->definition() as $row)
        {
            Division::create($row);
        }
    }
}
