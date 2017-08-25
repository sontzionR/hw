<?php
     
      abstract class MainView{


        abstract function specialPage();
            
             public function createPage(){

                     include 'top.php';
                     specialPage();
                     include 'bottom.php';
             }

             
      }   

?>