<?php
$languages = ["java","mySql","html","css","php","javascript"];

$name="";
$years="";
$language="";

if($_GET || $_POST){ /*<-credits to yochanan,Thanks for this line*/
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
    }else{
    $errors[]= "NAME IS REQUIRED";
    } 
     
    if(isset($_POST['years'])) {
        if(!is_numeric($_POST['years']) || $_POST['years'] < 0 || $_POST['years'] > 50) {
            $errors[] = "YEARS MUST BE A VALID NUMBER BETWEEN 0 AND 50";
        } else {
            $age = $_POST['years'];
        }
    } else {
        $errors[] = "YEARS IS REQUIRED";
    }

    if(!empty($_POST['language']) && in_array($_POST['language'],$languages)){
        $language = $_POST['language'];
    }else{
    $errors[]= "please enter a valid language";
    } 
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
            <h1>Programming Info</h1>
        </div>

        <?php if (!empty($errors) && ($_POST || $_POST)) {?>
            <div class="well text-danger">
                <ul>
                    <?php foreach($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php }elseif(empty($errors) && ($_GET || $_POST)){
            echo"Thank you for submitting your data. $language, is a good choice "  ?>
            <?php } ?>


        <form class="form-horizontal"method="post" >
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"  xrequired
                     value="<?= $name ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Years</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" min="1" step="1" max="120" id="years" name="years"
                     placeholder="years" xrequired value="<?= $years ?>">
                </div>
            </div>
     
            <div class="form-group">
                <label for="language" class="col-sm-2 control-label">Favorate Language</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="language" name="language" placeholder=
                    "enter favorite language"  xrequired value="<?= $language ?>" >
                </div>
            </div>

             <!--to choose from a list of languages-->
            <!--<div class="form-group">
               <div class="col-sm-offset-1 col-sm-10">
                    <select class="form-control" name="language[]" multiple>
                        <?php foreach($languages as $language) : ?>
                        <option value="<?= $language ?>"
                        <?php if (in_array($language, $languages)) echo "selected" ?>
                        ><?= $language ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>-->

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>