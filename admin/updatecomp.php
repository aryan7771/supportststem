<?php
session_start();
require('config.php');
echo $CID=$_REQUEST['CID'];
if (!isset($_SESSION['ID'])){
     
      header("location:index.php");
     
     
 }
 else{

      if ($CID==""){
          
         header("location:managecomp.php");
     }
      
      else{

          $sql = "Select * FROM complaints WHERE ComplaintID = '$CID'";
          $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){

                     echo $ComplaintID =$row['ComplaintID'];
                    echo $CustomerID =$row['CustomerID'];
                    echo $MainServiceID =$row['MainServiceID'];
                   echo  $ComplaintDate =$row['ComplaintDate'];
                  echo   $AssignedTID =$row['AssignedTID'];
                  echo   $ComplaintRemarkUser =$row['ComplaintRemarkUser'];
                   echo  $ComplaintRemarkTech =$row['ComplaintRemarkTech'];
                   echo  $ComplaintCost =$row['ComplaintCost'];
                    echo $CompletionDate =$row['CompletionDate'];
                    echo $ComplaintStatus =$row['ComplaintStatus'];
                  }

     }
 }
 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
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
                        <li><a class="logout" href="login.php">Logout</a></li>
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

                        <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60">
                        <h5 class="centered">Rizwan Mansuri</h5>

                        <li class="mt">
                            <a href="index1.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a   href="javascript:;">
                                <i class="fa fa-male " ></i>
                                <span>Technician</span>
                            </a>
                            <ul class="sub">
                                <li ><a href="managetech.php">Manage</a></li>
                                <li ><a href="addtech.php">Add</a></li>
                                
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a class="active" href="javascript:;">
                                <i class="fa fa-exclamation-circle"></i>
                                <span>Complaints</span>
                            </a>
                            <ul class="sub">
                                <li><a href="managecomp.php">Manage</a></li>
                                <li class="active" ><a href="#">Add Complain</a></li>
                                
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a  href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span>Customer</span>
                            </a>
                            <ul class="sub">
                                <li><a href="Managecust.php">Manage</a></li>
                                <li ><a href="addcust.php">Add</a></li>
                            
                            </ul>
                        </li>
                            <li class="sub-menu">
                            <a  href="javascript:;">
                                <i class="fa fa-cog"></i>
                                <span>Services</span>
                            </a>
                            <ul class="sub">
                                <li ><a href="managemain.php">Manage Main</a></li>
                                <li><a href="addmain.php">Add Main</a></li>
                                
                                

                            
                            </ul>
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
          	<h3><i class="fa "></i> Update Complaint</h3>
				<!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">

                                <form class="form-horizontal style-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="form-group" style="display:none;">
                                        <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ComplaintID" style="display:none;"  value="<?php echo $ComplaintID?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Customer</label>
                                        <div class="col-sm-10">
                                            <select name="Customer" class="form-control" required="required">
                                            <?php
                                            $sql="Select * from customers where CustomerID='$CustomerID'";
                                            $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){
                  $FirstName = $row['FirstName'];
                  $LastName = $row['LastName'];
                  $CustomerID = $row['CustomerID'];

                 echo"<option value='$CustomerID' >".$FirstName." ".$LastName."</option>";
                  }
                                            ?>
                                                
                                               
                                            </select>
                                        </div>
                                    </div>
<div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Main Service</label>
                                        <div class="col-sm-10">
                                            
                                            
                                            <select name="MainService"  class="form-control" required="required">
                                                <?php
                
                
                
                  $sql = "SELECT * FROM mainservices";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                
                 
                  while($row = mysql_fetch_array($result)){
                
                
                 $MainServiceID    = $row['MainServiceID'];
                  $MainServiceName    = $row['MainServiceName'];
                  $MainServiceDesc     = $row['MainServiceDesc'];
                  $MainServiceStatus = $row['MainServiceStatus'];
                 
                echo "<option value='$MainServiceID'>$MainServiceName</option>";
                
                    
                } 
                
                
                
                
                
            ?>
                                               
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="Date"  value="<?php echo $ComplaintDate;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Technician</label>
                                        <div class="col-sm-10">
                                            <select name="Technician" class="form-control" required="required">
                                                <option value="" >Please Select User</option>
                                                <?php
                                                
                  $sql = "SELECT * FROM technician";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                
                 
                  while($row = mysql_fetch_array($result)){
                
                
                 $TechnicianID    = $row['UserID'];
                 $FirstName    = $row['FirstName'];
                 $LastName     = $row['LastName'];
                 $UserName     = $row['UserName'];
                 
                
                 
                echo "<option value='$TechnicianID'>".$FirstName." ".$LastName." | ".$UserName."</option>";
                
                    
                } 
                
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">User Remark</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="UserRemark"> <?php echo $ComplaintRemarkUser; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Technician Remark</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="TechRemark"><?php echo $ComplaintRemarkTech; ?> </textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Cost</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Cost" value="<?php echo $ComplaintCost;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Completion Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="CompletionDate" value="<?php echo $CompletionDate;?>"></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="cityId" class="form-control" name="Status" required="required">
                                            <option value="">Please Select Status</option>
                                               
                                                <option value="Pending">Pending</option>
                                                <option value="Solved">Solved</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                             <button type="submit" class="btn btn-theme" name="Submit">Submit</button>
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
  if(isset($_POST['Submit'])){

 $Customer = $_POST['Customer'];
 $Date = $_POST['Date'];
 $Technician = $_POST['Technician'];
 $UserRemark = $_POST['UserRemark'];
 $TechRemark = $_POST['TechRemark'];
 $Cost = $_POST['Cost'];
 $CompletionDate = $_POST['CompletionDate'];
 $Status = $_POST['Status'];
 $MainService = $_POST['MainService'];
 $ComplaintID = $_POST['ComplaintID'];
if ($Customer==""){echo '<script>alert("Please Select Customer");</script>';}
 else if($MainService==""){echo '<script>alert("Please Select Service");</script>';}
  else if($Date==""){echo '<script>alert("Please Select Date");</script>';}
  else if($Technician==""){echo '<script>alert("Please Tssign Technician.");</script>';}
  //else if($UserRemark==""){echo '<script>alert("Please Enter Username");</script>';}
  else if($TechRemark==""){echo '<script>alert("Please Enter Technician Remark");</script>';}
  else if($Cost==""){echo '<script>alert("Please Enter Cost");</script>';}
  //else if($CompletionDate==""){echo '<script>alert("Please Enter Password");</script>';}
  else if($Status==""){echo '<script>alert("Please Select Status");</script>';}

else{
echo $sql="UPDATE complaints SET CustomerID='$Customer',MainServiceID='$MainService',ComplaintDate='$Date',AssignedTID='$Technician',ComplaintRemarkUser='$UserRemark',ComplaintRemarkTech='$TechRemark',ComplaintCost='$Cost',CompletionDate='$CompletionDate',ComplaintStatus='$Status' WHERE ComplaintID='$ComplaintID'";
mysql_query($sql)or die(mysql_error());
echo '<script type="text/javascript">
           window.location = "http://www.samasyaniwaran.com/app/admin/managecomp.php"
      </script>';
}

  }
  //echo $CustomerID = $_POST['CustomerID'];
  
  ?>
</html>
