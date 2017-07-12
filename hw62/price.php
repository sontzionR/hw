<?php

$theSefer = $_GET['name'];
$cs = "mysql:host=localhost;dbname=seforimstore";
$user = "test";
$password = 'password';

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO($cs, $user, $password, $options);
    echo "Connected<br/>";

   $query = "SELECT * FROM seforim  WHERE name = '$theSefer'";

    $results = $db->query($query);
    $returnedSefer = "";
    $seferPrice = "";
    foreach($results as $sefer) {
        $returnedSefer .= $sefer['name']; 
        $seferPrice .= $sefer['price'];
    }

    
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
            <h1>Sefer Price</h1>
        </div>            
         <div class="well"><?= $returnedSefer ." = ". "$". $seferPrice ?></div>
    </div>
</body>
</html>  