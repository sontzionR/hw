<?php
    include 'filterController.php';
    include 'models/orderModel.php';
    //include 'views/orderView.php';
    include 'views/homeView.php';     
    $orderView = new OrderView();
    $orderView->specialPage();
   

?>