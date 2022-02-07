<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function getIndex(){
        $members = \App\Member::all()->toArray();

        return view('contents.top',['members'=>$members]);
    }
}
