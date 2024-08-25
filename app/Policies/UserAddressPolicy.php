<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Auth\Access\Response;

class UserAddressPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // role 1 can view all user addresses return for blade
        return $user->hasRole('user_adress.index') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserAddress $userAddress): bool
    {
        // role 1 can view all user addresses return for blade
        return $user->hasRole('user_adress.view') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('user_adress.create') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserAddress $userAddress): bool
    {
        return $user->hasRole('user_adress.update') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserAddress $userAddress): bool
    {
        return $user->hasRole('user_adress.delete') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserAddress $userAddress): bool
    {
        return $user->hasRole('user_adress.restore') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserAddress $userAddress): bool
    {
        return $user->hasRole('user_adress.forceDelete') ? Response::allow() : Response::deny('You are not authorized to view user addresses.');
    }
}
