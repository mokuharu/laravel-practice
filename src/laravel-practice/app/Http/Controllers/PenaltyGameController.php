<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenaltyGameController extends Controller
{
    public function list()
    {
        $penalty_games = \App\PenaltyGame::with('members')
                                            ->get()
                                            ->toArray();

        return view("contents.list", ["penalty_games" => $penalty_games]);
    }

    public function listByMember($member_id)
    {
        $penalty_games = \App\PenaltyGame::with('members')
                                            ->where('responsible_member_id', '=', $member_id)
                                            ->get()
                                            ->toArray();

        return view("contents.list", ["penalty_games" => $penalty_games]);
    }
}
