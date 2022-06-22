<?php
session_start();
require('config.php');
if (!isset($_SESSION['UID'])){
    //echo $_SESSION['UID'];
     header("location:index.php");
     
     
 }
 else {
      $UID =$_SESSION['UID'];
      
 $sql = "Select * FROM technician WHERE UserID = '$UID'";
                  $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){
                
                 $UserID    = $row['UserID'];
                $UserName    = $row['UserName'];
                $FirstName    = $row['FirstName'];
               $LastName     = $row['LastName'];
               $Mobile = $row['Mobile'];
               
               $Status    = $row['UserStatus'];
               $CustomerID    = $row['CustomerID'];
               $Country    = $row['Country'];
               $Pincode   = $row['Pincode'];
               $City   = $row['City'];
               $State   = $row['State'];
               $Password    = $row['Password'];
               $Address   = $row['Address'];
               $Email    = $row['Email'];
              
             
    
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

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.php" class="logo"><b>Samasya Niwaran</b></a>
                <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                         <h5 class="centered">Hi, <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h5>

                        <li class="mt">
                            <a   href="index1.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Complaints</span>
                            </a>
                        </li>
                            <li class="mt">
                            <a  class="active" href="profile.php">
                                <i class="fa fa-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa "></i> Update Profile</h3>
				<!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">

                                <form class="form-horizontal style-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="form-group" style="display:none;">
                                        
                                        
                                            
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="FirstName" value="<?php echo $FirstName; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="LastName" value="<?php echo $LastName; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Mobile" value="<?php echo $Mobile;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="UserName" value="<?php echo $UserName;?>" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Email" value="<?php echo $Email;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-theme" name="submit" >Submit</button>
                                        </div>
                                    </div>
                                   


                                </form>
                            </div>
                        </div><!-- col-lg-12-->
                    </div><!-- /row -->
                    <!-- INLINE FORM ELELEMNTS -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
       <footer class="site-footer">
                <div style="text-align: center">
              
                    <a href="https://www.techyhood.com/">Techyhood Software Solutions</a>
                </div>
            </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
   
  </script>

  </body>
  <?php
   
  if(isset($_POST['submit'])){
   echo $UID;
  
   $FirstName=$_POST["FirstName"];
   $LastName=$_POST["LastName"];
   $Email=$_POST["Email"];
   $Mobile=$_POST["Mobile"];

    if ($FirstName==""){echo '<script>alert("Please Enter First Name");</script>';}
  else if($LastName==""){echo '<script>alert("Please Enter Last Name");</script>';}
  else if($Mobile==""){echo '<script>alert("Please Enter Mobile No.");</script>';}
  else if($Email==""){echo '<script>alert("Please Enter Email");</script>';}

  else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) { echo '<script>alert("Please Enter Valid Email Address");</script>';}
elseif(preg_match('/^[0-9]{10}$/', $Mobile)) {
    
    echo $sql1 = "UPDATE technician SET FirstName='$FirstName', LastName='$LastName',Mobile='$Mobile', Email='$Email' Where UserID='$UID'";
    $result1 = mysql_query($sql1)or die(mysql_error()); 
   $sql = "Select * FROM technician WHERE UserID = '$UID'";
                  $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){
                       $_SESSION['fname']    = $row['FirstName'];
                       $_SESSION['lname']= $row['LastName'];


                  }
                  
echo '<script type="text/javascript">
           window.location = "http://www.samasyaniwaran.com/app/technician/index1.php"
      </script>';
   
    }
   else{
    
    echo '<script>alert("Please Enter Valid Mobile No.");</script>';

   }
  
  
  
  
  }
  ?>
</html>
