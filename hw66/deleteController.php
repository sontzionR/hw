<?php
    $theSefer = "";
        if(isset($_POST['name'])){
            if(empty($_POST['name'])){
                die("enter a valid name and price");
            }else{
                $theSefer = $_POST['name'];
            }
        }      
    include 'deleteModel.php';   
    include 'deleteView.php';

?>