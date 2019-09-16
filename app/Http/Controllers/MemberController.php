<?php

namespace App\Http\Controllers;

use App\Member;
use App\Game;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game, User $user)
    {
        //
        $game->members()->attach($user)->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game, Member $member)
    {
        //
    }
}
