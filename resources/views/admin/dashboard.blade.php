<!doctype html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container">
    <div class="row">
    @foreach ($rooms as $room)
        <table>
                <tr>
                    <td>{{ $room->name }}</td>

                    <td>
                          <img class="card-img-top" style="width: 300px;height: 250px" src="storage/{{ $room->image }}" alt="">
                    </td>


                    <td>{{ $room->price }}</td>
                    <td>{{ $room->area }}</td>
                    <td>{{ $room->number }}</td>
                </tr>
        </table>


    </div>
    </div>
    @endforeach
    </div>
</div>

    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
