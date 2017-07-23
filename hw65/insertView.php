<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Add to my Seforim inventory </h1>
        </div>            
        <form class="form-inline" method="POST">
          <div class="form-group">
            <label for="name">Sefer Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="Price">Sefer Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
          <button type="submit" class="btn btn-default">add sefer</button>
        </form>
    </div>
</body>
</html>  

