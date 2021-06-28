<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class comicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('index', compact('comics'));
    }

    public function show($id)
    {
        return view('show',compact('comic'));
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
