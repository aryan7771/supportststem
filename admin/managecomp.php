<?php
session_start();
require('config.php');
if (!isset($_SESSION['ID'])){
     
      header("location:index.php");
     
     
 }





 function GetComplaints(){
     
     

                              $sql = "SELECT * FROM complaints";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                $sr=0;
                 
                  while($row = mysql_fetch_array($result)){
                      
                      $ComplaintID    = $row['ComplaintID'];
                      $CustomerID    = $row['CustomerID'];
                      $MainServiceID    = $row['MainServiceID'];
                      $ComplaintDate    = $row['ComplaintDate'];
                      $AssignedTID    = $row['AssignedTID'];
                      $ComplaintRemarkUser    = $row['ComplaintRemarkUser'];
                      $ComplaintRemarkTech    = $row['ComplaintRemarkTech'];
                      $ComplaintCost    = $row['ComplaintCost'];
                      $CompletionDate    = $row['CompletionDate'];
                      $ComplaintStatus    = $row['ComplaintStatus'];
                      $sr++;
                      
                  echo "<tr>";
                  echo"<td>$sr</td>";
                  $sqlc = "SELECT * FROM customers where CustomerID='$CustomerID'";
                  $resultc = mysql_query($sqlc)or die(mysql_error());
                  while($rowc = mysql_fetch_array($resultc)){ $FirstName=$rowc['FirstName']; $LastName=$rowc['LastName'];$Mobile=$rowc['Mobile']; $State=$rowc['State'];$City=$rowc['City'];$Address=$rowc['Address'];
                  
                  echo"<td class='col-md-2'>".$FirstName." ".$LastName." </br>".$Mobile."</br>".$State." ".$City."</br>".$Address." </td>";
                  
                  }
                  $sqls = "SELECT * FROM mainservices where MainServiceID='$MainServiceID'";
                  $results = mysql_query($sqls)or die(mysql_error());
                  while($rows = mysql_fetch_array($results)){ $MainServiceName=$rows['MainServiceName'];
                  
                  echo"<td>$MainServiceName</td>";
                  
                  }
                  
                  
                  echo"<td class='col-md-1'>$ComplaintDate</td>";
                  echo"<td class='col-md-1'>$CompletionDate</td>";
                  echo"<td>$ComplaintRemarkUser</td>";
                  echo"<td>$ComplaintRemarkTech</td>";
                  $sqlt = "SELECT * FROM technician where UserID='$AssignedTID'";
                  $resultt = mysql_query($sqlt)or die(mysql_error());
                  while($rowt = mysql_fetch_array($resultt)){ $FirstName=$rowt['FirstName'];$LastName=$rowt['LastName'];
                  
                   echo"<td>".$FirstName." ".$LastName."</td>";
                  
                  }
                 
                  echo"<td class='col-md-1'>$ComplaintCost</td>";
                  echo"<td class='col-md-1'>$ComplaintStatus</td>";
                  echo"<td><a href='updatecomp.php?CID=$ComplaintID' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a><a href='delete.php?COID=$ComplaintID&CONAM=$CustomerID' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></a></td>";
                  echo"</tr>";
                              
                      
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
                                <li><a href="addtech.php">Add</a></li>
                                
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a  class="active"href="javascript:;">
                                <i class="fa fa-exclamation-circle"></i>
                                <span>Complaints</span>
                            </a>
                            <ul class="sub">
                                <li class="active"><a href="managecomp.php">Manage</a></li>
                                <li><a href="addcomp.php">Add</a></li>
                                
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a  href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span>Customer</span>
                            </a>
                            <ul class="sub">
                                <li ><a href="Managecust.php">Manage</a></li>
                                <li><a href="addcust.php">Add</a></li>
                            
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
          	<h3><i class="fa "></i> Manage Complaints</h3>
				<!-- row -->
              <form class="form-horizontal style-form"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                   
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="Date">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="Status" class="form-control" >
                                                <option value="">Please Select</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Solved">Solved</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Technician</label>
                                        <div class="col-sm-10">
                                            <select name="Technician" class="form-control" >
                                                <option value="">Please Select</option>
                                               <?php
                                                   $sql = "SELECT * FROM technician";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                
                 
                  while($row = mysql_fetch_array($result)){
                
                
                 $UserName    = $row['UserName'];
                  $FirstName    = $row['FirstName'];
                  $LastName     = $row['LastName'];
              
                  $Role    = $row['TechnicianRole'];
                  
                  $UserID    = $row['UserID'];
                  
                  echo "<option value='$UserID'>".$FirstName." ".$LastName." | ".$UserName." | ".$Role."</option>";
                  
                  }

                                               ?>
                                                </select>
                                        </div>
                                    </div>
                                   
                                   <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                             <button type="submit" class="btn btn-theme form-control" name="Submit">Submit</button>
                                        </div>
                                    </div>


                                </form>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	 
                              <thead>
                              <tr>
                                  <th>Index</th>
                                  <th>User Details</th>
                                  <th>Main Service</th>
                                  <th>Complain Date</th>
                                  <th>Completion Date</th>
                                  <th>User Remark</th>
                                  <th>Technician Remark</th>
                                  <th>Assigned</th>
                                  <th>Cost</th>
                                  <th>Status</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                
if (isset($_POST['Submit']))
{
    echo $Date=$_POST['Date'];
    echo $Status =$_POST['Status'];
    echo $Technician =$_POST['Technician'];
    if ($Date!=""){
        
    



                             echo $sql = "SELECT * FROM complaints where ComplaintDate='$Date'";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                $sr=0;
                 
                  while($row = mysql_fetch_array($result)){
                      
                      $ComplaintID    = $row['ComplaintID'];
                      $CustomerID    = $row['CustomerID'];
                      $MainServiceID    = $row['MainServiceID'];
                      $ComplaintDate    = $row['ComplaintDate'];
                      $AssignedTID    = $row['AssignedTID'];
                      $ComplaintRemarkUser    = $row['ComplaintRemarkUser'];
                      $ComplaintRemarkTech    = $row['ComplaintRemarkTech'];
                      $ComplaintCost    = $row['ComplaintCost'];
                      $CompletionDate    = $row['CompletionDate'];
                      $ComplaintStatus    = $row['ComplaintStatus'];
                      $sr++;
                      
                  echo "<tr>";
                  echo"<td>$sr</td>";
                  $sqlc = "SELECT * FROM customers where CustomerID='$CustomerID'";
                  $resultc = mysql_query($sqlc)or die(mysql_error());
                  while($rowc = mysql_fetch_array($resultc)){ $FirstName=$rowc['FirstName']; $LastName=$rowc['LastName'];$Mobile=$rowc['Mobile']; $State=$rowc['State'];$City=$rowc['City'];$Address=$rowc['Address'];
                  
                  echo"<td class='col-md-2'>".$FirstName." ".$LastName." </br>".$Mobile."</br>".$State." ".$City."</br>".$Address." </td>";
                  
                  }
                  $sqls = "SELECT * FROM mainservices where MainServiceID='$MainServiceID'";
                  $results = mysql_query($sqls)or die(mysql_error());
                  while($rows = mysql_fetch_array($results)){ $MainServiceName=$rows['MainServiceName'];
                  
                  echo"<td>$MainServiceName</td>";
                  
                  }
                  
                  
                  echo"<td class='col-md-1'>$ComplaintDate</td>";
                  echo"<td class='col-md-1'>$CompletionDate</td>";
                  echo"<td>$ComplaintRemarkUser</td>";
                  echo"<td>$ComplaintRemarkTech</td>";
                  $sqlt = "SELECT * FROM technician where UserID='$AssignedTID'";
                  $resultt = mysql_query($sqlt)or die(mysql_error());
                  while($rowt = mysql_fetch_array($resultt)){ $FirstName=$rowt['FirstName'];$LastName=$rowt['LastName'];
                  
                   echo"<td>".$FirstName." ".$LastName."</td>";
                  
                  }
                 
                  echo"<td class='col-md-1'>$ComplaintCost</td>";
                  echo"<td class='col-md-1'>$ComplaintStatus</td>";
                  echo"<td><a href='updatecomp.php?CID=$ComplaintID' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a><a href='delete.php?COID=$ComplaintID&CONAM=$CustomerID' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></a></td>";
                  echo"</tr>";
                              
                      
                  
                  
}
        
    }
    elseif ($Status!=""){
        echo $sql = "SELECT * FROM complaints where ComplaintStatus='$Status'";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                $sr=0;
                 
                  while($row = mysql_fetch_array($result)){
                      
                      $ComplaintID    = $row['ComplaintID'];
                      $CustomerID    = $row['CustomerID'];
                      $MainServiceID    = $row['MainServiceID'];
                      $ComplaintDate    = $row['ComplaintDate'];
                      $AssignedTID    = $row['AssignedTID'];
                      $ComplaintRemarkUser    = $row['ComplaintRemarkUser'];
                      $ComplaintRemarkTech    = $row['ComplaintRemarkTech'];
                      $ComplaintCost    = $row['ComplaintCost'];
                      $CompletionDate    = $row['CompletionDate'];
                      $ComplaintStatus    = $row['ComplaintStatus'];
                      $sr++;
                      
                  echo "<tr>";
                  echo"<td>$sr</td>";
                  $sqlc = "SELECT * FROM customers where CustomerID='$CustomerID'";
                  $resultc = mysql_query($sqlc)or die(mysql_error());
                  while($rowc = mysql_fetch_array($resultc)){ $FirstName=$rowc['FirstName']; $LastName=$rowc['LastName'];$Mobile=$rowc['Mobile']; $State=$rowc['State'];$City=$rowc['City'];$Address=$rowc['Address'];
                  
                  echo"<td class='col-md-2'>".$FirstName." ".$LastName." </br>".$Mobile."</br>".$State." ".$City."</br>".$Address." </td>";
                  
                  }
                  $sqls = "SELECT * FROM mainservices where MainServiceID='$MainServiceID'";
                  $results = mysql_query($sqls)or die(mysql_error());
                  while($rows = mysql_fetch_array($results)){ $MainServiceName=$rows['MainServiceName'];
                  
                  echo"<td>$MainServiceName</td>";
                  
                  }
                  
                  
                  echo"<td class='col-md-1'>$ComplaintDate</td>";
                  echo"<td class='col-md-1'>$CompletionDate</td>";
                  echo"<td>$ComplaintRemarkUser</td>";
                  echo"<td>$ComplaintRemarkTech</td>";
                  $sqlt = "SELECT * FROM technician where UserID='$AssignedTID'";
                  $resultt = mysql_query($sqlt)or die(mysql_error());
                  while($rowt = mysql_fetch_array($resultt)){ $FirstName=$rowt['FirstName'];$LastName=$rowt['LastName'];
                  
                   echo"<td>".$FirstName." ".$LastName."</td>";
                  
                  }
                 
                  echo"<td class='col-md-1'>$ComplaintCost</td>";
                  echo"<td class='col-md-1'>$ComplaintStatus</td>";
                  echo"<td><a href='updatecomp.php?CID=$ComplaintID' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a><a href='delete.php?COID=$ComplaintID&CONAM=$CustomerID' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></a></td>";
                  echo"</tr>";
                              
                      
                  
                  
}
        
    }
    elseif($Technician!=""){
        
        echo $sql = "SELECT * FROM complaints where AssignedTID='$Technician'";
                  $result = mysql_query($sql)or die(mysql_error());
                
                
                $sr=0;
                 
                  while($row = mysql_fetch_array($result)){
                      
                      $ComplaintID    = $row['ComplaintID'];
                      $CustomerID    = $row['CustomerID'];
                      $MainServiceID    = $row['MainServiceID'];
                      $ComplaintDate    = $row['ComplaintDate'];
                      $AssignedTID    = $row['AssignedTID'];
                      $ComplaintRemarkUser    = $row['ComplaintRemarkUser'];
                      $ComplaintRemarkTech    = $row['ComplaintRemarkTech'];
                      $ComplaintCost    = $row['ComplaintCost'];
                      $CompletionDate    = $row['CompletionDate'];
                      $ComplaintStatus    = $row['ComplaintStatus'];
                      $sr++;
                      
                  echo "<tr>";
                  echo"<td>$sr</td>";
                  $sqlc = "SELECT * FROM customers where CustomerID='$CustomerID'";
                  $resultc = mysql_query($sqlc)or die(mysql_error());
                  while($rowc = mysql_fetch_array($resultc)){ $FirstName=$rowc['FirstName']; $LastName=$rowc['LastName'];$Mobile=$rowc['Mobile']; $State=$rowc['State'];$City=$rowc['City'];$Address=$rowc['Address'];
                  
                  echo"<td class='col-md-2'>".$FirstName." ".$LastName." </br>".$Mobile."</br>".$State." ".$City."</br>".$Address." </td>";
                  
                  }
                  $sqls = "SELECT * FROM mainservices where MainServiceID='$MainServiceID'";
                  $results = mysql_query($sqls)or die(mysql_error());
                  while($rows = mysql_fetch_array($results)){ $MainServiceName=$rows['MainServiceName'];
                  
                  echo"<td>$MainServiceName</td>";
                  
                  }
                  
                  
                  echo"<td class='col-md-1'>$ComplaintDate</td>";
                  echo"<td class='col-md-1'>$CompletionDate</td>";
                  echo"<td>$ComplaintRemarkUser</td>";
                  echo"<td>$ComplaintRemarkTech</td>";
                  $sqlt = "SELECT * FROM technician where UserID='$AssignedTID'";
                  $resultt = mysql_query($sqlt)or die(mysql_error());
                  while($rowt = mysql_fetch_array($resultt)){ $FirstName=$rowt['FirstName'];$LastName=$rowt['LastName'];
                  
                   echo"<td>".$FirstName." ".$LastName."</td>";
                  
                  }
                 
                  echo"<td class='col-md-1'>$ComplaintCost</td>";
                  echo"<td class='col-md-1'>$ComplaintStatus</td>";
                  echo"<td><a href='updatecomp.php?CID=$ComplaintID' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a><a href='delete.php?COID=$ComplaintID&CONAM=$CustomerID' class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></a></td>";
                  echo"</tr>";
                              
                      
                  
                  
}
    }
}
else{
    
     GetComplaints();

                  
}
                              ?>
                             
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

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
</html>
