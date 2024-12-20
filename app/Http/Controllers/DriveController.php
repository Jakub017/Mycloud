<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index(Request $request) {
        return Inertia('Drive/Index',
            [
                'uploads' => Upload::where('user_id', $request->user()->id)->get(),
            ]
        );
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,docx,mp4,mp3,zip,rar|max:50000',
        ]);

        $path = $request->file('file')->store('uploads');

        $upload = Upload::create([
            'file_path' => $path,
            'file_name' => $request->file('file')->getClientOriginalName(),
            'file_type' => $request->file('file')->getClientMimeType(),
            'file_size' => $request->file('file')->getSize(),
            'user_id' => $request->user()->id
        ]);

        return redirect()->back()->with('success', 'Plik został wgrany!');
    }
}
