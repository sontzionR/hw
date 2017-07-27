<?php
     include 'top.php';
?>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Add to my Seforim inventory </h1>
        </div>            
        <form class="form-inline" method="POST">
          <div class="form-group">
            <label for="name">Sefer Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="Price">Sefer Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
           <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
          </div> 
          <button type="submit" class="btn btn-default">add sefer</button>
        </form>
    </div>
<?php
 include 'bottom.php';
?>
