@extends('layouts/main')

@section('content')

<main>
    <div class="container container-comics text-center">

        {{-- stampo a schermo gli errori --}}
        {{-- dd{{$errors}} --}}

        {{-- METODO BASICO PER MOSTRARE L'ELENCO DEGLI ERRORI --}}
        {{-- controllo se ci siano errori --}}
        @if($errors->any())

        {{-- ciclo l'array di errori --}}
        <ul>
            @foreach ($errors->all() as $error)

            <li class="text-light">{{$error}}</li>
                
            @endforeach
        </ul>

        @endif
        
    
    <form action="{{route('comics.store')}}" method="POST">

        @csrf
        
        <div class="mb-3">
            <label for="title"></label>
            <input type="text" id="title" name="title" placeholder="titolo" value="{{old('title')}}">
        </div>

        <div class="mb-3">
            <label for="description"></label>
            <textarea name="description" id="description" cols="30" rows="3" placeholder="descrizione">{{old('description')}}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb"></label>
            <input type="text" id="thumb" name="thumb" placeholder="link immagine" value="{{old('thumb')}}">
        </div>

        <div class="mb-3">
            <label for="price"></label>
            <input type="text" id="price" name="price" placeholder="prezzo" value="{{old('price')}}">
        </div>

        <div class="mb-3">
            <label for="series"></label>
            <input type="text" id="series" name="series" placeholder="serie tv" value="{{old('series')}}">
        </div>

        <div class="mb-3">
            <label for="sale_date"></label>
            <input type="text" id="sale_date" name="sale_date" placeholder="data(YYYY-MM-DD)" value="{{old('sale_date')}}">
        </div>

        <div class="mb-3">
            <label for="type"></label>
            <input type="text" id="type" name="type" placeholder="tipo" value="{{old('type')}}">
        </div>

        <div class="mb-3">
            <label for="artists"></label>
            <textarea name="artists" id="artists" cols="30" rows="3" placeholder="artisti">{{old('artists')}}</textarea>
        </div>

        <div class="mb-3">
            <label for="writers"></label>
            <textarea name="writers" id="writers" cols="30" rows="3" placeholder="scrittori">{{old('writers')}}</textarea>
        </div>

        <button class="btn btn-secondary" type="submit">Aggiungi fumetto</button>

    </form>
    </div>
</main>
    
@endsection