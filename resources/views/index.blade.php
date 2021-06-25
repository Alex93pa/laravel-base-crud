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

        <a href="{{route('create')}}"> ADD NEW COMIC </a>
        
    </div>

    <div>
        @foreach($comics as $comic)
            <h2>{{ $comic['title'] }}</h2>
        @endforeach
    </div>

</body>
</html>