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
            <h1>Seforim Order Form</h1>
        </div>
        <div class="col-sm-3">
    <form >
        <div class="well">
            <div class="form-group">
                <label for="category">Category</label>
                <!-- <input class="form-control" id="category" name="category" /> -->
                
                <select class="form-control" id="category" name="category" >
               <?= $returnedCategory ?> 
            </select> 
            </div>
        </div>
         <input type="submit" value="filter"/> 
    </form>
</div>            
        <form class="form-inline"  method="get">
          <div class="form-group">
            <label for="name">Sefer</label>
            <select class="form-control" id="name" name="name" >
               <?= $returnedSefer ?>
            </select>  
          </div>
          <button type="submit" class="btn btn-default">Proceed to checkout</button>
        </form>
        <?php if(isset($_GET['name'])): ?>
        <div class="well col-sm-3"><?= $selectedReturnedSefer ." = ". "$".number_format($seferPrice,2) ?></div>
        <?php endif ?>
    </div>
</body>
</html>  