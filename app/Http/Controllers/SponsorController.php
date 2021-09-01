<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index(){
        $sponsor = Sponsor::All();
        return view('admin.table-sponsor', ['sponsor'=> $sponsor]);
    }

    public function add(){
        return view('admin.table-add-sponsor');
    }

    public function store(Request $request){
        $this->validate($request,[
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
            'description'=> 'required'
        ]);

        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Sponsor::create([
            'file' => $nama_file,
            'description' => $request->description

        ]);
        return redirect('/e-vote/admin/sponsor');
        }

        public function edit($id){
            $sponsor = Sponsor::find($id);
            return view('admin.table-edit-sponsor', ['sponsor' => $sponsor]);
        }

        public function update ($id, Request $request){
            $this->validate($request,[
                'file' => 'file|image|mimes:jpeg,png,jpg|max:20480',
                'description' => 'required'
            ]);
            $sponsor = Sponsor::find($id);
        if ($request->file) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);
            @unlink(public_path('/') . '/data_file/' . $sponsor->file);
        }

            $sponsor->file = $nama_file;
            $sponsor->description = $request->description;
            $sponsor->save();
            return redirect('/e-vote/admin/sponsor');
        }

        public function delete($id){
            $sponsor = Sponsor::find($id);
            $sponsor->delete();
            return redirect ('/e-vote/admin/sponsor');
        }
}
