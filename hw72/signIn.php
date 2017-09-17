<?php

$cs = "mysql:host=localhost;dbname=user";
$dbuser = "test";
$dbpassword = 'password';

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO($cs, $dbuser, $dbpassword, $options);
echo("connected");
 
if(isset($_POST['user'])&& isset($_POST['password'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $correct = password_verify($password,$hash);

    $query = "SELECT userName, password FROM userid WHERE password = :correct";
    $statement = $db->prepare($query);
    $statement->bindValue('correct', $correct);
    $statement->execute();
    $correctUser = $statement->fetch();    
}

} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
    echo("not connected");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  <div class="container ">
        <div class="jumbotron text-center">
            <h1>Welcome</h1>
            <h2>Sign-in</h2>
        </div>     
    <form method="post">
  <div class="form-group">
    <label for="user"></label>
    <input type ="text" class="form-control" id="user" name="user" placeholder="User Name">  
  </div>
  <div class="form-group">
    <label for="password"></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>