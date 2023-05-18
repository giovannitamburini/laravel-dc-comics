<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required|max:10',
        //     'series' => 'required|max:50',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|max:50',
        //     'artists' => 'required',
        //     'writers' => 'required'
        // ]);

        $this->validation($request);


        // dd($request->all());
        $formData = $request->all();

        $newComic = new Comic();

        // per utilizzare questo metodo bisogna andare in model e aggiungere un protected $fillable = ['title','description'....]
        $newComic->fill($formData);

        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];
        // $newComic->artists = $formData['artists'];
        // $newComic->writers = $formData['writers'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    // oppure
    // public function show($id)
    {

        return view('comics/show', compact('comic'));

        // oppure
        // $comic = Comic::findorFail($id);
        // return view('comics/show',)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request);

        // dd($request);
        // dd($comic);

        // prendo i parametri dai campi di input del form in  edit.blade
        $formData = $request->all();

        // sintassi per modificare un ogetto del model del database
        $comic->update($formData);

        // salvare le modifiche nel database
        $comic->save();

        // dd($comic);

        // redirect alla show.blade
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // metodo per eliminare il dato dal database
        $comic->delete();

        return redirect()->route('comics.index');
    }


    private function validation($request)
    {

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ]);
    }
}
