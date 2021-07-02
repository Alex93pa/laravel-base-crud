<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class comicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('index', [
            'comics' => $comics
        ]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('show',[
            'comic'=> $comic
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $comic = Comic::find($id);

        if (is_null($id)) {
            abort(404, 'Pagina non esistente');
        }

        return view('edit', [
            'comic' => $comic,
        ]);
    }

    public function store(Request $request){
        $comicData = $request->all();
        
        $newComic = new Comic();
        $newComic->fill($comicData);
        $newComic->save();
        return redirect()->route('show', $newComic);
    }

    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('index');
    }

}
