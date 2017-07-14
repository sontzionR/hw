<?php
$name="";
$price="";
if(isset($_POST['name'])){
    if(empty($_POST['name'] || is_numeric($_POST['name']))){
        die("enter a valid name");
    }else{
        $name=$_POST['name'];
    }
};
if(isset($_POST['price'])){
    if(empty($_POST['price'] || !is_numeric($_POST['price']))){
        die("enter a valid price");
    }else{
        $price=$_POST['price'];
    }
};



$cs = "mysql:host=localhost;dbname=seforimstore";
$user = "test";
$password = 'password';

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO($cs, $user, $password, $options);
    echo "Connected<br/>";
    // $insert = "INSERT INTO seforim (name, price) VALUES ('$name','$price')";
    $insert = "INSERT INTO seforim (name, price) VALUES (:name,:price)";
    // $rowsInserted = $db->exec($insert);
    $statement=$db->prepare($insert);
    $statement->bindValue('name',$name);
    $statement->bindValue('price',$price);
    $statement->execute();
    echo "Inserted <br/>";
} catch(PDOException $e) {
    die("Something went wrong " . $e->getMessage());
}
?>
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