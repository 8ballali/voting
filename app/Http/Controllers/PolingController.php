<?php

namespace App\Http\Controllers;

use App\Poling;
use Illuminate\Http\Request;

class PolingController extends Controller
{
    public function index(){
        $poling = Poling::All();
        return view('admin.table-poling', ['poling'=> $poling]);
    }

    public function edit($id){
        $poling = Poling::find($id);
        return view('admin.table-edit-poling', ['poling' => $poling]);
    }

    public function update ($id, Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'start_at' => 'required',
            'stop_at' => 'required'
        ]);
        $poling = Poling::find($id);
        $poling->title = $request->title;
        $poling->description = $request->description;
        $poling->start_at = $request->start_at;
        $poling->stop_at = $request->stop_at;
        $poling->save();
        return redirect('/e-vote/admin/poling');
    }
    public function delete($id){
        $poling = Poling::find($id);
        $poling->delete();
        return redirect ('/e-vote/admin/poling');
    }
}
