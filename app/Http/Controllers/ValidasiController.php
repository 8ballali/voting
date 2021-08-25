<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\generate_code;
use App\Poling;
use App\Vote;
use Illuminate\Http\Request;



class ValidasiController extends Controller
{
    public function store(Request $request){
        $code = generate_code::where("reg_id", $request->reg_id)->first();
        if ($code){
            $user_id = decrypt($code->code)['user_id'];
            $if_exist = Vote::where("candidate_id", $request->candidate_id)->where('user_id', $user_id)->first();
            if($if_exist){
                return 1;
            }
            $candidate = Candidate::find($request->candidate_id);
            $poling = Poling::find($candidate->poling_id);
            if ($poling->start_at <= date('Y-m-d') && $poling->stop_at >= date('Y-m-d') ) {
                Vote::create([
                    'candidate_id' => $request->candidate_id,
                    'user_id' => $user_id,
                    'status' => 1
                ]);
            }else{
                return 3;
            }
            return 2;
        }else{
            return 0;
        }
    }
}
