<?php 

    include 'db.php';
    echo "Connected<br/>"; 
 
    if(isset($_POST['name']) && isset($_POST['price'])){
        if(empty($_POST['name']) || is_numeric($_POST['name']) ||
         empty($_POST['price'])|| !is_numeric($_POST['price'])){
            die("enter a valid name and price");
        }else{
            $name=$_POST['name'];
            $price=$_POST['price'];
        }    
    $insert = "INSERT INTO seforim (name, price) VALUES (:name,:price)";
    $statement=$db->prepare($insert);
    $statement->bindValue('name',$name);
    $statement->bindValue('price',$price);
    $statement->execute();
    echo "Inserted <br/>";
    }     
?>