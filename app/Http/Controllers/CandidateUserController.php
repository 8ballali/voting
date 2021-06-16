<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CandidateUserController extends Controller
{
    public function index(){
        $candidate = candidate::All();
        return view('users.candidate', ['candidate'=> $candidate]);
    }

    public function register(){
        return view('users.form_register_candidate');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'gender' => 'required',
            'user_phone' => 'required',
            'user_id' => 'required',
            'file' => 'required',
            'poling_id'=> 'required',
        ]);


//        $file = $request->file('file'); 
//        // Insert Folder name 
//        $tujuan_upload = 'data_file';
//        $file->move($tujuan_upload);


        Candidate::create([
            'name' => $request->name,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'user_phone' => $request->user_phone,
            'user_id' => $request->user_id,
            'file' => $request->file,
            'poling_id'=> $request->poling_id,
        ]);

        return redirect('/e-vote/user/candidate');
    }
}
