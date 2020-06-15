<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>Create</title>
</head>
<body>
    <div class="container-fluid"  style=" position: relative">

        <div class="container">
        <div id="viewport" >
      <!-- Content -->
      <div id="content" >

        <form action="/rooms" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="form-group">
                  <label  for="name">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Nhập tên ">
              </div>

               <div class="control-group">
                <label class="control-label">Chọn file </label>
                <div class="controls">
                    <input type="file" name="image" title="Thêm hình vào kho" required="true"/> *
                </div>
            </div>
              <div class="form-group">
                <label  for="typeroom">Typeroom</label>
                <input type="text" class="form-control" name="typeroom" placeholder="Nhập typeroom">
            </div>
            <div class="form-group">
                <label  for="typeroom">Area</label>
                <input type="text" class="form-control" name="area" placeholder="Nhập dien tich">
            </div>
           <div class="form-group">
                <label  for="typeroom">Number</label>
                <input type="text" class="form-control" name="number" placeholder="Nhập so nguoi">
            </div>

              <div class="form-group">
                <label  for="sale">Price:</label>
                <input type="text" class="form-control" name="price" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Thêm</button>
          </form>
</body>
</html>
