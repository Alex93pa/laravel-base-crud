@extends('layout.default')

@section('page_title', 'Dettagli Fumetto ')

@section('content')

<ul>
    <li>ID: {{ $comic->id }}</li>
    <li> <img src=" {{ $comic->thumb }}" alt=""> </li>
    <li>Created at: {{ $comic->title }}</li>
    <li>Description: {{ $comic->description }}</li>
    <li>Price: {{ $comic->series }}</li>
    <li>Price: {{ $comic->price }}</li>
    <li>Type: {{ $comic->type }}</li>
    <li>Type: {{ $comic->sale_date }}</li>


</ul>

    <div class="buttons">
        <div><a class="" href="{{route('show',$comic['id'])}}"> DETAILS <i class="fa fa-info" aria-hidden="true"></i> </a></div>
        <div><a class="btn edit" href="{{route('update',$comic['id'])}}"> EDIT <i class="fa fa-pencil" aria-hidden="true"></i> </a></div>
        <div><a class="btn delete" href="{{route('show',$comic['id'])}}"> DELETE <i class="fa fa-trash" aria-hidden="true"></i></i> </a></div>
    </div>
@endsection