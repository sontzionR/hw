<?php
    $theSefer = $_POST['name'];
    $cs = "mysql:host=localhost;dbname=seforimstore";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected<br/>";

         $query = "SELECT * FROM seforim";
        $results = $db->query($query);
        $returnedSefer = "";
        foreach($results as $sefer) {
        $returnedSefer .= "<option> {$sefer['name']} </option>"; 
        }
        $del = "DELETE FROM seforim WHERE name = :theSefer";
        $statement = $db->prepare($del);
        $statement->bindValue('theSefer',$theSefer);
        $statement->execute();

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
            <h1>Delete Seforim Form</h1>
        </div>            
        <form class="form-inline"  method="post">
          <div class="form-group">
            <label for="name">Sefer</label>
            <select class="form-control" id="name" name="name" >
               <?= $returnedSefer ?>
            </select>  
          </div>
          <button type="submit" class="btn btn-default">Delete</button>
        </form>
    </div>
</body>
</html>  