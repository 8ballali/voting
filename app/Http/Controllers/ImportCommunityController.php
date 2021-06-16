<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;

use App\Imports\CommunityImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportCommunityController extends Controller
{   

    public function import(){
        return view('admin.table-import-community');
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_community',$nama_file);
 
		// import data
		Excel::import(new CommunityImport, public_path('/file_community/'.$nama_file));
 
		// alihkan halaman kembali
		return redirect('/e-vote/admin/community');
	}
}
