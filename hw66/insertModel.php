<?php 

    include 'db.php';
    echo "Connected<br/>"; 
 
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['category'])){
        if(empty($_POST['name']) || is_numeric($_POST['name']) ||
         empty($_POST['price'])|| !is_numeric($_POST['price'])||
          empty($_POST['category']) || is_numeric($_POST['category'])){
            die("enter a valid name and price");
        }else{
            $name=$_POST['name'];
            $price=$_POST['price'];
            $category=$_POST['category'];
        }    
    $insert = "INSERT INTO seforim (name, price, category) VALUES (:name,:price,:category)";
    $statement=$db->prepare($insert);
    $statement->bindValue('name',$name);
    $statement->bindValue('price',$price);
    $statement->bindValue('category',$category);
    $statement->execute();
    echo "Inserted <br/>";
    }     
?>