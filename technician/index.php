<?php  //Start the Session
session_start();
 require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
 
 if (isset($_SESSION['UID'])){
     
      header("location:index1.php");
     
     
 }
 
 if(isset($_POST['UserName']))
    {
    
$myusername = $_POST['UserName'];
$mypassword = $_POST['Password'];
$sql="SELECT * FROM technician WHERE UserName='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

while($row = mysql_fetch_array($result)){
    
      $Status = $row['UserStatus'];
     $_SESSION["UID"]= $row['UserID']; 
     $_SESSION["fname"]= $row['FirstName']; 
     $_SESSION["lname"]= $row['LastName']; 
    
    
    }
    if ($Status=="Active"){
        header("location:index1.php");

    }
    else{
        
        echo '<script>alert("Your account is not active. Please contact support for more information.");</script>';

    } 

}
else {
echo '<script>alert("Wrong Username or Password");</script>';
}
    
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      
		      <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input name="UserName" type="text" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input name="Password" type="password" class="form-control" placeholder="Password">
		            <br>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		           
		
		        </div>
		
		         
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
   


  </body>
</html>
