<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Rules\NotOverStep;
use App\Rules\OneBetPerRound;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'round_id' => 'required',
            'bettor_name' => ['required', new OneBetPerRound],
            'player_stop_step' => ['required', new NotOverStep],
            'bet_amount' => 'required|numeric|min:1.00|max:1000000.00',
        ]);

        $bet = Bet::create($validated);
        return response()->json($bet, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show(Bet $bet)
    {
        return response()->json($bet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bet $bet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bet $bet)
    {
        $bet->delete();
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
