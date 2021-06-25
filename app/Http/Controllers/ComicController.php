<?php

namespace App\Http\Controllers;

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

}
