<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\UserAddress;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }*/
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'                    => ['required', 'string', 'max:255'],
            'last_name'                     => ['required', 'string', 'max:255'],
            'email'                         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'                         => ['required', 'string', 'max:20', 'unique:users'],
            'password'                      => ['required', 'string', 'min:8', 'confirmed'],
            // Add validation for address fields
            'present_area'                  => ['required', 'string', 'max:255'],
            'present_country'               => ['required', 'exists:countries,id'],
            'division_id'                   => ['required', 'exists:divisions,id'],
            'district_id'                   => ['required', 'exists:districts,id'],
            'police_station_id'             => ['required', 'exists:police_stations,id'],
            'post_office_id'                => ['required', 'exists:post_codes,id'],
            'post_code'                     => ['required', 'integer'],
            // Validation for permanent address if not same as present address
            'permanent_area'                => ['required_without:same_address', 'string', 'max:255'],
            'permanent_country'             => ['required_without:same_address', 'exists:countries,id'],
            'permanent_division_id'         => ['required_without:same_address', 'exists:divisions,id'],
            'permanent_district_id'         => ['required_without:same_address', 'exists:districts,id'],
            'permanent_police_station_id'   => ['required_without:same_address', 'exists:police_stations,id'],
            'permanent_post_office_id'      => ['required_without:same_address', 'exists:post_codes,id'],
            'permanent_zip_code'            => ['required_without:same_address', 'integer'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name'          => $data['name'],
//            'email'         => $data['email'],
//            'password'      => Hash::make($data['password']),
//        ]);
//    }
    protected function create(array $data)
    {
        try
        {
            return DB::transaction(function () use ($data)
            {
                $name = $data['first_name'] . ' ' . $data['last_name'];

                $user = User::create([
                    'name'          => $name,
                    'email'         => $data['email'],
                    'phone'         => $data['phone'],
                    'type'          => 3,
                    'password'      => Hash::make($data['password']),
                ]);
                // Assign role to user
                $user->assignRole('Students');

                // Insert present address
                UserAddress::create([
                    'user_id'           => $user->id,
                    'address'           => $data['present_area'],
                    'country_id'        => $data['present_country'],
                    'division_id'       => $data['division_id'],
                    'district_id'       => $data['district_id'],
                    'police_station_id' => $data['police_station_id'],
                    'post_office_id'    => $data['post_office_id'],
                    'zip_code'          => $data['post_code'],
                    'type'              => 2, // 2 for Present address
                    // if same address is checked, set same_as_present set to 1
                    'same_as_present'   => empty($data['same_address']) ? 2 : 1,
                    'created_by'        => $user->id,
                ]);

                // Insert permanent address if different from present address
                if (empty($data['same_address']))
                {
                    UserAddress::create([
                        'user_id'           => $user->id,
                        'address'           => $data['permanent_area'],
                        'country_id'        => $data['permanent_country'],
                        'division_id'       => $data['permanent_division_id'],
                        'district_id'       => $data['permanent_district_id'],
                        'police_station_id' => $data['permanent_police_station_id'],
                        'post_office_id'    => $data['permanent_post_office_id'],
                        'zip_code'          => $data['permanent_zip_code'],
                        'type'              => 1, // 1 for Permanent address
                        'same_as_present'   => 2,
                        'created_by'        => $user->id,
                    ]);
                }
                //need registration success message
                session()->flash('success', 'Registration successful. Please login to continue.');
                return $user;
            });

        }catch (Exception $e)
        {
            Log::error('Error creating user: ' . $e->getMessage());
            session()->flash('error', 'An error occurred during registration. Please try again.');
            return redirect()->back()->withInput();
        }
    }
}
