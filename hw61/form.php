<?php
include "top.php";

// print_r($months);
function generateMonths($months){
  $returnedMonth = "";
  foreach ($months as $key=>$value) {
      $returnedMonth .= "<option>" . $key . "</option>"; 
  }
  return $returnedMonth;
};

function generateYears(){
  $returnedYear = "";
  for ($year=1582;$year < 2582;$year++) {
      $returnedYear .= "<option>" . $year . "</option>"; 
  }
  return $returnedYear;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>How Many Days</h1>
        </div>            
        <form class="form-inline" action="returnedForm.php" method="get">
          <div class="form-group">
            <label for="month">month</label>
            <select class="form-control" id="month" name="month" >
               <?= generateMonths($months) ?>
            </select>  
          </div>
          <div class="form-group">
            <label for="year">Year</label>
            <!--<input type="number" class="form-control" id="year" min="1900" max="9999" placeholder="2000" name="year">-->
            <select class="form-control" id="year" name="year" min="1582" max="2582" placeholder="2000" >
               <?= generateYears() ?>
            </select>  
          </div>
          <button type="submit" class="btn btn-default">Generate</button>
        </form>
    </div>
</body>
</html>  
   