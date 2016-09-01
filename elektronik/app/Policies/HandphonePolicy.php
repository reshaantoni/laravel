<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HandphonePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        public function destroy(User $user, Handphone $handphone)
    {
        resturn $user->id === $handphone->user_id;
    }
    }
}
