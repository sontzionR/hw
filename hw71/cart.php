<?php
$cs = "mysql:host=localhost;dbname=seforimstore";
$user = "test";
$password = 'password';

try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO($cs, $user, $password, $options);
} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}

try {
    $query = "SELECT id, name FROM seforim";
    $results = $db->query($query);
    $products = $results->fetchAll(PDO::FETCH_ASSOC);
    $results->closeCursor();

} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
  
class Cart {
    
        public function __construct() {      
            session_start();
            if(empty($_SESSION['cart'])) {   
                $_SESSION['cart'] = [];
             
            }
        }
 
        public function addItem($item, $quantity) {
    
            if(!empty($_SESSION['cart'][$item])) {  
                $quantity += $_SESSION['cart'][$item];   
            } 
            $_SESSION['cart'][$item] = $quantity;   
        }
 
        public function getItems() {   
            return $_SESSION['cart'];    
        } 
       
    }   
    if(isset($_GET['name']) && isset($_GET['quantity']) && is_numeric($_GET['quantity'])){
        
           $name = $_GET['name'] ;
           $quantity = $_GET['quantity'];     
           $cart = new Cart();     
           $cart->addItem($name, $quantity);    
        }
        
      
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  <div class="jumbotron">
        <div class="container text-center">
            <h1>My Store</h1>
        </div>
    </div>
    <div class="container ">
    <form class="form-inline">
        <label for="name" class="form-group col-sm-4 ">product</label>
           <select  id="name" name="name" required>
               <?php foreach($products as $product) :?>
                    <option><?=$product['name']?></option> 
                <?php endforeach ?>
            </select>
       
            <label for="quantity" class="form-group row col-sm-4 ">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity"min=0 placeholder="0">         
     <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
    <div class="col-sm-3">
    <ul class="list-group">
        <li class="list-group-item active">Cart</li>
        <?php if(!empty($_SESSION['cart'])) : ?>
        <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
        <li class="list-group-item justify-content-between">Item: <?=$key?> Quantity: <?=$value?></li>
    </ul>       
       <?php endforeach ?>
         
        <?php else:?>
            <h2>Your cart is empty<h2>
        <?php endif ?>
   
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>