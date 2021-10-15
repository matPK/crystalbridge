<?php

namespace App\Http\Controllers;

use App\Models\Round;

class HomeController extends Controller
{
    /**
     * Homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $round = Round::create([
            'number_steps' => 3,
        ]);

        return view('home', [
            'round' => $round,
        ]);
    }

    /**
     * Game Page
     *
     * @return \Illuminate\Http\Response
     */
    public function game(Round $round)
    {
        $round->load('bets');

        return view('game', [
            'round' => $round,
        ]);
    }
}
