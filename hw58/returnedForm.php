<?php

    if(isset($_POST['name'])) {
        if(is_numeric($_POST['name'])) {
            $errors[]=("Name must be alphbet");
        }
        $name = $_POST['name'];
    } 
    else {
        $errors[]=("please enter text");
    }

    if(isset($_POST['email'])) {
        if(is_numeric($_POST['email'])) {
            $errors[]=("please enter valid email");
        }
        $email = $_POST['email'];
    } else {
        $errors[]=("please enter email"); 
    }

    if(isset($_POST['age'])) {
        if(!is_numeric($_POST['age']) || $_POST['age'] < 1 || $_POST['age'] >120) {
               $errors[]=("please enter valid age");
        }
        $age = $_POST['age'];
    } else {
       $errors[]=("please enter an age");
    }

    if(isset($_POST['rating'])) {
        if(!is_numeric($_POST['rating']) || $_POST['rating'] < 1 || $_POST['rating'] >10) {
               $errors[]=("please enter valid rating");
        }
        $rating = $_POST['rating'];
    } else {
       $errors[]=("please enter a rating");
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
        <?php if (isset($errors)) : ?>
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
                <div class="col-sm-10 well"><?= ($name) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Email</div>
                <div class="col-sm-10 well"><?= ($email) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Age</div>
                <div class="col-sm-10 well"><?= number_format($age) ?></div>
            </div>
            <div>
                <div class="well col-sm-2 text-right">Rating</div>
                <div class="col-sm-10 well"><?= number_format($rating) ?></div>
            </div>
        </div>

    </div>
    <script src="/jquery-1.12.4.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>

</html>