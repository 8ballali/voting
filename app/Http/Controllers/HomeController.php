<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poling;
use App\Candidate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $poling = Poling::with('candidate')->get();
        return view('index', compact('poling'));
    }

    public function visi1()
    {
        $candidate = Candidate::get();
        return view('visi1', compact('candidate'));
    }


    public function test(Request $request)
    {
        $code = $request->code;
        return $code;
    }
//    public function index()
//    {
//        return view('home');
//    }
}
