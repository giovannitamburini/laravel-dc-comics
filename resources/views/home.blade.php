
{{-- questa è la pagina che si visualizzerà, non è il main_layout --}}

@extends('layouts/main')

@section('content')

<main>

    <div class="container" id="container-comics">

        <div id="current">current series</div>

        <div class="row">

            @foreach ($comics as $item)
            
            
            <div class="single-card col-2">
                
                <a href="/description_comic">
                
                    <div class="container-img">
                        <img src="{{$item['thumb']}}" alt="comic">
                    </div>
                    
                    {{$item['title']}}
                    
                </a>
            </div>
                
            @endforeach
        </div>

        <button id="load">LOAD MORE</button>
        
    </div>
</main>
    
@endsection