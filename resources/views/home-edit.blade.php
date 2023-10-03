@php
    $chars = ['[', ']', '"'];
@endphp
@extends('layouts.public')
@section('content')
    <div class="bg-dark">
        <div class="container pb-5 pt-5">
            <form action="{{ route('home.update', $comicsShow->id) }}" method="POST">
                @csrf()
                @method('put')
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Titolo</label>
                    {{--  @error('title') is-invalid @enderror  assegna classe se presente l'errore --}}
                    {{-- value="{{ old('title') mettere il valore che è stato assegnato prima --}}
                    {{-- se presente l'errore crea un div con il messaggio
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                    --}}

                    {{-- così da poter stampare anche il titolo presente 
                         value="{{ old('title', $comicsShow->title) }}">
                    --}}
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput"
                        placeholder="Inserisci titolo" name="title" value="{{ old('title', $comicsShow->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    {{-- nel textarea mettere {{ old('description') }} all'interno del tag --}}
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px" name="description">{{ old('description', $comicsShow->description) }}</textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Thumb</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci thumb" name="thumb"
                        value="{{ old('thumb', $comicsShow->thumb) }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 col-2">
                    <label for="formGroupExampleInput" class="form-label">Prezzo</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci prezzo" name="price"
                        value="{{ old('price', $comicsShow->price) }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci Serie" name="series"
                        value="{{ old('series', $comicsShow->series) }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 col-2">
                    <label for="formGroupExampleInput" class="form-label">Data di vendita</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci data di vendita" name="sale_date"
                        value="{{ old('sale_date', $comicsShow->sale_date) }}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Tipo</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci serie" name="type"
                        value="{{ old('type', $comicsShow->type) }}">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Artisti</label>
                    <input type="text" class="form-control @error('artists') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci artisti" name="artists"
                        value="{{ old('artists', str_replace($chars, '', $comicsShow['artists'])) }}">
                    @error('artists')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Scrittori</label>
                    <input type="text" class="form-control @error('writers') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Inserisci scrittori" name="writers"
                        value="{{ old('writers', str_replace($chars, '', $comicsShow['writers'])) }}">
                    @error('writers')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <a href="{{ route('homepage') }}" class="btn btn-primary ms-3">Indietro</a>
            </form>
        </div>
    </div>
@endsection
