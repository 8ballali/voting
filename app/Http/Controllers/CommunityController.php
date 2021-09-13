<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;

class CommunityController extends Controller
{

    public function index(){
        $community = Community::All();
        return view('admin.table-community', ['community'=> $community]);
    }

    public function add(){
        return view('admin.table-add-community');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'description'=> 'required',
            'phone' => 'required'
        ]);

        Community::create([
            'name' => $request->name,
            'description' => $request->description,
            'phone' => $request->phone

        ]);
        return redirect('/e-vote/admin/community');
        }

        public function edit($id){
            $community = Community::find($id);
            return view('admin.table-edit-community', ['community' => $community]);
        }

        public function update ($id, Request $request){
            $this->validate($request,[
                'name' => 'required',
                'description' => 'required',
                'phone' => 'required'
            ]);

            $community = Community::find($id);
            $community->name = $request->name;
            $community->description = $request->description;
            $community->phone = $request->phone;
            $community->save();
            return redirect('/e-vote/admin/community');
        }

        public function delete($id){
            $community = Community::find($id);
            $community->delete();
            return redirect ('/e-vote/admin/community');
        }
}
