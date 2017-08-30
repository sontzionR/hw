<?php
     
      abstract class MainView{


        abstract function specialPage();
            
             public function createPage(){

                     include 'top.php';
                     $this->specialPage();
                     include 'bottom.php';
             }

             
      }   

?>