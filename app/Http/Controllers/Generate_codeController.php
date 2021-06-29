<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\generate_code;
use App\user;
use App\poling;

class Generate_codeController extends Controller
{
    public function index(){
        $generate = generate_code::All();
        return view('admin.generate-code', ['generate'=> $generate]);
    }

    public function create(){
        $user = User::where("role","user")->get();
        $poling = poling::get();
        return view('admin.add-generate-code', compact('user', 'poling'));

    }

    public function generate_random(){
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        $length = 5;
        for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function store(Request $request){
        $code = $this->validate($request,[
            'user_id'=> 'required',
            'poling_id'=> 'required'
             ]);

        generate_code::create([
            'code' => encrypt($code),
            'reg_id'=> $this->generate_random()

        ]);
        return redirect('/e-vote/admin/generate');
    }
}
