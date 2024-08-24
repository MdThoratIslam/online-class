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
            // =================================== Order Permission ===========================================
            [
                'name'         => 'order-create',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'order-edit',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'order-delete',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'order-view',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'order-list',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
            // =================================== Rating Permission ===========================================
            [
                'name'         => 'rating-create',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'rating-edit',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'rating-delete',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'rating-view',
                'guard_name'   => 'web'
            ],
            [
                'name'         => 'rating-list',
                'guard_name'   => 'web'
            ],
            // ================================================================================================
            [
                'name'         => 'assigned-pickupman',
                'guard_name'   => 'web'
            ]
        ];
    }
}
