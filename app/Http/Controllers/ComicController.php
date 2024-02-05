<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

use function PHPUnit\Framework\directoryExists;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("users.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Comic $comic)
    {
        return view("users.aggiuntacomics",compact("comic"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->all();

        $NewComic = new Comic();

        $NewComic->titolo = $data["titolo"];
        $NewComic->descrizione = $data["descrizione"];
        $NewComic->immagine = $data["immagine"];
        $NewComic->prezzo = $data["prezzo"];
        $NewComic->serie = $data["serie"];
        $NewComic->data_uscita = $data["data_uscita"];
        $NewComic->tipo = $data["tipo"];

        $NewComic->save();
        /* validazione */
        // $request->validate([
            
        //  "titolo"=>"required|string|min:2|max:100",
        //  "descrizione"=>"required|string|max:1000",
        //  "immagine"=>"required|url|string|max:500",
        //  "prezzo"=>"required|numeric|",
        //  "data_uscita"=>"required|date",
        //  "serie"=>"required|string|max:100",
        //  "tipo"=>"required|string|max:100",

        // ],[
        //     "immagine.url" =>"l' url inserito non è corretto",
        //     "titolo.min" =>"il titolo inserito deve essere almeno :min caratteri",
        //     "prezzo.numeric"=>" il prezzo non è un numero",
        // ]);

        $data = $request->validated();


        return redirect()->route('comics.show', $NewComic->id);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        
        return view('users.descrizione', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("users.editcomic", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        $validate = $request->validated();


        return view("users.modifche",compact("comic"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
