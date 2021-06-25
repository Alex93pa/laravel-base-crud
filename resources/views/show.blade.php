<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="">
        <div class="">
            <div class="">
                {{$comic['title']}}
                <div> </div>
            </div>
            <div class="">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="">
                    <h2>{{$comic['title']}}</h2>
                    <div>{{$comic['price']}}</div>
                    <div>{{$comic['series']}}</div>
                    <div>{{$comic['sale_date']}}</div>
                    <div>{{$comic['type']}}</div>
                </div>
            </div>
            <div class="">
                <div class=""><a href="{{route('home')}}"> <strong>BACK</strong> </a></div>
            </div>
        </div>

    </div>
    <div class="buttons">
        <div><a class="" href="{{route('comic.show',$comic['id'])}}"> DETAILS <i class="fa fa-info" aria-hidden="true"></i> </a></div>
        <div><a class="btn edit" href="{{route('comic.update',$comic['id'])}}"> EDIT <i class="fa fa-pencil" aria-hidden="true"></i> </a></div>
        <div><a class="btn delete" href="{{route('comic.show',$comic['id'])}}"> DELETE <i class="fa fa-trash" aria-hidden="true"></i></i> </a></div>
    </div>
</body>
</html>