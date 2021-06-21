<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class StatusController extends Controller
{
    
    public function edit($id){
        $candidate = Candidate::find($id);
        return view('admin.table-edit-statuscandidate', ['candidate' => $candidate]);
    }

    public function update ($id, Request $request){
    
        $candidate = Candidate::find($id);
        $candidate->status = $request->status;
        $candidate->save();
        return redirect('/e-vote/admin/candidate');
    }
}
