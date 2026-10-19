<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function user()
    {
        return view('user');
    }

    public function result(Request $request)
    {
        $nim = $request->nim;
        $nama = $request->nama;

        return view('result', compact('nim', 'nama'));
    }
}
