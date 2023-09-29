<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $data = [
            /* "exString" => "string", */
            "comics" => Comic::all(),
        ];
        return view('home', $data);
    }
    public function show($id)
    {
        $dataShow = [
            /* "exString" => "string", */
            "comicsShow" => Comic::findOrFail($id),
        ];
        return view('home-show', $dataShow);
    }
}
