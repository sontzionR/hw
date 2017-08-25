<?php
    $theSefer = "";
        if(isset($_POST['name'])){
            if(empty($_POST['name'])){
                die("enter a valid name and price");
            }else{
                $theSefer = $_POST['name'];
            }
        }      
    include 'filterController.php';    
    include 'models/deleteModel.php';   
    //include 'views/deleteView.php';
    include 'views/homeView.php';     
    $deleteView = new DeleteView();
    $deleteView->specialPage();

?>