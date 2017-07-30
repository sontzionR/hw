<?php
$action = "home";

if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// if(file_exists("controllers/" . $action . "Controller.php")) {
//     include "controllers/" . $action . "Controller.php";
// } else {
//     $errors[] = "Dont know how to $action";
//     include "views/errorView.php";
// }

switch($action) {
    case 'home':
        include 'controllers/orderController.php';
        exit;
    case 'insert':
        include 'controllers/insertController.php';
        exit;
    case 'delete':
        include 'controllers/deleteController.php';
        exit;    
    default:
        exit("Dont know how to $action");
    }
?>