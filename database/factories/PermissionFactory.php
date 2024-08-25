<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // =============================== Dashboard Permission =========================================
            [
                'name'         => 'home',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
            // =============================== Role Permission ==============================================
            [
                'name'         => 'role-create',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'role-edit',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'role-delete',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'role-view',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'role-list',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
            // =============================== User Permission ================================================
            [
                'name'         => 'user-create',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user-edit',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user-delete',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user-view',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user-list',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
            // =================================== User Address Permission ====================================
            [
                'name'         => 'user_adress.create',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.edit',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.delete',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.view',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.index',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.restore',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'user_adress.forceDelete',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
        ];
    }
}
