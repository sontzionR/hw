<?php

include "top.php";

if(isset($_GET['month'])){
$month= $_GET['month'];
}else{
    die;
};
if(isset($_GET['year'])){
$year= $_GET['year'];
}
else{
  die;
};



function daysInMonth($month,$year){
    global $months;
    $days="";
    foreach($months as $key=>$value)
    if($month == $key && $month !== "Feburary"){
       $days = $value;
     }
    elseif($month=="Feburary"){
       if(($year % 4 === 0) && ($year % 100 !== 0) || ($year % 400 === 0)){
        $days= 29;
      }else{
        $days = 28;
      } 
    } 
return $days;
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
            <h1>The Answer</h1>
        </div>            
         <div class="well"><?= daysInMonth($month,$year)?></div>
    </div>
</body>
</html>  