<?php  //Start the Session
session_start();
require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted

if (isset($_SESSION['ID'])) {

  header("location:index1.php");
}

if (isset($_POST['UserName'])) {

  $myusername = $_POST['UserName'];
  $mypassword = $_POST['Password'];
  $sql = "SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
  $result = mysql_query($sql);

  // mysql_num_row is counting table row
  $count = mysql_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if ($count == 1) {

    // Register $myusername, $mypassword and redirect to file "login_success.php"

    while ($row = mysql_fetch_array($result)) {


      $_SESSION["ID"] = $row['ID'];

      header("location:index1.php");
    }
  } else {
    echo '<script>alert("Wrong Username or Password");</script>';
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

    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

    <div id="login-page">
        <div class="container">


            <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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



</body>

</html>