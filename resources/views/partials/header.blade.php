<header>

    {{-- navbar --}}
    <nav class="container navbar">
        
        {{-- logo sulla sinistra --}}
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Dc">

        {{-- lista dei link --}}
        <ul>
            <li><a href="{{route('homepage')}}">home</a></li>
            <li><a href="{{route('comics.index')}}">comics</a></li>
            <li><a href="">movies</a></li>
        </ul>

        {{-- search --}}
        <input type="text" placeholder="search">

    </nav>

    <div id="jumbotron">
    </div>
</header>