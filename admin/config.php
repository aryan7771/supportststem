<?php  


	$conn = mysql_connect('localhost', 'samasyan_live', '=wvneFq)g&1E',true);
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
    else{
       // echo"success";
    }
    
    
mysql_select_db("samasyan_live", $conn);

   
?>