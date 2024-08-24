<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            [
                'name'              => "Md Tourat Islam",
                'email'             => "superadmin@gmail.com",
                'phone'             => '01517123534',
                'email_verified_at' => now(),
                'password'          => 'password',
                'type'              => 1,
                'remember_token'    => Str::random(10),
                'role'              => 'Super Admin',
            ],
//            [
//                'name'              => "Md Atikur Rahman",
//                'email'             => "admin@gmail.com",
//                'phone'             => '01517123535',
//                'email_verified_at' => now(),
//                'password'          => 'password',
//                'type'              => 2,
//                'remember_token'    => Str::random(10),
//                'role'              => 'Admin',
//            ],
            [
                'name'              => "Samsu",
                'email'             => "user@gmail.com",
                'phone'             => '01517123536',
                'email_verified_at' => now(),
                'password'          => 'password',
                'type'              => 3,
                'remember_token'    => Str::random(10),
                'role'              => 'Students',
            ]
        ];
    }
    public function withPermissions($role)
    {
        $permissions = [];
        switch ($role)
        {
            case 'Super Admin':
                $permissions = Permission::all()->pluck('name');
                break;
            case 'Students':
                $permissions = [
                    'home',
                    'user-create',
                    'user-edit',
                    'user-delete',
                    'user-view',
                    'user-list',
                    'role-create',
                    'role-edit',
                    'role-delete',
                    'role-view',
                    'role-list',
                ];
                break;
            default:
                $permissions = [];
                break;

        }
        return ['permissions' => $permissions];
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
