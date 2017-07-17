<?php
    $cs = "mysql:host=localhost;dbname=test";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);

        $query = "SELECT * FROM students GROUP BY name";
        $results = $db->query($query);
        $students = $results->fetchAll();
        $results->closeCursor();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['student'])){
            if(empty($_POST['student'])){
                die("enter a valid name and price");
            }else{
                $theName = $_POST['student'];
            }
        $del = "DELETE FROM students WHERE name = :theName";
        $statement = $db->prepare($del);
        $statement->bindValue('theName', $theName);
        $statement->execute();
        }
    }    
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
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
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Students Grades</h1>
            <h3>select to delete</h3>
        </div>
    </div>
    <div class="container">
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label for="student" class="col-sm-2 control-label">Select A student</label>
                <div class="col-sm-10">
                <select class="form-control" id="student" name="student">
  <!-- /*this is how it worked before i committed it i think i didnt save so i am fixing it
   (just relized now when i ran it in the browser that it want working like before) but im still not 
   finished so please count as 1030 from now?just took out one line that i didnt save after i removed it*/  -->
                        <?php foreach($students as $student) :?>
                        <option value="<?= $student['name'] ?>"
                         echo "selected" ?>
                        <?=$student["name"].' '. $student["grade"].' '. $student["grade"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Delete Student</button>
                </div>
            </div>
        </form>

        <!-- <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php endif ?> -->
    </div>
</body>

</html>