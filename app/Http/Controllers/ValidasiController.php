<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;



class ValidasiController extends Controller
{
    public function store(Request $request){
        Vote::create([
            'candidate_id' => "1",
            'user_id' => "1",
            'status' => 1

        ]);
    }
}
