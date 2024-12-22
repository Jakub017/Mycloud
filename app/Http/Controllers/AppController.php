<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard() {
        return Inertia('Dashboard',
    [
        'files' => Upload::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->limit(5)->get(),

        'documentsCount' => count(Upload::where('user_id', auth()->user()->id)->whereIn('file_type', ['application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])->get()),

        'musicCount' => count(Upload::where('user_id', auth()->user()->id)->whereIn('file_type', ['audio/mpeg'])->get()),

        'photosCount' => count(Upload::where('user_id', auth()->user()->id)->whereIn('file_type', ['image/jpeg', 'image/png', 'image/jpg',])->get()),

        'videosCount' => count(Upload::where('user_id', auth()->user()->id)->whereIn('file_type', ['video/mp4'])->get()),
    ]);
    }

}
