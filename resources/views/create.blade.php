@extends('layout.default')

@section('page_title', 'Aggiungi un fumetto ')

@section('content')
<body>
    <div class="">
        <div class="">
            <div class="">
                ADD COMIC
            </div>

            <div class="">
                <form action="{{route('store')}}" method="POST">
                @csrf
                
                    <label for="name"> TITLE: <br> <input type="text" name="name"></label> <br>
                    
                    <label for="description">DESCRIPTION: <br> <input type="text" name="description"></label> <br>
                   
                    <label for="thumb"> THUMB: <br> <input type="text" name="thumb"></label> <br>
                    
                    <label for="price"> PRICE: <br> <input type="number" step="0.01" name="price"></label> <br>
                    
                    <label for="series"> SERIES: <br> <input type="text" name="series"></label> <br>
                    
                    <label for="sale_date"> DATE SALE: <br> <input type="date" name="sale_date"></label> <br>
                    
                    <label for="type"> TYPE: <br> <input type="text" name="type"></label> <br>
                    
                    <a class="" href="{{ route('index') }}">Cancel</a>

                    <input class="" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</body>
@endsection