@extends('layouts/main')

@section('content')

<main>
    <div class="container container-comics text-center">
        
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">

        @csrf

        @method('PUT')
        
        <div class="mb-3">
            <label class="text-light" for="title">Titolo</label>
            <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="text-light" for="thumb">Link immagine</label>
            <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="price">Prezzo</label>
            <input class="form-control" type="text" id="price" name="price" value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="series">Serie TV</label>
            <input class="form-control" type="text" id="series" name="series" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="sale_date">Data(YYYY-MM-DD)</label>
            <input class="form-control" type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="type">Tipo</label>
            <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label class="text-light" for="artists">Artisti</label>
            <textarea class="form-control" name="artists" id="artists" cols="30" rows="3"> {{$comic->artists}}</textarea>
        </div>

        <div class="mb-3">
            <label class="text-light" for="writers">Scrittori</label>
            <textarea class="form-control" name="writers" id="writers" cols="30" rows="3"> {{$comic->writers}}</textarea>
        </div>

        <button class="btn btn-secondary" type="submit">Salva Modifiche</button>

    </form>
    </div>
</main>
    
@endsection