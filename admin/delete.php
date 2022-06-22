<?php
session_start();
require('config.php');
$TID=$_REQUEST['TID'];
$TNAM=$_REQUEST['TNAM'];
$MID=$_REQUEST['MID'];
$MNAM=$_REQUEST['MNAM'];
$SID=$_REQUEST['SID'];
$SNAM=$_REQUEST['SNAM'];
$CID=$_REQUEST['CID'];
$CNAM=$_REQUEST['CNAM'];
$COID=$_REQUEST['COID'];
$CONAM=$_REQUEST['CONAM'];
if (!isset($_SESSION['ID'])){
     
      header("location:index.php");
     
     
 }
 else if (isset ($TID)&&isset ($TNAM)){
      
 $sql = "DELETE FROM technician WHERE UserID = '$TID' AND UserName='$TNAM'";
                  $result = mysql_query($sql)or die(mysql_error());      
             header ("Location: managetech.php");
    
     }
     
     else if(isset ($MID)&&isset($MNAM)){
         
         $sql = "DELETE FROM mainservices WHERE MainServiceID = '$MID' AND MainServiceName='$MNAM'";
                   $result = mysql_query($sql)or die(mysql_error()); 
                  if ($result==1){
                      $sql = "DELETE FROM subservices WHERE MainServiceID = '$MID'";
                   $result = mysql_query($sql)or die(mysql_error()); 
                      
                  }
            header ("Location: managemain.php");
         
     }
     else if(isset ($SID)&&isset($SNAM)){
         
          $sql = "DELETE FROM subservices WHERE SubServiceID = '$SID' AND SubServiceName='$SNAM'";
                  $result = mysql_query($sql)or die(mysql_error());      
             header ("Location: managesub.php");
         
     }
     
      else if(isset ($CID)&&isset($CNAM)){
         
          $sql = "DELETE FROM customers WHERE CustomerID = '$CID' AND UserName='$CNAM'";
                 $result = mysql_query($sql)or die(mysql_error());    
                 $sql = "DELETE FROM complaints WHERE CustomerID = '$CID'";
                 $result = mysql_query($sql)or die(mysql_error());  

             header ("Location: managecust.php");
         
     }
     else if(isset ($COID)&&isset($CONAM)){
         
          $sql = "DELETE FROM complaints WHERE ComplaintID = '$COID' AND CustomerID='$CONAM'";
                 $result = mysql_query($sql)or die(mysql_error());      
             header ("Location: managecomp.php");
         
     }
 
 
 
 
 
?>
