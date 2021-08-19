<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;

class AdminController extends Controller
{

    public function index(){
        $community = Community::All();
        return view('admin.table-community', ['community'=> $community]);
    }
}
