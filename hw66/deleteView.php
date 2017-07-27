
<?php
     include 'top.php';
?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Delete Seforim Form</h1>
        </div>            
        <form class="form-inline"  method="post">
          <div class="form-group">
            <label for="name">Sefer</label>
            <select class="form-control" id="name" name="name" >
               <?= $returnedSefer ?>
            </select>  
          </div>
          <button type="submit" class="btn btn-default">Delete</button>
        </form>
    </div>
<?php
 include 'bottom.php';
?>