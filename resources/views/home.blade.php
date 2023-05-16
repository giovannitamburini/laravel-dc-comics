
{{-- questa è la pagina che si visualizzerà, non è il main_layout --}}

@extends('layouts/main')

@section('content')

<main>

<div class="container container-comics">

<a href="{{route('comics.index')}}">Vai alla lista dei fumetti</a>

</div>
</main>
    
@endsection