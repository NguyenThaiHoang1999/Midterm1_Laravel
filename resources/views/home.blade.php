<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>

    <body class="container-fluid">
        @foreach ($rooms as $room)
        <div class="card" style="width: 18rem;">
<div class="row">
        <div class="col-sm">{{$room->name}}</div>
        <div class="col-sm">
        <img class="card-img-top" src="{{$room->image}}" alt="" style="" width="100px" height="100px">
        </div>
        <div class="col-sm">
                {{$room->area}}
        </div>

       <div class="col-sm">
            {{$room->price}}
        </div>
</div>


        </div>
        @endforeach
    </body>

</html>
