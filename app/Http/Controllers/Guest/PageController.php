<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        // salvo nella variabile $comics (array) il database comics.php contenuto nella cartella config 
        $comics = config('comics');

        // dd($comics);

        // dopo aver controllato di aver ottenuto l'array tramite il dd
        // restituisco la view
        return view('home', compact('comics'));
    }
}
