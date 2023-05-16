@extends('layouts/main')

@section('content')

<main>
    <div class="container d-flex flex-column justify-content-center align-items-center gap-2 text-light text-center my-text">

        {{-- {{dd($comic)}} --}}
        <img src="{{$comic->thumb}}" class="show-single-image" alt="comic_thumb">
        
        <h2 class="text-uppercase">{{$comic->title}}</h2>
        <p><strong>trama: </strong>{{$comic->description}}</p>
        <div><strong>prezzo: </strong>{{$comic->price}}</div>
        <div><strong>nome serie: </strong>{{$comic->series}}</div>
        <div><strong>data di rilascio: </strong>{{$comic->sale_date}}</div>
        <div><strong>tipo: </strong>{{$comic->type}}</div>
        <div><strong>artisti: </strong>{{$comic->artists}}</div>
        <div><strong>scrittori: </strong>{{$comic->writers}}</div>
        

    </div>
</main>
    
@endsection