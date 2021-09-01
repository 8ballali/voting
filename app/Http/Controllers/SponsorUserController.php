<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorUserController extends Controller
{
    public function index(){
        $sponsor = Sponsor::All();
        return view('frontend.index', ['sponsor'=> $sponsor]);
    }
}
