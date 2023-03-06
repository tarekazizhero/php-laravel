<?php
     require "bank.php";

     class bar
     {
        use bank;

     }
     $ob=new bar;
     $ob->abc();
     echo "<br>";
     $ob->efg();
?>
<!-- 
    1.jehetu php oop te amra multiple inheritance a kaj korte pari na 
    tai amader trait bebohar kore ,,multiple class er kaj korte pari.

    ->