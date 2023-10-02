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
    public function create()
    {
        return view('home-create');
    }
    public function store(Request $request)
    {
        /* validazione */
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|integer",
            "series" => "required|string",
            "sale_date" => "required|date|after:today",
            "type" => "required|string",
            "artists" => "required|string",
            "writers" => "required|string",
        ]);
        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);
        $newComic = new Comic();

        /* Riempi il modello con il data */
        $newComic->fill($data);

        /* salvare i dati */
        $newComic->save();

        /* a quale pagina indirizzare l'utente all'invio dei dati */
        return redirect()->route('homepage');
    }
}
