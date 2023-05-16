@extends('layouts/main')

@section('content')

<main>

    <div class="container container-comics">
        
        <div class="current">current series</div>
        
        <div class="row">
            
            @foreach ($comics as $item)
            
            
            <div class="single-card col-2">
                
                <a href="{{route('comics.show', $item->id)}}">
                    
                    <div class="container-img">
                        <img src="{{$item->thumb}}" alt="comic">
                    </div>
                    
                    {{$item->title}}
                
                </a>
            </div>
        
            @endforeach
        </div>
    
        <button class="load">LOAD MORE</button>
    
    </div>

</main>

@endsection