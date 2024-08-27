<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {


        $this->call(PermissionSeeder::class);
        $this->call(ZoneSeeder::class);
        $this->call(CountrySeeder::class);


        //============== Users Factory use and create user with role and permission =====================================
        $usersData = (new UserFactory())->definition();
        foreach ($usersData as $uData)
        {
            $user = User::create([
                'name'              => $uData['name'],
                'email'             => $uData['email'],
                'phone'             => $uData['phone'],
                'email_verified_at' => $uData['email_verified_at'],
                'password'          => bcrypt($uData['password']),
                'remember_token'    => $uData['remember_token'],
                //'role'              => $uData['role'],
                'type'              => $uData['type'],
                'status_active'     => 1,
                'is_delete'         => 0,
                'created_at'        => now(),
                'updated_at'        => null,
            ]);

            $role                   = Role::create(['name' => $uData['role']]);
            $user->assignRole($role);
            $userFactory            = new UserFactory();
            $withPermissions        = $userFactory->withPermissions($uData['role']);
            $role->syncPermissions($withPermissions);
            $user->assignRole($role);
        }
        //======================================== end =================================================================
    }
}
