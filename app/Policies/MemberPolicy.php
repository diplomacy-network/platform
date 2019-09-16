<?php

namespace App\Policies;

use App\User;
use App\Member;
use Illuminate\Auth\Access\HandlesAuthorization;

class MemberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create members.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user, Game $game)
    {
        //
        if ($game->members()->count() < $game->variant()->countryTemplates()->count()){
            if ($game->phase == 'pregame'){
                return true;
            }
        }
    }


    /**
     * Determine whether the user can delete the member.
     *
     * @param  \App\User  $user
     * @param  \App\Member  $member
     * @return mixed
     */
    public function delete(User $user, Member $member)
    {
        //
    }
}
