<header>

    {{-- navbar --}}
    <nav class="container navbar">
        
        {{-- logo sulla sinistra --}}
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo Dc">

        {{-- lista dei link --}}
        <ul>
            <li><a href="">characters</a></li>
            <li class="active"><a href="">comics</a></li>
            <li><a href="">movies</a></li>
            <li><a href="">tv</a></li>
            <li><a href="">games</a></li>
            <li><a href="">collectibles</a></li>
            <li><a href="">videos</a></li>
            <li><a href="">fans</a></li>
            <li><a href="">news</a></li>
            <li><a href="">shop</a></li>
        </ul>

        {{-- search --}}
        <input type="text" placeholder="search">

    </nav>

    <div id="jumbotron">
    </div>
</header>