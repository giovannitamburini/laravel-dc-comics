@extends('layouts/main')

@section('content')

<main>
    <div class="container d-flex flex-column justify-content-center align-items-center gap-2 text-light text-center my-text">

        {{-- {{dd($comic)}} --}}
        <img src="{{$comic->thumb}}" class="mt-3 show-single-image" alt="comic_thumb">
        
        <h2 class="text-uppercase">{{$comic->title}}</h2>
        <p><strong>trama: </strong>{{$comic->description}}</p>
        <div><strong>prezzo: </strong>{{$comic->price}}</div>
        <div><strong>nome serie: </strong>{{$comic->series}}</div>
        <div><strong>data di rilascio: </strong>{{$comic->sale_date}}</div>
        <div><strong>tipo: </strong>{{$comic->type}}</div>
        <div><strong>artisti: </strong>{{$comic->artists}}</div>
        <div><strong>scrittori: </strong>{{$comic->writers}}</div>
        
        <hr class="mb-2">

        <div class="row">
            
            <div class="col-6">
                <a class="text-uppercase mb-4" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
            </div>
            
            <div class="col-6">

                {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST"> --}}
                    
                    {{-- @csrf --}}
                    
                    {{-- @method('DELETE') --}}
                    
                    {{-- <button class="btn btn-danger" type="submit">Elimina</button> --}}


                {{-- </form> --}}
                
                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>
                
                
            </div>
            
        </div>


    </div>
</main>

@endsection

@include('comics/modal')

