<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /* INDEX */
    public function index()
    {
        $data = [
            /* "exString" => "string", */
            "comics" => Comic::all(),
        ];
        return view('home', $data);
    }

    /* SHOW */
    public function show($id)
    {
        $dataShow = [
            /* "exString" => "string", */
            "comicsShow" => Comic::findOrFail($id),
        ];
        return view('home-show', $dataShow);
    }

    /* CREATE */
    public function create()
    {
        return view('home-create');
    }

    /* STORE */
    public function store(Request $request)
    {
        /* validazione */
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|decimal:0,4",
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

    /* EDIT  */
    public function edit($id)
    {
        $dataShow = [
            /* "exString" => "string", */
            "comicsShow" => Comic::findOrFail($id),
        ];
        return view('home-edit', $dataShow);
    }

    /* UPDATE */
    public function update(Request $request, $id)
    {
        $comicsShow = Comic::findOrFail($id);

        /* validazione */
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "required|string",
            "price" => "required|decimal:0,4",
            "series" => "required|string",
            "sale_date" => "required|date|after:today",
            "type" => "required|string",
            "artists" => "required|string",
            "writers" => "required|string",
        ]);
        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);

        /* fa un fill e un save */
        $comicsShow->update($data);


        /* a quale pagina indirizzare l'utente all'invio dei dati */
        return redirect()->route('home.show', $comicsShow->id);
    }

    /* DESTROY */
    public function destroy($id)
    {

        /* "exString" => "string", */
        $comicsShow = Comic::findOrFail($id);

        $comicsShow->delete();

        return redirect()->route('homepage');
    }
}
