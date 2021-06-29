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

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        Candidate::create([
            'name' => $request->name,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'user_phone' => $request->user_phone,
            'user_id' => $request->user_id,
            'file' => $nama_file,
            'avatar'=>$nama_file,
            'poling_id' => $request->poling_id,

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
            'ttl' => 'required',
            'gender' => 'required',
            'user_phone' => 'required',
            'user_id' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:20480',
            'avatar' => 'file|image|mimes:jpeg,png,jpg|max:20480'

        ]);
        $candidate = Candidate::find($id);
        if ($request->file) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            @unlink(public_path('/') . '/data_file/' . $candidate->file);
        }

        $candidate->name = $request->name;
        $candidate->visi = $request->visi;
        $candidate->misi = $request->misi;
        $candidate->alamat = $request->alamat;
        $candidate->ttl = $request->ttl;
        $candidate->gender = $request->gender;
        $candidate->user_phone = $request->user_phone;
        $candidate->user_id = $request->user_id;
        $candidate->file = $nama_file;
        $candidate->avatar = $nama_file;
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
