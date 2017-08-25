<?php
     
     include_once 'mainView.php';

     class OrderView extends MainView{

        function specialPage(){
          include 'orderView.php';
        }

    }


    class DeleteView extends MainView{
        
        function specialPage(){
            include 'deleteView.php';
        }
        
    }


    class InsertView extends MainView{
        
        function specialPage(){
            include 'insertView.php';
        }
    }

?>