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
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,docx,doc,mp4,mp3,zip,rar,xls,xlsx|max:50000',
        ]);

        $usedStorage = $request->user()->usedStorage();
        $storageLimit = $request->user()->storageLimit();
        $fileSize = $request->file('file')->getSize();

        if($usedStorage + $fileSize > $storageLimit) {
            return redirect()->back()->with('error', 'Nie masz wystarczającej ilości miejsca.');
        }

        $path = $request->file('file')->store('uploads');

        Upload::create([
            'file_path' => $path,
            'file_name' => $request->file('file')->getClientOriginalName(),
            'file_type' => $request->file('file')->getClientMimeType(),
            'file_size' => $fileSize,
            'user_id' => $request->user()->id,
        ]);

        return redirect()->back()->with('success', 'Plik został wgrany!');
    }
}
