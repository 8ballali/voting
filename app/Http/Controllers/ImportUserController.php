<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Imports\CommunityImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportUserController extends Controller
{
    public function import(){
        return view('admin.table-import-user');
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
		$file->move('file_user',$nama_file);
 
		// import data
		Excel::import(new CommunityImport, public_path('/file_user/'.$nama_file));
 
		// alihkan halaman kembali
		return redirect('/e-vote/admin/user');
	}
}
