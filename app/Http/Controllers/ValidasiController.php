<?php

namespace App\Http\Controllers;

use App\generate_code;
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
            Vote::create([
                'candidate_id' => $request->candidate_id,
                'user_id' => $user_id,
                'status' => 1
            ]);
            return 2;
        }else{
            return 0;
        }
    }
}
