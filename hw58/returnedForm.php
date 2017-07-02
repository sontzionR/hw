<?php
    $name="";
    $email="";
    $age="";
    $rating="";
    
    if($_GET || $_POST){
    if(!empty($_GET['name'])) {
        if(is_numeric($_GET['name'])) {
            $errors[]=("Name must be alphbet");
        }
        $name = $_GET['name'];
    } 
    else {
        $errors[]=("please enter text");
    }


    if(!empty($_GET['email'])) {
        if(is_numeric($_GET['email'])) {
            $errors[]=("please enter valid email");
        }
        $email = $_GET['email'];
    } else {
        $errors[]=("please enter email"); 
    }

    if(isset($_GET['age'])) {
        if(!is_numeric($_GET['age']) || $_GET['age'] < 1 || $_GET['age'] >120) {
               $errors[]=("please enter valid age");
        }else {
          $age = $_GET['age'];
        }  
    } else {
       $errors[]=("please enter an age");
    }

    if(isset($_GET['rating'])) {
        if(!is_numeric($_GET['rating']) || $_GET['rating'] < 1 || $_GET['rating'] >10) {
               $errors[]=("please enter valid rating");
        }
        $rating = $_GET['rating'];
    } else {
       $errors[]=("please enter a rating");
    }
    }; 
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
        .well:first-of-type {
            background-color: transparent;
            border: none;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Your Info</h1>
        </div>
        <?php if (!empty($errors)) : ?>
            <div class="well text-danger">
                <ul>
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <?php endif ?>
        <div>
            <div>
                <div class="well col-sm-2 text-right">Name</div>
                <div class="col-sm-10 well"><?= $name ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Email</div>
                <div class="col-sm-10 well"><?= $email ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Age</div>
                <div class="col-sm-10 well"><?= $age ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Rating</div>
                <div class="col-sm-10 well"><?= $rating ?></div>
            </div>
        </div>

    </div>
    
</body>

</html>