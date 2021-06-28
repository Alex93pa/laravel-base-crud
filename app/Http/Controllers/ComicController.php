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

    public function show($comic)
    {
        return view('show',[
            'comic'=> $comic
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        $comicData = $request->all();
        
        $newComic = new Comic();
        $newComic->fill($comicData);
        $newComic->save();
        return redirect()->route('show', $newComic);
    }

}
