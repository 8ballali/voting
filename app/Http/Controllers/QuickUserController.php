<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
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



   return view('frontend.quick', ['label' => $label, 'data' => $data]);

}
}
