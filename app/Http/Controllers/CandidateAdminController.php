<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class CandidateAdminCOntroller extends Controller
{
    public function index()
    {
        $candidate = Candidate::All();
        return view('admin.table-candidate', ['candidate' => $candidate]);
    }

    public function add()
    {
        return view('admin.table-add-candidate');
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
            'user_id' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            'avatar' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            'poling_id' => 'required'
        ]);

        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload, $nama_file);


        $avatar = $request->file('avatar');
        $nama_avatar = time() . "_" . $avatar->getClientOriginalName();
        $tujuan_upload = 'storage';
        $avatar->move($tujuan_upload, $nama_avatar);

        Candidate::create([
            'name' => $request->name,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'alamat' => $request->alamat,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'gender' => $request->gender,
            'user_phone' => $request->user_phone,
            'community_id' => $request->community_id,
            'file' => $nama_file,
            'avatar' => $nama_avatar,
            'poling_id' => $request->poling_id

        ]);
        return redirect('/e-vote/admin/candidate');
    }

    public function edit($id)
    {
        $candidate = candidate::find($id);
        return view('admin.table-edit-candidate', ['candidate' => $candidate]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alamat' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'gender' => 'required',
            'user_phone' => 'required',
            'community_id' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            'avatar' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            'poling_id' => 'required'

        ]);
        $candidate = Candidate::find($id);
        if ($request->file) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage';
            $file->move($tujuan_upload, $nama_file);
            @unlink(public_path('/') . '/storage/' . $candidate->file);
        }
        if ($request->avatar) {
            $avatar = $request->file('avatar');

            $nama_avatar= time() . "_" . $avatar->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage';
            $avatar->move($tujuan_upload, $nama_avatar);
            @unlink(public_path('/') . '/storage/' . $candidate->avatar);
        }

        $candidate->name = $request->name;
        $candidate->visi = $request->visi;
        $candidate->misi = $request->misi;
        $candidate->alamat = $request->alamat;
        $candidate->tempatlahir = $request->tempatlahir;
        $candidate->tanggallahir = $request->tanggallahir;
        $candidate->gender = $request->gender;
        $candidate->user_phone = $request->user_phone;
        $candidate->community_id = $request->community_id;
        $candidate->file = $nama_file;
        $candidate->avatar = $nama_avatar;
        $candidate->poling_id = $request->poling_id;
        $candidate->save();
        return redirect('/e-vote/admin/candidate');
    }

    public function delete($id)
    {
        $candidate = Candidate::find($id);
        $candidate->delete();
        return redirect('/e-vote/admin/candidate');
    }
}
