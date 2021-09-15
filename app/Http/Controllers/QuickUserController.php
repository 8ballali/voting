<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Candidate;
use Illuminate\Support\Facades\DB;

class QuickUserController extends Controller
{
    public function index (){

        $label = DB::table('vote')->selectRaw(DB::raw('count(*) as name'))->groupBy('candidate_id')->orderBy('candidate_id', 'asc')->get()->map(function($x) {
       return $x->name;
       });

       $data = DB::table('candidate')->join('vote', 'vote.candidate_id', 'candidate.id')->groupBy('name')->select('candidate.name')->orderBy('candidate.id', 'asc')->get(
       )->map(function($x) {
       return $x->name;
       });

       $candidate = Candidate::All();
       $vote = Vote::All();


   return view('frontend.quick', ['label' => $label, 'data' => $data, 'candidate' => $candidate, 'vote' => $vote]);

}
}
