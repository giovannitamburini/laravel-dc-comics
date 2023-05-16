@extends('layouts/main')

@section('content')

<main>
    <div class="container container-comics text-center">
        
    
    <form action="{{route('comics.store')}}" method="POST">

        @csrf
        
        <div class="mb-3">
            <label for="title"></label>
            <input type="text" id="title" name="title" placeholder="titolo" required>
        </div>

        <div class="mb-3">
            <label for="description"></label>
            <textarea name="description" id="description" cols="30" rows="3" placeholder="descrizione" required></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb"></label>
            <input type="text" id="thumb" name="thumb" placeholder="link immagine" required>
        </div>

        <div class="mb-3">
            <label for="price"></label>
            <input type="text" id="price" name="price" placeholder="prezzo" required>
        </div>

        <div class="mb-3">
            <label for="series"></label>
            <input type="text" id="series" name="series" placeholder="serie tv" required>
        </div>

        <div class="mb-3">
            <label for="sale_date"></label>
            <input type="text" id="sale_date" name="sale_date" placeholder="data(YYYY-MM-DD)" required>
        </div>

        <div class="mb-3">
            <label for="type"></label>
            <input type="text" id="type" name="type" placeholder="tipo" required>
        </div>

        <div class="mb-3">
            <label for="artists"></label>
            <textarea name="artists" id="artists" cols="30" rows="3" placeholder="artisti" required></textarea>
        </div>

        <div class="mb-3">
            <label for="writers"></label>
            <textarea name="writers" id="writers" cols="30" rows="3" placeholder="scrittori" required></textarea>
        </div>

        <button class="btn btn-secondary" type="submit">Aggiungi fumetto</button>

    </form>
    </div>
</main>
    
@endsection