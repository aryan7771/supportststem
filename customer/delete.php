<?php
session_start();
require('config.php');
 $CID=$_REQUEST['CID'];
$CCID=$_REQUEST['CCID'];


if (!isset($_SESSION['CID'])){
     
      header("location:index.php");
     
     
 }
 else if (isset ($CCID)&&isset ($CID)){
      
 echo $sql = "DELETE FROM complaints WHERE ComplaintID = '$CCID' AND CustomerID='$CID'";
                echo  $result = mysql_query($sql)or die(mysql_error());      
            header ("Location: index1.php");
    
     }
     
    
 
 
 
 
 
?>
