@extends('layout.default')

@section('page_title', 'Dettagli Fumetto ')

@section('content')

<ul>

    <li>ID: <strong>{{ $comic['id'] }}</strong></li>
    <li>DESCRIPTION: <br>{{ $comic->description }}</li>
    <li>SERIES: <strong>{{ $comic->series }}</strong></li>
    <li>TYPE: <strong>{{ $comic->type }}</strong></li>
    <li>PRICE: <strong>{{ $comic->price }}</strong></li>

</ul>

    <a href="{{ route('edit') }}">Modifica</a>

    @include('destroy', ["id"=> $comic->id])

@endsection