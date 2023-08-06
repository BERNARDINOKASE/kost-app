<?php

namespace App\Http\Controllers;

use App\Models\KosData;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $data = KosData::all();
        return view('app.home.index', compact('data'));
    }

    public function show($id)
    {
        $data = KosData::where('id', $id)->first();
        return view('app.home.show', compact('data'));
    }
    public function ajukansewa($id)
    {
        $data = KosData::where('id', $id)->first();
        // dd($data);
        return view('app.home.ajukansewa', compact('data'));
    }
}
