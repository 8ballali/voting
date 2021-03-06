<?php

namespace App\Http\Controllers;

use App\Community;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::All();
        $community = Community::All();
        return view('admin.table-user', ['user'=> $user, 'community' => $community]);
    }

    public function add(){
        return view('admin.table-add-user');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'phone' => 'required',
            'community_id'=>'required',
            'role'=>'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'community_id' => $request->community_id,
            'role' => $request->role

        ]);
        return redirect('/e-vote/admin/user');
        }

        public function edit($id){
            $community = Community::get();
            $user = User::find($id);
            return view('admin.table-edit-user', compact('community', 'user'));
        }

        public function update ($id, Request $request){
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'community_id' => 'required',
                'role' => 'required'
            ]);

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->community_id = $request->community_id;
            $user->role = $request->role;
            $user->save();
            return redirect('/e-vote/admin/user');
        }

        public function delete($id){
            $user = User::find($id);
            $user->delete();
            return redirect ('/e-vote/admin/user');
        }
}
