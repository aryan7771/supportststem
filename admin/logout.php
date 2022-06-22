<?php
   session_start();
   session_unset(); 
   session_destroy();
    //echo"Session Variable Test ".$_SESSION["ID"];
    header("location:index.php");
   
?>