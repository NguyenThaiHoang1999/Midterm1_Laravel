
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
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="card">
            <img class="card-img-top" style="width: 300px;height: 250px" src="storage/{{ $room->image }}" alt="">
            <div class="card-body">

                <h1 class="card-title">{{ $room->name }}</h1>
                <label for="">Gia Phong</label>
                <span class="card-text">{{ $room->price }}</span>
                <button disabled="disabled">Dat Phong</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>


<footer class="text-muted">
  <div class="container">
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>
</html>
