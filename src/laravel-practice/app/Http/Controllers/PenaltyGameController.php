<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenaltyGameController extends Controller
{
    public function list (){
        $all_penalty_games = \App\PenaltyGame::all()->toArray();
        
        return view("contents.list", ["all_penalty_games" => $all_penalty_games]);
    }
}
