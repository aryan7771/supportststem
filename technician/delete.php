<?php
session_start();
require('config.php');
$UID=$_REQUEST['UID'];
$CID=$_REQUEST['CID'];


if (!isset($_SESSION['UID'])){
     
      header("location:index.php");
     
     
 }
 else if (isset ($UID)&&isset ($CID)){
      
 echo $sql = "DELETE FROM complaints WHERE ComplaintID = '$CID' AND CustomerID='$UID'";
                echo  $result = mysql_query($sql)or die(mysql_error());      
            header ("Location: index1.php");
    
     }
     
    
 
 
 
 
 
?>
