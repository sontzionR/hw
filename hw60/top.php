<?php
$font = "Helvetica Neue,Helvetica,Arial,sans-serif";
if(!empty($_GET["font"])) {
    $font = $_GET["font"];
}
if(empty($color)) {
    $color = "white";
}
if(!empty($_GET["textArea"])) {
    $color = $_GET["textArea"];
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
    <style>  
        textarea.form-control {
            background-color: <?= $color ?>;
            font-family: <?= $font ?>;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
          <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theLinks" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="theLinks">
                <ul class="nav navbar-nav">
                    <li><a href="standeredPage.php">standeredPAGE</a></li>
                    <li><a href="redPage.php">redPAGE</a></li>
                    <li><a href="bluePage.php">bluePAGE</a></li>
                    <li><a href="chooseMyColor.php">chooseColorPAGE</a></li>
                </ul>
            </div>
       </div>
     </nav>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Send a colorful message</h1>
        </div>
