<?php

//namespace App\Policies;
//
//use App\Models\User;
//use Illuminate\Auth\Access\HandlesAuthorization;
//
//class UserPolicy
//{
//    use HandlesAuthorization;
//    /**
//     * Create a new policy instance.
//     *
//     * @return void
//     */
//
//    public function __construct()
//    {
//
//    }
//
//    public function update(User $currentUser, User $user)
//    {
//        return $currentUser->id === $user->id;
//    }
//}

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function destroy(User $currentUser, User $user){
        return $currentUser->id !== $user->id && $currentUser->is_admin;
    }
}