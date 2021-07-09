<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download_file(Request $request){
        if (Storage::disk('public')->exist("storage/$request->file")) {
            $path = Storage::disk('public')->path("storage/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-Type' => mime_content_type($path)
            ]);
        }
        return redirect('404');
    }
}
