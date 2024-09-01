<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Dependent\Country;
use App\Models\Dependent\Division;
use App\Models\Dependent\District;
use App\Models\Dependent\PoliceStation;
use App\Models\Dependent\PostCode;

function get_country($id = null)
{
    if ($id != null) {
        $country = Country::where('id', $id)->first();
        return $country ? $country->name : null;
    } else {
        $countries = Country::all();
        return $countries;
    }
}
function get_division($id = null)
{
    if ($id != null) {
        $division = Division::where('id', $id)->first();
        return $division;
    } else {
        $divisions = Division::all();
        return $divisions;
    }
}
function get_district($id = null, $division_id = null)
{
    if ($division_id != null) {
        $districts = District::where('division_id', $division_id)->get();
        return $districts;
    } else if ($id != null) {
        $district = District::where('id', $id)->first();
        return $district;
    } else {
        $districts = District::all();
        return $districts;
    }
}
function get_police_station($id = null,$district_id = null)
{
    if($district_id != null)
    {
        $police_stations = PoliceStation::where('district_id', $district_id)->get();
        return $police_stations;
    }else if($id != null)
    {
        $police_station = PoliceStation::where('id', $id)->first();
        return $police_station ? $police_station->name : null;
    }else
    {
        $police_stations = PoliceStation::all();
        return $police_stations;
    }
}
function get_post_office($id = null,$police_station_id = null)
{
    if($police_station_id != null)
    {
        $post_offices = PostCode::where('police_station_id', $police_station_id)->get();
        return $post_offices;
    }else if($id != null)
    {
        $post_office = PostCode::where('id', $id)->first();
        return $post_office ? $post_office->name : null;
    }else
    {
        $post_offices = PostCode::all();
        return $post_offices;
    }
}
function get_identification_type($id = null)
{
    $identification_type = [
        1 => "NID",
        2 => "Passport",
        3 => "Driving License",
        4 => "Date of Birth",
    ];
    if($id != null)
    {
        return $identification_type[$id];
    }else
    {
        return $identification_type;
    }
}
function leave_type($id = null){
    $leave_type = [
        1 => "Annual",
        2 => "Casual",
        3 => "Casual",
    ];
    if($id != null)
    {
        return $leave_type[$id];
    }else
    {
        return $leave_type;
    }
}
function blood_group($id = null)
{
    $blood_group =
        [
            'A+' => 'A+',
            'A-' => 'A-',
            'B+' => 'B+',
            'B-' => 'B-',
            'AB+' => 'AB+',
            'AB-' => 'AB-',
            'O+' => 'O+',
            'O-' => 'O-',
        ];
    if($id != null)
    {
        return $blood_group[$id];
    }else
    {
        return $blood_group;
    }
}
function status_active ($id = null)
{
    $status_active =
        [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Pending',
        ];
    if($id != null)
    {
        return $status_active[$id];
    }else
    {
        return $status_active;
    }
}
function gender ($id = null)
{
    $gender = [
        1 => "Male",
        2 => "Female",
        3 => "Other",
    ];
    if($id != null)
    {
        return $gender[$id];
    }else
    {
        return $gender;
    }
}
function currentDateTime()
{
    return Carbon::now()->timezone('Asia/Dhaka')->format('Y-m-d H:i:s');
}
function isActiveSubMenu($subModules) {
    foreach ($subModules as $submenu) {
        if (request()->routeIs($submenu->route)) {
            return true;
        }
    }
    return false;
}
function departmentArr ($id = null)
{
    $departmentArr = [
        1 => "Software Development",
        2 => "IT (Application)",
        3 => "IT & ERP",
    ];
    if($id != null)
    {
        return $departmentArr[$id];
    }else
    {
        return $departmentArr;
    }
}
function designationArr($id = null)
{
    $designationArr = [
        1 => "Executive",
        2 => "Sr. Executive",
        3 => "Jr. Software Engineer",
        4 => "Software Engineer",
        5 => "Software Developer",
        6 => "Full Stack Developer",
        7 => "Web Developer",
        8 => "CEO",
        9 => "Project Consultant",
    ];
    if($id != null)
    {
        return $designationArr[$id];
    }else
    {
        return $designationArr;
    }
}
function relationArr ($id = null)
{
    $relationArr = [
        1 => "Academic",
    ];
    if($id != null)
    {
        return $relationArr[$id];
    }else
    {
        return $relationArr;
    }
}
function maritalStatusArr ($id = null)
{
    $maritalStatusArr = [
        1 => 'Single',
        2 => 'Married',
        3 => 'Divorced',
        4 => 'Widowed',
    ];
    if($id != null)
    {
        return $maritalStatusArr[$id];
    }else
    {
        return $maritalStatusArr;
    }
}
function religionArr ($id = null)
{
    $religionArr = [
        1 => 'Islam',
        2 => 'Hinduism',
        3 => 'Christianity',
        4 => 'Buddhism',
        5 => 'Sikhism',
        6 => 'Judaism',
        7 => 'Baháʼí Faith',
        8 => 'Jainism',
        9 => 'Shinto',
        10 => 'Cao Dai',
        11 => 'Zoroastrianism',
        12 => 'Tenrikyo',
        13 => 'Animism',
        14 => 'Neo-Paganism',
        15 => 'Unitarian Universalism',
        16 => 'Rastafari',
        17 => 'Humanism',
        18 => 'Taoism',
        19 => 'Satanism',
        20 => 'Atheism',
        21 => 'Agnosticism',
        22 => 'Deism',
        23 => 'Pantheism',
        24 => 'Panentheism',
        25 => 'Polytheism',
        26 => 'Henotheism',
        27 => 'Monolatrism',
        28 => 'Kathenotheism',
        29 => 'Ditheism',
        30 => 'Misotheism',
        31 => 'Maltheism',
        32 => 'Dystheism',
        33 => 'Euthyphro dilemma',
        34 => 'God of the gaps',
        35 => 'Nontheism',
        36 => 'Post-theism',
        37 => 'Apatheism',
        38 => 'Ignosticism',
        39 => 'Theological noncognitivism',
        40 => 'Antireligion',
        41 => 'Atheism',
        42 => 'Agnosticism',
        43 => 'Secular humanism',
        44 => 'Secularism',
        45 => 'Freethought',
        46 => 'Rationalism',
        47 => 'Skepticism',
        48 => 'Empiricism',
        49 => 'Scientism',
        50 => 'Objectivism',
        51 => 'Positivism',
    ];
    if($id != null)
    {
        return $religionArr[$id];
    }else
    {
        return $religionArr;
    }
}
function nationalityArr ($id = null)
{
    $nationalityArr = [
        1 => 'Bangladeshi',
        2 => 'Indian',
        3 => 'Pakistani',
        4 => 'Nepalese',
        5 => 'Bhutanese',
        6 => 'Sri Lankan',
        7 => 'Maldivian',
        8 => 'Afghan',
        9 => 'Iranian',
        10 => 'Armenian',
        11 => 'Azerbaijani',
        12 => 'Bahraini',
        13 => 'Cypriot',
    ];
    if($id != null)
    {
        return $nationalityArr[$id];
    }else
    {
        return $nationalityArr;
    }
}
function isDeleteArr($id = null)
{
    $isDeleteArr = [
        0 => 'No',
        1 => 'Yes',
    ];
    if($id != null)
    {
        return $isDeleteArr[$id];
    }else
    {
        return $isDeleteArr;
    }
}
if (! function_exists('convert_to_absolute_path')) {
    function convert_to_absolute_path($relativePath) {
        return public_path($relativePath);
    }
}
