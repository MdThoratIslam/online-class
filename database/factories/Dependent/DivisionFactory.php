<?php
namespace Database\Factories\Dependent;
use Illuminate\Database\Eloquent\Factories\Factory;
class DivisionFactory extends Factory
{
    public function definition(): array
    {
        $array = array(
            array("id"=>"1", "name"=>"Barishal", "bn_name"=>"বরিশাল", "url"=>"NULL", "code"=>"NULL", "lat"=>"22.701002", "long"=>"90.353451", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"2", "name"=>"Chattogram", "bn_name"=>"চট্টগ্রাম", "url"=>"NULL", "code"=>"NULL", "lat"=>"22.356851", "long"=>"91.783182", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"3", "name"=>"Dhaka", "bn_name"=>"ঢাকা", "url"=>"NULL", "code"=>"NULL", "lat"=>"23.810332", "long"=>"90.412518", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"4", "name"=>"Khulna", "bn_name"=>"খুলনা", "url"=>"NULL", "code"=>"NULL", "lat"=>"22.845641", "long"=>"89.540328", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"5", "name"=>"Rajshahi", "bn_name"=>"রাজশাহী", "url"=>"NULL", "code"=>"NULL", "lat"=>"24.363589", "long"=>"88.624135", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"6", "name"=>"Rangpur", "bn_name"=>"রংপুর", "url"=>"NULL", "code"=>"NULL", "lat"=>"25.743892", "long"=>"89.275227", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"7", "name"=>"Sylhet", "bn_name"=>"সিলেট", "url"=>"NULL", "code"=>"NULL", "lat"=>"24.894929", "long"=>"91.868706", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),

            array("id"=>"8", "name"=>"Mymensingh", "bn_name"=>"ময়মনসিংহ", "url"=>"NULL", "code"=>"NULL", "lat"=>"24.747149", "long"=>"90.420273", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null)
        );
        return $array;
    }
}
