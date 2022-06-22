<?php
session_start();
require('config.php');

if (!isset($_SESSION['UID'])){
     
      header("location:index.php");
     
     
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
              
              <div class="row">
                  
                  <div class="col-lg-12 ">
                  
                  	<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	 
                              <thead>
                              <tr>
                                  
                                  <th>Customer Details</th>
                                  <th>Service Type</th>
                                  <th>Date Registered</th>
                                 
                                  <th>Remarks Customer</th>
                                  <th>Remarks Technician</th>
                                  <th>Cost</th>
                                  <th>Status</th>
                                  
                                  
                              </tr>
                              </thead>
                              
                             
                              <tbody>
                              <?php
                              $sr=0;
                               $UID = $_SESSION['UID'];
                               $sql = "SELECT * FROM complaints where AssignedTID='$UID'";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                
                 
                  while($row = mysql_fetch_array($result)){
                
                
                 $ComplainID   = $row['ComplaintID'];
                 $CustomerID   = $row['CustomerID'];
                 $MainServiceID = $row['MainServiceID'];
                 $ComplaintDate = $row['ComplaintDate'];
                 $ComplaintRemarkUser  = $row['ComplaintRemarkUser'];
                 $ComplaintRemarkTech  = $row['ComplaintRemarkTech'];
                 $ComplaintCost   = $row['ComplaintCost'];
                 $ComplaintStatus   = $row['ComplaintStatus'];
                 
                
                 echo"<tr>";
                //echo "<td >".$sr."</td><td style='display:none;'>".$Subscription_ID."</td><td style='display:none;'>".$ID."</td><td >".$Domain."</td><td >".$Ftp_Host."</td><td >".$Ftp_User."</td><td ><a class='btnn btn-2 btn-2h' href='backftp.php?ID=$ID'  style='width:73px'> Backup </a><a class='btnn btn-2 btn-2h' id='secure.php?ID=$ID&Status=allow' onClick='secure(this.id)' style='width:73px'> Allow </a><a class='btnn btn-2 btn-2h' id='secure.php?ID=$ID&Status=deny' onClick='secure(this.id)' style='width:73px'> Deny </a></td>";
                 
                   $sql1 = "SELECT * FROM customers where CustomerID='$CustomerID'";
                  $result1 = mysql_query($sql1)or die(mysql_error());
                   
                while($row1 = mysql_fetch_array($result1)){
                     $FirstName  = $row1['FirstName'];
                     $LastName  = $row1['LastName'];
                     $Mobile  = $row1['Mobile'];
                     $State  = $row1['State'];
                     $City  = $row1['City'];
                     $Address  = $row1['Address'];
                    echo " <td>".$FirstName." ".$LastName."<br>Mobile: ".$Mobile."<br>"
                            . "Address: ".$State."-".$City."-".$Address."</td>";
                }
                
                 $sql1 = "SELECT * FROM mainservices where MainServiceID='$MainServiceID'";
                  $result1 = mysql_query($sql1)or die(mysql_error());
                   
                while($row1 = mysql_fetch_array($result1)){
                     $MainServiceName    = $row1['MainServiceName'];
                    echo " <td>".$MainServiceName."</td>";
                }
                
                echo " <td>".$ComplaintDate."</td>";
                echo " <td>".$ComplaintRemarkUser."</td>";
                echo " <td>".$ComplaintRemarkTech."</td>";
                  echo " <td>".$ComplaintCost."</td>";
                echo " <td>".$ComplaintStatus."</td>";
                 echo "<td><a href='updatecomp.php?CID=$ComplainID' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a> </td>";
                         echo"</tr>" ;    
                 
                  }
                              
                              ?>
                             
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row mt -->	
                  
                      
                     
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

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
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
