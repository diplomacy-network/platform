<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GameRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Game::class);
        return view('games.index');




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create', Game::class);
        $variants = \App\Variant::all();

        // https://adamwathan.me/2016/07/14/customizing-keys-when-mapping-collections/
        $variantLookup = $variants->reduce(function ($emailLookup, $variant) {
            $variantLookup[$variant['id']] = $variant['name'];
            return $variantLookup;
        }, []);

        return view('games.update', [
            // 'game' => new Game(),
            'variants' => $variantLookup
            ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create', Game::class);

        $variant = \App\Variant::find($request->variant);
        $start = Carbon::now()->addDays($request->join_phase_length);

        $game = Game::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_datetime' => $start,
            'start_mode' => 'sufficient_players',
            'status' => 'pregame',
            'eog' => $variant->default_number_eog_supply_centers,
        ]);
        $game->variant()->associate($variant);
        $game->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
