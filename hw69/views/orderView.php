<?php
     //include 'top.php';    
     

?>
     

    <div class="container">
        <div class="jumbotron text-center">
            <h1>Seforim Order Form</h1>
        </div>
       <?php include 'filterView.php';?>
        <div>           
        <form class="form-inline"  method="get">
          <div class="form-group">
            <label for="name">Sefer</label>
            <select class="form-control" id="name" name="name" >
               <?= $returnedSefer ?>
            </select>  
          </div>
          <button type="submit" class="btn btn-primary">Proceed to checkout</button>
        </form>
        </div>
        <?php if(isset($_GET['name'])): ?>
        <div class="well col-sm-3"><?= $selectedReturnedSefer ." = ". "$".number_format($seferPrice,2) ?></div>
        <?php endif ?>
    </div>
<?php

 //include 'bottom.php';
?>