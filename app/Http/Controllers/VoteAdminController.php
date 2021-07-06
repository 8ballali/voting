<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\User;
use App\Vote;
use Illuminate\Http\Request;

class VoteAdminController extends Controller
{
    public function index(){
        $candidate = Candidate::All();
        $user = User::All();
        $vote = Vote::All();
        return view('admin.table-edit-suara', compact('candidate', 'user', 'vote'));
    }
    public function delete($id)
    {
        $vote = Vote::find($id);
        $vote->delete();
        return redirect('/e-vote/admin/vote');
    }
}
