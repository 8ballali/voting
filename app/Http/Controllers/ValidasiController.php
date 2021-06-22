<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;



class ValidasiController extends Controller
{
    public function store(Request $request){
        Vote::create([
            'candidate_id' => $request->candidate_id,
            'user_id' => "1",
            'status' => 1

        ]);
    }
}
