<?php
session_start();
require('config.php');
 $CID=$_REQUEST['CID'];
if (!isset($_SESSION['UID'])){
     
      header("location:index.php");
     
     
 }
 else{

      if ($CID==""){
          
         header("location:index1.php");
     }
      
      else{

          $sql = "Select * FROM complaints WHERE ComplaintID = '$CID'";
          $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){

                      $ComplaintID =$row['ComplaintID'];
                     $CustomerID =$row['CustomerID'];
                     $MainServiceID =$row['MainServiceID'];
                     $ComplaintDate =$row['ComplaintDate'];
                     $AssignedTID =$row['AssignedTID'];
                     $ComplaintRemarkUser =$row['ComplaintRemarkUser'];
                     $ComplaintRemarkTech =$row['ComplaintRemarkTech'];
                     $ComplaintCost =$row['ComplaintCost'];
                     $CompletionDate =$row['CompletionDate'];
                     $ComplaintStatus =$row['ComplaintStatus'];
                  }

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
                            <a class="active"  href="index1.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Complaints</span>
                            </a>
                        </li>
                            <li class="mt">
                            <a  href="profile.php">
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
                                            
                                            <?php
                                            $sql="Select * from customers where CustomerID='$CustomerID'";
                                            $result = mysql_query($sql)or die(mysql_error());   
                  while($row = mysql_fetch_array($result)){
                  $FirstName = $row['FirstName'];
                  $LastName = $row['LastName'];
                  $CustomerID = $row['CustomerID'];

                 echo"<input class='form-control'  type='text' value='".$FirstName." ".$LastName."'  disabled>";
                  }
                                            ?>
                                                
                                               
                                            
                                        </div>
                                    </div>
<div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Main Service</label>
                                        <div class="col-sm-10">
                                            
                                            
                                          
                                                <?php
                
                
                
                  $sql = "Select * FROM complaints WHERE ComplaintID = '$ComplaintID'";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                
                 
                  while($row = mysql_fetch_array($result)){
                
                
                    $MainServiceID =$row['MainServiceID'];
                 
                       $sql = "Select * FROM mainservices WHERE MainServiceID = '$MainServiceID'";
                  $result = mysql_query($sql)or die(mysql_error());

                  while($row = mysql_fetch_array($result)){
                      $MainServiceName =$row['MainServiceName'];
                      
                       echo"<input class='form-control'  type='text' value='$MainServiceName'  disabled>"; }
                 
                    
                
                } 
                
                
                
                
                
            ?>
                                               
                                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="Date"  value="<?php echo $ComplaintDate;?>" disabled>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">User Remark</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="UserRemark" disabled> <?php echo $ComplaintRemarkUser; ?></textarea>
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
                                            <select id="cityId"  class="form-control" name="Status" required="required">
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
      echo $TechRemark = $_POST['TechRemark'];
 $Cost = $_POST['Cost'];
 $CompletionDate = $_POST['CompletionDate'];
 $Status = $_POST['Status'];
 $ComplaintID = $_POST['ComplaintID'];

      if ($TechRemark==""){echo '<script>alert("Please Enter Technician Remark");</script>';}
  else if($Cost==""){echo '<script>alert("Please Enter Cost");</script>';}
  else if($CompletionDate==""){echo '<script>alert("Please Enter Completion Date");</script>';}
  else if($Status==""){echo '<script>alert("Please Assign a Status");</script>';}
  else{
      echo $sql="UPDATE complaints SET ComplaintRemarkTech='$TechRemark',ComplaintCost='$Cost',CompletionDate='$CompletionDate',ComplaintStatus='$Status' WHERE ComplaintID='$ComplaintID'";
mysql_query($sql)or die(mysql_error());
echo '<script type="text/javascript">
           window.location = "http://www.samasyaniwaran.com/app/technician/index1.php"
      </script>';

  }








  }
  //echo $CustomerID = $_POST['CustomerID'];
  
  ?>
</html>
