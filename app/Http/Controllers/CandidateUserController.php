<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CandidateUserController extends Controller
{
    public function index()
    {
        $candidate = candidate::All();
        dd($candidate);
        return view('users.candidate', ['candidate' => $candidate]);
    }

    public function register()
    {
        return view('users.form_register_candidate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            'gender' => 'required',
            'user_phone' => 'required',
            'community_id' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'avatar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'poling_id' => 'required'
        ]);

        $file = $request->file('file')->store('public/file');

        $avatar = $request->file('avatar')->store('public/file');
        Candidate::create([
            'name' => $request->name,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'user_phone' => $request->user_phone,
            'community_id' => $request->community_id,
            'file' => $file,
            'avatar' => $avatar,
            'poling_id' => $request->poling_id

        ]);
        return redirect('e-vote/user/');
    }

    public function candidate($id)
    {
        $candidate = Candidate::find($id);
        return view('frontend.visi1', ['candidate' => $candidate]);
    }
}
