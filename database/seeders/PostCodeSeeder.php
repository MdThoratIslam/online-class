<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependent\PostCode;
use Database\Factories\Dependent\PostCodeFactory;

class PostCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postCodeFactory = new PostCodeFactory();
        $postCodeFactory->definition();
        foreach ($postCodeFactory->definition() as $row)
        {
            PostCode::create($row);
        }
    }
}
