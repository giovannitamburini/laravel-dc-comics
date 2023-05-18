@extends('layouts/main')

@section('content')

<main>
    <div class="container container-comics text-center">
        
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">

        @csrf

        @method('PUT')
        
        <div class="mb-3">
            <label class="text-light" for="title">Titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">

            @error('title')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="3">{{old('description') ?? $comic->description}}</textarea>

            @error('description')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="thumb">Link immagine</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">

            @error('thumb')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="price">Prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">

            @error('price')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="series">Serie TV</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">

            @error('series')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="sale_date">Data(YYYY-MM-DD)</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">

            @error('sale_date')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="type">Tipo</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">

            @error('type')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="artists">Artisti</label>
            <textarea class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" cols="30" rows="3">{{old('artists') ?? $comic->artists}}</textarea>

            @error('artists')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label class="text-light" for="writers">Scrittori</label>
            <textarea class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" cols="30" rows="3"> {{old('writers') ?? $comic->writers}}</textarea>

            @error('writers')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <button class="btn btn-secondary" type="submit">Salva Modifiche</button>

    </form>
    </div>
</main>
    
@endsection