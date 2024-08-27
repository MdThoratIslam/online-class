<?php

namespace Database\Factories\Dependent;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dependent\District>
 */
class DistrictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = array(
//            array("id"=>"`id`", "division_id"=>"`division_id`", "name"=>"`name`", "bn_name"=>"`bn_name`", "lat"=>"`lat`", "long"=>"`long`", "url"=>"`url`", "code"=>"`code`", "status_active"=>"`status_active`", "is_delete"=>"`is_delete`", "created_at"=>"`created_at`", "updated_at"=>"`updated_at`"),

            array("id"=>"1", "division_id"=>"3", "name"=>"Dhaka", "bn_name"=>"ঢাকা", "lat"=>"23.711525", "long"=>"90.411145", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"2", "division_id"=>"3", "name"=>"Faridpur", "bn_name"=>"ফরিদপুর", "lat"=>"23.607082", "long"=>"89.842941", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"3", "division_id"=>"3", "name"=>"Gazipur", "bn_name"=>"গাজীপুর", "lat"=>"24.002286", "long"=>"90.426428", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"4", "division_id"=>"3", "name"=>"Gopalganj", "bn_name"=>"গোপালগঞ্জ", "lat"=>"23.005086", "long"=>"89.826606", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"5", "division_id"=>"8", "name"=>"Jamalpur", "bn_name"=>"জামালপুর", "lat"=>"24.937533", "long"=>"89.937775", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"6", "division_id"=>"3", "name"=>"Kishoreganj", "bn_name"=>"কিশোরগঞ্জ", "lat"=>"24.444937", "long"=>"90.776575", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"7", "division_id"=>"3", "name"=>"Madaripur", "bn_name"=>"মাদারীপুর", "lat"=>"23.164102", "long"=>"90.189680", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"8", "division_id"=>"3", "name"=>"Manikganj", "bn_name"=>"মানিকগঞ্জ", "lat"=>"23.864400", "long"=>"90.004700", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"9", "division_id"=>"3", "name"=>"Munshiganj", "bn_name"=>"মুন্সিগঞ্জ", "lat"=>"23.542200", "long"=>"90.530500", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"10", "division_id"=>"8", "name"=>"Mymensingh", "bn_name"=>"ময়মনসিংহ", "lat"=>"24.747100", "long"=>"90.420300", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"11", "division_id"=>"3", "name"=>"Narayanganj", "bn_name"=>"নারায়াণগঞ্জ", "lat"=>"23.633660", "long"=>"90.496482", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"12", "division_id"=>"3", "name"=>"Narsingdi", "bn_name"=>"নরসিংদী", "lat"=>"23.932233", "long"=>"90.715410", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"13", "division_id"=>"8", "name"=>"Netrokona", "bn_name"=>"নেত্রকোণা", "lat"=>"24.870955", "long"=>"90.727887", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"14", "division_id"=>"3", "name"=>"Rajbari", "bn_name"=>"রাজবাড়ি", "lat"=>"23.757431", "long"=>"89.644466", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"15", "division_id"=>"3", "name"=>"Shariatpur", "bn_name"=>"শরীয়তপুর", "lat"=>"23.242300", "long"=>"90.434800", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"16", "division_id"=>"8", "name"=>"Sherpur", "bn_name"=>"শেরপুর", "lat"=>"25.020493", "long"=>"90.015297", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"17", "division_id"=>"3", "name"=>"Tangail", "bn_name"=>"টাঙ্গাইল", "lat"=>"24.251300", "long"=>"89.916700", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"18", "division_id"=>"5", "name"=>"Bogura", "bn_name"=>"বগুড়া", "lat"=>"24.846523", "long"=>"89.377755", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"19", "division_id"=>"5", "name"=>"Joypurhat", "bn_name"=>"জয়পুরহাট", "lat"=>"25.096800", "long"=>"89.022700", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"20", "division_id"=>"5", "name"=>"Naogaon", "bn_name"=>"নওগাঁ", "lat"=>"24.793600", "long"=>"88.931800", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"21", "division_id"=>"5", "name"=>"Natore", "bn_name"=>"নাটোর", "lat"=>"24.420556", "long"=>"89.000282", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"22", "division_id"=>"5", "name"=>"Nawabganj", "bn_name"=>"নবাবগঞ্জ", "lat"=>"24.596503", "long"=>"88.277512", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"23", "division_id"=>"5", "name"=>"Pabna", "bn_name"=>"পাবনা", "lat"=>"23.998524", "long"=>"89.233645", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"24", "division_id"=>"5", "name"=>"Rajshahi", "bn_name"=>"রাজশাহী", "lat"=>"24.374500", "long"=>"88.604200", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"25", "division_id"=>"5", "name"=>"Sirajgonj", "bn_name"=>"সিরাজগঞ্জ", "lat"=>"24.453398", "long"=>"89.700682", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"26", "division_id"=>"6", "name"=>"Dinajpur", "bn_name"=>"দিনাজপুর", "lat"=>"25.621706", "long"=>"88.635450", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"27", "division_id"=>"6", "name"=>"Gaibandha", "bn_name"=>"গাইবান্ধা", "lat"=>"25.328751", "long"=>"89.528088", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"28", "division_id"=>"6", "name"=>"Kurigram", "bn_name"=>"কুড়িগ্রাম", "lat"=>"25.805445", "long"=>"89.636174", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"29", "division_id"=>"6", "name"=>"Lalmonirhat", "bn_name"=>"লালমনিরহাট", "lat"=>"25.992300", "long"=>"89.284700", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"30", "division_id"=>"6", "name"=>"Nilphamari", "bn_name"=>"নীলফামারী", "lat"=>"25.931794", "long"=>"88.856006", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"31", "division_id"=>"6", "name"=>"Panchagarh", "bn_name"=>"পঞ্চগড়", "lat"=>"26.341100", "long"=>"88.554161", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"32", "division_id"=>"6", "name"=>"Rangpur", "bn_name"=>"রংপুর", "lat"=>"25.755810", "long"=>"89.244462", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"33", "division_id"=>"6", "name"=>"Thakurgaon", "bn_name"=>"ঠাকুরগাঁও", "lat"=>"26.033694", "long"=>"88.461683", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"34", "division_id"=>"1", "name"=>"Barguna", "bn_name"=>"বরগুনা", "lat"=>"22.095300", "long"=>"90.112100", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"35", "division_id"=>"1", "name"=>"Barishal", "bn_name"=>"বরিশাল", "lat"=>"22.701000", "long"=>"90.353500", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"36", "division_id"=>"1", "name"=>"Bhola", "bn_name"=>"ভোলা", "lat"=>"22.685923", "long"=>"90.648179", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"37", "division_id"=>"1", "name"=>"Jhalokati", "bn_name"=>"ঝালকাঠি", "lat"=>"22.640600", "long"=>"90.198700", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"38", "division_id"=>"1", "name"=>"Patuakhali", "bn_name"=>"পটুয়াখালী", "lat"=>"22.359632", "long"=>"90.329871", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"39", "division_id"=>"1", "name"=>"Pirojpur", "bn_name"=>"পিরোজপুর", "lat"=>"22.584100", "long"=>"89.972000", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"40", "division_id"=>"2", "name"=>"Bandarban", "bn_name"=>"বান্দরবান", "lat"=>"22.195328", "long"=>"92.218377", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"41", "division_id"=>"2", "name"=>"Brahmanbaria", "bn_name"=>"ব্রাহ্মণবাড়িয়া", "lat"=>"23.957090", "long"=>"91.111929", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"42", "division_id"=>"2", "name"=>"Chandpur", "bn_name"=>"চাঁদপুর", "lat"=>"23.233259", "long"=>"90.671291", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"43", "division_id"=>"2", "name"=>"Chattogram", "bn_name"=>"চট্টগ্রাম", "lat"=>"22.335109", "long"=>"91.834073", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"44", "division_id"=>"2", "name"=>"Cumilla", "bn_name"=>"কুমিল্লা", "lat"=>"23.468275", "long"=>"91.178814", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"45", "division_id"=>"2", "name"=>"Cox's Bazar", "bn_name"=>"কক্স বাজার", "lat"=>"21.427200", "long"=>"92.005800", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"46", "division_id"=>"2", "name"=>"Feni", "bn_name"=>"ফেনী", "lat"=>"23.015900", "long"=>"91.397600", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"47", "division_id"=>"2", "name"=>"Khagrachari", "bn_name"=>"খাগড়াছড়ি", "lat"=>"23.119285", "long"=>"91.984663", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"48", "division_id"=>"2", "name"=>"Lakshmipur", "bn_name"=>"লক্ষ্মীপুর", "lat"=>"22.942477", "long"=>"90.841184", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"49", "division_id"=>"2", "name"=>"Noakhali", "bn_name"=>"নোয়াখালী", "lat"=>"22.869563", "long"=>"91.099398", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"50", "division_id"=>"2", "name"=>"Rangamati", "bn_name"=>"রাঙ্গামাটি", "lat"=>"22.732400", "long"=>"92.298500", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"51", "division_id"=>"7", "name"=>"Habiganj", "bn_name"=>"হবিগঞ্জ", "lat"=>"24.374945", "long"=>"91.415530", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"52", "division_id"=>"7", "name"=>"Maulvibazar", "bn_name"=>"মৌলভীবাজার", "lat"=>"24.482934", "long"=>"91.777417", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"53", "division_id"=>"7", "name"=>"Sunamganj", "bn_name"=>"সুনামগঞ্জ", "lat"=>"25.065804", "long"=>"91.395011", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"54", "division_id"=>"7", "name"=>"Sylhet", "bn_name"=>"সিলেট", "lat"=>"24.889796", "long"=>"91.869789", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"55", "division_id"=>"4", "name"=>"Bagerhat", "bn_name"=>"বাগেরহাট", "lat"=>"22.651568", "long"=>"89.785938", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"56", "division_id"=>"4", "name"=>"Chuadanga", "bn_name"=>"চুয়াডাঙ্গা", "lat"=>"23.640196", "long"=>"88.841841", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"57", "division_id"=>"4", "name"=>"Jashore", "bn_name"=>"যশোর", "lat"=>"23.166430", "long"=>"89.208113", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"58", "division_id"=>"4", "name"=>"Jhenaidah", "bn_name"=>"ঝিনাইদহ", "lat"=>"23.544818", "long"=>"89.153921", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"59", "division_id"=>"4", "name"=>"Khulna", "bn_name"=>"খুলনা", "lat"=>"22.815774", "long"=>"89.568679", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"60", "division_id"=>"4", "name"=>"Kushtia", "bn_name"=>"কুষ্টিয়া", "lat"=>"23.901258", "long"=>"89.120482", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"61", "division_id"=>"4", "name"=>"Magura", "bn_name"=>"মাগুরা", "lat"=>"23.487337", "long"=>"89.419956", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"62", "division_id"=>"4", "name"=>"Meherpur", "bn_name"=>"মেহেরপুর", "lat"=>"23.762213", "long"=>"88.631821", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"63", "division_id"=>"4", "name"=>"Narail", "bn_name"=>"নড়াইল", "lat"=>"23.172534", "long"=>"89.512672", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"64", "division_id"=>"4", "name"=>"Satkhira", "bn_name"=>"সাতক্ষীরা", "lat"=>"22.718500", "long"=>"89.070500", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null),
            array("id"=>"65", "division_id"=>"5", "name"=>"Chapinawabganj", "bn_name"=>"চাপাইনবাবগঞ্জ", "lat"=>"22.718500", "long"=>"89.070500", "url"=>"NULL", "code"=>"NULL", "status_active"=>"1", "is_delete"=>"0", "created_at"=>now(), "updated_at"=>null)
        );
        return $array;
    }
}
