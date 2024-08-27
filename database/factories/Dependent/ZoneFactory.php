<?php

namespace Database\Factories\Dependent;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dependent\Zone>
 */
class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = array(
            array("id"=>"1", "name"=>"SAARC countries", "code"=>"1001", "description"=>"", "status_active"=>"1", "is_delete"=>"0", "bn_name"=>"সার্কভুক্ত দেশ", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"2", "name"=>"Other Asian Countries", "code"=>"1002", "description"=>"", "status_active"=>"1", "is_delete"=>"0", "bn_name"=>"এশিয়ার অন্যান্য দেশ", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"3", "name"=>"Oceania and Australia", "code"=>"1003", "description"=>"", "status_active"=>"1", "is_delete"=>"0", "bn_name"=>"ওশেনিয়া এবং অষ্ট্রেলিয়া", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"4", "name"=>"Africa and Europe", "code"=>"1004", "description"=>"", "status_active"=>"1", "is_delete"=>"0", "bn_name"=>"আফ্রিকা এবং ইউরোপ", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"5", "name"=>"North and South America", "code"=>"1005", "description"=>"", "status_active"=>"1", "is_delete"=>"0", "bn_name"=>"উত্তর এবং দক্ষিন আমেরিকা", "created_at"=>now(), "updated_at"=>null)
        );
        return $array;
    }
}
