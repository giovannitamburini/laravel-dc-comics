@extends('layouts/main')

@section('content')

<main>
    <div class="container container-comics text-center">

        {{-- stampo a schermo gli errori --}}
        {{-- dd{{$errors}} --}}

        {{-- METODO BASICO PER MOSTRARE L'ELENCO DEGLI ERRORI --}}
        {{-- controllo se ci siano errori --}}
        {{-- @if($errors->any()) --}}

        {{-- ciclo l'array di errori --}}
        {{-- <ul> --}}
            {{-- @foreach ($errors->all() as $error) --}}

            {{-- <li class="text-light">{{$error}}</li> --}}
                
            {{-- @endforeach --}}
        {{-- </ul> --}}

        {{-- @endif --}}
        
    
    <form action="{{route('comics.store')}}" method="POST">

        @csrf
        
        <div class="mb-3">
            <label for="title"></label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="titolo" value="{{old('title')}}">

            @error('title')

            <div class="invalid-feedback">
                {{$message}}
            </div>

            @enderror


        </div>

        <div class="mb-3">
            <label for="description"></label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="3" placeholder="descrizione">{{old('description')}}</textarea>
        
            @error('description')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="thumb"></label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" placeholder="link immagine" value="{{old('thumb')}}">
        
            @error('thumb')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="price"></label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" placeholder="prezzo" value="{{old('price')}}">
        
            @error('price')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="series"></label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" placeholder="serie tv" value="{{old('series')}}">
        
            @error('series')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="sale_date"></label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" placeholder="data(YYYY-MM-DD)" value="{{old('sale_date')}}">
        
            @error('sale_date')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="type"></label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" placeholder="tipo" value="{{old('type')}}">
        
            @error('type')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="artists"></label>
            <textarea class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" cols="30" rows="3" placeholder="artisti">{{old('artists')}}</textarea>
        
            @error('artists')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <div class="mb-3">
            <label for="writers"></label>
            <textarea class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" cols="30" rows="3" placeholder="scrittori">{{old('writers')}}</textarea>
        
            @error('writers')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>

        <button class="btn btn-secondary" type="submit">Aggiungi fumetto</button>

    </form>
    </div>
</main>
    
@endsection