@extends('layouts.public')
@section('content')
    <div class="bg-dark">
        <div class="container pb-5 pt-5">
            <form action="{{ route('home.store') }}" method="POST">
                @csrf()
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci titolo"
                        name="title">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                        name="description"></textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci thumb"
                        name="thumb">
                </div>
                <div class="mb-3 col-2">
                    <label for="formGroupExampleInput" class="form-label">Prezzo</label>
                    <input type="number" step="0.01" class="form-control" id="formGroupExampleInput"
                        placeholder="Inserisci prezzo" name="price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Series</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci Serie"
                        name="series">
                </div>
                <div class="mb-3 col-2">
                    <label for="formGroupExampleInput" class="form-label">Data di vendita</label>
                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Inserisci Serie"
                        name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci Serie"
                        name="type">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Artisti</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci Serie"
                        name="artists">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Scrittori</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci Serie"
                        name="writers">
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <a href="{{ route('homepage') }}" class="btn btn-primary ms-3">Indietro</a>
            </form>
        </div>
    </div>
@endsection
