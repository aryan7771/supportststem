<?php
session_start();
require('config.php');
if (!isset($_SESSION['ID'])){
     
      header("location:index.php");
     
     
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

                        <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60">
                        <h5 class="centered">Rizwan Mansuri</h5>

                        <li class="mt">
                            <a href="index1.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a  class="active" href="javascript:;">
                                <i class="fa fa-male " ></i>
                                <span>Technician</span>
                            </a>
                            <ul class="sub">
                                <li ><a href="managetech.php">Manage</a></li>
                                <li class="active"><a href="addtech.php">Add</a></li>
                                
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-exclamation-circle"></i>
                                <span>Complaints</span>
                            </a>
                            <ul class="sub">
                                <li><a href="managecomp.php">Manage</a></li>
                                <li><a href="addcomp.php">Add</a></li>
                                
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span>Customer</span>
                            </a>
                            <ul class="sub">
                                <li><a href="Managecust.php">Manage</a></li>
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
          	<h3><i class="fa "></i> Add Technician</h3>
				<!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">

                                <form class="form-horizontal style-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="FirstName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="LastName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Mobile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="UserName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                            <select name="Country" class="form-control">
                                                <option value="India" selected>India</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">State</label>
                                        <div class="col-sm-10">
                                            <select id="stateId" class="form-control" name="State" required="required">
                                                <option value="Andaman and Nicobar Islands" stateid="1">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh" stateid="2">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh" stateid="3">Arunachal Pradesh</option>
                                                <option value="Assam" stateid="4">Assam</option>
                                                <option value="Bihar" stateid="5">Bihar</option>
                                                <option value="Chandigarh" stateid="6">Chandigarh</option>
                                                <option value="Chhattisgarh" stateid="7">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli" stateid="8">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu" stateid="9">Daman and Diu</option>
                                                <option value="Delhi" stateid="10">Delhi</option>
                                                <option value="Goa" stateid="11">Goa</option>
                                                <option value="Gujarat" stateid="12" selected>Gujarat</option>
                                                <option value="Haryana" stateid="13">Haryana</option>
                                                <option value="Himachal Pradesh" stateid="14">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" stateid="15">Jammu and Kashmir</option>
                                                <option value="Jharkhand" stateid="16">Jharkhand</option>
                                                <option value="Karnataka" stateid="17">Karnataka</option>
                                                <option value="Kenmore" stateid="18">Kenmore</option>
                                                <option value="Kerala" stateid="19">Kerala</option>
                                                <option value="Lakshadweep" stateid="20">Lakshadweep</option>
                                                <option value="Madhya Pradesh" stateid="21">Madhya Pradesh</option>
                                                <option value="Maharashtra" stateid="22">Maharashtra</option>
                                                <option value="Manipur" stateid="23">Manipur</option>
                                                <option value="Meghalaya" stateid="24">Meghalaya</option>
                                                <option value="Mizoram" stateid="25">Mizoram</option>
                                                <option value="Nagaland" stateid="26">Nagaland</option>
                                                <option value="Narora" stateid="27">Narora</option>
                                                <option value="Natwar" stateid="28">Natwar</option>
                                                <option value="Odisha" stateid="29">Odisha</option>
                                                <option value="Paschim Medinipur" stateid="30">Paschim Medinipur</option>
                                                <option value="Pondicherry" stateid="31">Pondicherry</option>
                                                <option value="Punjab" stateid="32">Punjab</option>
                                                <option value="Rajasthan" stateid="33">Rajasthan</option>
                                                <option value="Sikkim" stateid="34">Sikkim</option>
                                                <option value="Tamil Nadu" stateid="35">Tamil Nadu</option>
                                                <option value="Telangana" stateid="36">Telangana</option>
                                                <option value="Tripura" stateid="37">Tripura</option>
                                                <option value="Uttar Pradesh" stateid="38">Uttar Pradesh</option>
                                                <option value="Uttarakhand" stateid="39">Uttarakhand</option>
                                                <option value="Vaishali" stateid="40">Vaishali</option>
                                                <option value="West Bengal" stateid="41">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <select id="cityId" class="form-control" name="City" required="required">
                                                <option value="">Select City</option>
                                                <option value="Abrama" cityid="779">Abrama</option>
                                                <option value="Adalaj" cityid="780">Adalaj</option>
                                                <option value="Adityana" cityid="781">Adityana</option>
                                                <option value="Advana" cityid="782">Advana</option>
                                                <option value="Ahmedabad" cityid="783">Ahmedabad</option>
                                                <option value="Ahwa" cityid="784">Ahwa</option>
                                                <option value="Alang" cityid="785">Alang</option>
                                                <option value="Ambaji" cityid="786">Ambaji</option>
                                                <option value="Ambaliyasan" cityid="787">Ambaliyasan</option>
                                                <option value="Amod" cityid="788">Amod</option>
                                                <option value="Amreli" cityid="789">Amreli</option>
                                                <option value="Amroli" cityid="790">Amroli</option>
                                                <option value="Anand" cityid="791">Anand</option>
                                                <option value="Andada" cityid="792">Andada</option>
                                                <option value="Anjar" cityid="793">Anjar</option>
                                                <option value="Anklav" cityid="794">Anklav</option>
                                                <option value="Ankleshwar" cityid="795">Ankleshwar</option>
                                                <option value="Anklesvar INA" cityid="796">Anklesvar INA</option>
                                                <option value="Antaliya" cityid="797">Antaliya</option>
                                                <option value="Arambhada" cityid="798">Arambhada</option>
                                                <option value="Asarma" cityid="799">Asarma</option>
                                                <option value="Atul" cityid="800">Atul</option>
                                                <option value="Babra" cityid="801">Babra</option>
                                                <option value="Bag-e-Firdosh" cityid="802">Bag-e-Firdosh</option>
                                                <option value="Bagasara" cityid="803">Bagasara</option>
                                                <option value="Bahadarpar" cityid="804">Bahadarpar</option>
                                                <option value="Bajipura" cityid="805">Bajipura</option>
                                                <option value="Bajva" cityid="806">Bajva</option>
                                                <option value="Balasinor" cityid="807">Balasinor</option>
                                                <option value="Banaskantha" cityid="808">Banaskantha</option>
                                                <option value="Bansda" cityid="809">Bansda</option>
                                                <option value="Bantva" cityid="810">Bantva</option>
                                                <option value="Bardoli" cityid="811">Bardoli</option>
                                                <option value="Barwala" cityid="812">Barwala</option>
                                                <option value="Bayad" cityid="813">Bayad</option>
                                                <option value="Bechar" cityid="814">Bechar</option>
                                                <option value="Bedi" cityid="815">Bedi</option>
                                                <option value="Beyt" cityid="816">Beyt</option>
                                                <option value="Bhachau" cityid="817">Bhachau</option>
                                                <option value="Bhanvad" cityid="818">Bhanvad</option>
                                                <option value="Bharuch" cityid="819">Bharuch</option>
                                                <option value="Bharuch INA" cityid="820">Bharuch INA</option>
                                                <option value="Bhavnagar" cityid="821">Bhavnagar</option>
                                                <option value="Bhayavadar" cityid="822">Bhayavadar</option>
                                                <option value="Bhestan" cityid="823">Bhestan</option>
                                                <option value="Bhuj" cityid="824">Bhuj</option>
                                                <option value="Bilimora" cityid="825">Bilimora</option>
                                                <option value="Bilkha" cityid="826">Bilkha</option>
                                                <option value="Billimora" cityid="827">Billimora</option>
                                                <option value="Bodakdev" cityid="828">Bodakdev</option>
                                                <option value="Bodeli" cityid="829">Bodeli</option>
                                                <option value="Bopal" cityid="830">Bopal</option>
                                                <option value="Boria" cityid="831">Boria</option>
                                                <option value="Boriavi" cityid="832">Boriavi</option>
                                                <option value="Borsad" cityid="833">Borsad</option>
                                                <option value="Botad" cityid="834">Botad</option>
                                                <option value="Cambay" cityid="835">Cambay</option>
                                                <option value="Chaklasi" cityid="836">Chaklasi</option>
                                                <option value="Chala" cityid="837">Chala</option>
                                                <option value="Chalala" cityid="838">Chalala</option>
                                                <option value="Chalthan" cityid="839">Chalthan</option>
                                                <option value="Chanasma" cityid="840">Chanasma</option>
                                                <option value="Chandisar" cityid="841">Chandisar</option>
                                                <option value="Chandkheda" cityid="842">Chandkheda</option>
                                                <option value="Chanod" cityid="843">Chanod</option>
                                                <option value="Chaya" cityid="844">Chaya</option>
                                                <option value="Chenpur" cityid="845">Chenpur</option>
                                                <option value="Chhapi" cityid="846">Chhapi</option>
                                                <option value="Chhaprabhatha" cityid="847">Chhaprabhatha</option>
                                                <option value="Chhatral" cityid="848">Chhatral</option>
                                                <option value="Chhota Udepur" cityid="849">Chhota Udepur</option>
                                                <option value="Chikhli" cityid="850">Chikhli</option>
                                                <option value="Chiloda" cityid="851">Chiloda</option>
                                                <option value="Chorvad" cityid="852">Chorvad</option>
                                                <option value="Chotila" cityid="853">Chotila</option>
                                                <option value="Dabhoi" cityid="854">Dabhoi</option>
                                                <option value="Dadara" cityid="855">Dadara</option>
                                                <option value="Dahod" cityid="856">Dahod</option>
                                                <option value="Dakor" cityid="857">Dakor</option>
                                                <option value="Damnagar" cityid="858">Damnagar</option>
                                                <option value="Deesa" cityid="859">Deesa</option>
                                                <option value="Delvada" cityid="860">Delvada</option>
                                                <option value="Devgadh Baria" cityid="861">Devgadh Baria</option>
                                                <option value="Devsar" cityid="862">Devsar</option>
                                                <option value="Dhandhuka" cityid="863">Dhandhuka</option>
                                                <option value="Dhanera" cityid="864">Dhanera</option>
                                                <option value="Dhangdhra" cityid="865">Dhangdhra</option>
                                                <option value="Dhansura" cityid="866">Dhansura</option>
                                                <option value="Dharampur" cityid="867">Dharampur</option>
                                                <option value="Dhari" cityid="868">Dhari</option>
                                                <option value="Dhola" cityid="869">Dhola</option>
                                                <option value="Dholka" cityid="870">Dholka</option>
                                                <option value="Dholka Rural" cityid="871">Dholka Rural</option>
                                                <option value="Dhoraji" cityid="872">Dhoraji</option>
                                                <option value="Dhrangadhra" cityid="873">Dhrangadhra</option>
                                                <option value="Dhrol" cityid="874">Dhrol</option>
                                                <option value="Dhuva" cityid="875">Dhuva</option>
                                                <option value="Dhuwaran" cityid="876">Dhuwaran</option>
                                                <option value="Digvijaygram" cityid="877">Digvijaygram</option>
                                                <option value="Disa" cityid="878">Disa</option>
                                                <option value="Dungar" cityid="879">Dungar</option>
                                                <option value="Dungarpur" cityid="880">Dungarpur</option>
                                                <option value="Dungra" cityid="881">Dungra</option>
                                                <option value="Dwarka" cityid="882">Dwarka</option>
                                                <option value="Flelanganj" cityid="883">Flelanganj</option>
                                                <option value="GSFC Complex" cityid="884">GSFC Complex</option>
                                                <option value="Gadhda" cityid="885">Gadhda</option>
                                                <option value="Gandevi" cityid="886">Gandevi</option>
                                                <option value="Gandhidham" cityid="887">Gandhidham</option>
                                                <option value="Gandhinagar" cityid="888">Gandhinagar</option>
                                                <option value="Gariadhar" cityid="889">Gariadhar</option>
                                                <option value="Ghogha" cityid="890">Ghogha</option>
                                                <option value="Godhra" cityid="891">Godhra</option>
                                                <option value="Gondal" cityid="892">Gondal</option>
                                                <option value="Hajira INA" cityid="893">Hajira INA</option>
                                                <option value="Halol" cityid="894">Halol</option>
                                                <option value="Halvad" cityid="895">Halvad</option>
                                                <option value="Hansot" cityid="896">Hansot</option>
                                                <option value="Harij" cityid="897">Harij</option>
                                                <option value="Himatnagar" cityid="898">Himatnagar</option>
                                                <option value="Ichchhapor" cityid="899">Ichchhapor</option>
                                                <option value="Idar" cityid="900">Idar</option>
                                                <option value="Jafrabad" cityid="901">Jafrabad</option>
                                                <option value="Jalalpore" cityid="902">Jalalpore</option>
                                                <option value="Jambusar" cityid="903">Jambusar</option>
                                                <option value="Jamjodhpur" cityid="904">Jamjodhpur</option>
                                                <option value="Jamnagar" cityid="905">Jamnagar</option>
                                                <option value="Jasdan" cityid="906">Jasdan</option>
                                                <option value="Jawaharnagar" cityid="907">Jawaharnagar</option>
                                                <option value="Jetalsar" cityid="908">Jetalsar</option>
                                                <option value="Jetpur" cityid="909">Jetpur</option>
                                                <option value="Jodiya" cityid="910">Jodiya</option>
                                                <option value="Joshipura" cityid="911">Joshipura</option>
                                                <option value="Junagadh" cityid="912">Junagadh</option>
                                                <option value="Kadi" cityid="913">Kadi</option>
                                                <option value="Kadodara" cityid="914">Kadodara</option>
                                                <option value="Kalavad" cityid="915">Kalavad</option>
                                                <option value="Kali" cityid="916">Kali</option>
                                                <option value="Kaliawadi" cityid="917">Kaliawadi</option>
                                                <option value="Kalol" cityid="918">Kalol</option>
                                                <option value="Kalol INA" cityid="919">Kalol INA</option>
                                                <option value="Kandla" cityid="920">Kandla</option>
                                                <option value="Kanjari" cityid="921">Kanjari</option>
                                                <option value="Kanodar" cityid="922">Kanodar</option>
                                                <option value="Kapadwanj" cityid="923">Kapadwanj</option>
                                                <option value="Karachiya" cityid="924">Karachiya</option>
                                                <option value="Karamsad" cityid="925">Karamsad</option>
                                                <option value="Karjan" cityid="926">Karjan</option>
                                                <option value="Kathial" cityid="927">Kathial</option>
                                                <option value="Kathor" cityid="928">Kathor</option>
                                                <option value="Katpar" cityid="929">Katpar</option>
                                                <option value="Kavant" cityid="930">Kavant</option>
                                                <option value="Keshod" cityid="931">Keshod</option>
                                                <option value="Kevadiya" cityid="932">Kevadiya</option>
                                                <option value="Khambhaliya" cityid="933">Khambhaliya</option>
                                                <option value="Khambhat" cityid="934">Khambhat</option>
                                                <option value="Kharaghoda" cityid="935">Kharaghoda</option>
                                                <option value="Khed Brahma" cityid="936">Khed Brahma</option>
                                                <option value="Kheda" cityid="937">Kheda</option>
                                                <option value="Kheralu" cityid="938">Kheralu</option>
                                                <option value="Kodinar" cityid="939">Kodinar</option>
                                                <option value="Kosamba" cityid="940">Kosamba</option>
                                                <option value="Kundla" cityid="941">Kundla</option>
                                                <option value="Kutch" cityid="942">Kutch</option>
                                                <option value="Kutiyana" cityid="943">Kutiyana</option>
                                                <option value="Lakhtar" cityid="944">Lakhtar</option>
                                                <option value="Lalpur" cityid="945">Lalpur</option>
                                                <option value="Lambha" cityid="946">Lambha</option>
                                                <option value="Lathi" cityid="947">Lathi</option>
                                                <option value="Limbdi" cityid="948">Limbdi</option>
                                                <option value="Limla" cityid="949">Limla</option>
                                                <option value="Lunavada" cityid="950">Lunavada</option>
                                                <option value="Madhapar" cityid="951">Madhapar</option>
                                                <option value="Maflipur" cityid="952">Maflipur</option>
                                                <option value="Mahemdavad" cityid="953">Mahemdavad</option>
                                                <option value="Mahudha" cityid="954">Mahudha</option>
                                                <option value="Mahuva" cityid="955">Mahuva</option>
                                                <option value="Mahuvar" cityid="956">Mahuvar</option>
                                                <option value="Makarba" cityid="957">Makarba</option>
                                                <option value="Makarpura" cityid="958">Makarpura</option>
                                                <option value="Makassar" cityid="959">Makassar</option>
                                                <option value="Maktampur" cityid="960">Maktampur</option>
                                                <option value="Malia" cityid="961">Malia</option>
                                                <option value="Malpur" cityid="962">Malpur</option>
                                                <option value="Manavadar" cityid="963">Manavadar</option>
                                                <option value="Mandal" cityid="964">Mandal</option>
                                                <option value="Mandvi" cityid="965">Mandvi</option>
                                                <option value="Mangrol" cityid="966">Mangrol</option>
                                                <option value="Mansa" cityid="967">Mansa</option>
                                                <option value="Meghraj" cityid="968">Meghraj</option>
                                                <option value="Mehsana" cityid="969">Mehsana</option>
                                                <option value="Mendarla" cityid="970">Mendarla</option>
                                                <option value="Mithapur" cityid="971">Mithapur</option>
                                                <option value="Modasa" cityid="972">Modasa</option>
                                                <option value="Mogravadi" cityid="973">Mogravadi</option>
                                                <option value="Morbi" cityid="974">Morbi</option>
                                                <option value="Morvi" cityid="975">Morvi</option>
                                                <option value="Mundra" cityid="976">Mundra</option>
                                                <option value="Nadiad" cityid="977">Nadiad</option>
                                                <option value="Naliya" cityid="978">Naliya</option>
                                                <option value="Nanakvada" cityid="979">Nanakvada</option>
                                                <option value="Nandej" cityid="980">Nandej</option>
                                                <option value="Nandesari" cityid="981">Nandesari</option>
                                                <option value="Nandesari INA" cityid="982">Nandesari INA</option>
                                                <option value="Naroda" cityid="983">Naroda</option>
                                                <option value="Navagadh" cityid="984">Navagadh</option>
                                                <option value="Navagam Ghed" cityid="985">Navagam Ghed</option>
                                                <option value="Navsari" cityid="986">Navsari</option>
                                                <option value="Ode" cityid="987">Ode</option>
                                                <option value="Okaf" cityid="988">Okaf</option>
                                                <option value="Okha" cityid="989">Okha</option>
                                                <option value="Olpad" cityid="990">Olpad</option>
                                                <option value="Paddhari" cityid="991">Paddhari</option>
                                                <option value="Padra" cityid="992">Padra</option>
                                                <option value="Palanpur" cityid="993">Palanpur</option>
                                                <option value="Palej" cityid="994">Palej</option>
                                                <option value="Pali" cityid="995">Pali</option>
                                                <option value="Palitana" cityid="996">Palitana</option>
                                                <option value="Paliyad" cityid="997">Paliyad</option>
                                                <option value="Pandesara" cityid="998">Pandesara</option>
                                                <option value="Panoli" cityid="999">Panoli</option>
                                                <option value="Pardi" cityid="1000">Pardi</option>
                                                <option value="Parnera" cityid="1001">Parnera</option>
                                                <option value="Parvat" cityid="1002">Parvat</option>
                                                <option value="Patan" cityid="1003">Patan</option>
                                                <option value="Patdi" cityid="1004">Patdi</option>
                                                <option value="Petlad" cityid="1005">Petlad</option>
                                                <option value="Petrochemical Complex" cityid="1006">Petrochemical Complex</option>
                                                <option value="Porbandar" cityid="1007">Porbandar</option>
                                                <option value="Prantij" cityid="1008">Prantij</option>
                                                <option value="Radhanpur" cityid="1009">Radhanpur</option>
                                                <option value="Raiya" cityid="1010">Raiya</option>
                                                <option value="Rajkot" cityid="1011">Rajkot</option>
                                                <option value="Rajpipla" cityid="1012">Rajpipla</option>
                                                <option value="Rajula" cityid="1013">Rajula</option>
                                                <option value="Ramod" cityid="1014">Ramod</option>
                                                <option value="Ranavav" cityid="1015">Ranavav</option>
                                                <option value="Ranoli" cityid="1016">Ranoli</option>
                                                <option value="Rapar" cityid="1017">Rapar</option>
                                                <option value="Sahij" cityid="1018">Sahij</option>
                                                <option value="Salaya" cityid="1019">Salaya</option>
                                                <option value="Sanand" cityid="1020">Sanand</option>
                                                <option value="Sankheda" cityid="1021">Sankheda</option>
                                                <option value="Santrampur" cityid="1022">Santrampur</option>
                                                <option value="Saribujrang" cityid="1023">Saribujrang</option>
                                                <option value="Sarigam INA" cityid="1024">Sarigam INA</option>
                                                <option value="Sayan" cityid="1025">Sayan</option>
                                                <option value="Sayla" cityid="1026">Sayla</option>
                                                <option value="Shahpur" cityid="1027">Shahpur</option>
                                                <option value="Shahwadi" cityid="1028">Shahwadi</option>
                                                <option value="Shapar" cityid="1029">Shapar</option>
                                                <option value="Shivrajpur" cityid="1030">Shivrajpur</option>
                                                <option value="Siddhapur" cityid="1031">Siddhapur</option>
                                                <option value="Sidhpur" cityid="1032">Sidhpur</option>
                                                <option value="Sihor" cityid="1033">Sihor</option>
                                                <option value="Sika" cityid="1034">Sika</option>
                                                <option value="Singarva" cityid="1035">Singarva</option>
                                                <option value="Sinor" cityid="1036">Sinor</option>
                                                <option value="Sojitra" cityid="1037">Sojitra</option>
                                                <option value="Sola" cityid="1038">Sola</option>
                                                <option value="Songadh" cityid="1039">Songadh</option>
                                                <option value="Suraj Karadi" cityid="1040">Suraj Karadi</option>
                                                <option value="Surat" cityid="1041">Surat</option>
                                                <option value="Surendranagar" cityid="1042">Surendranagar</option>
                                                <option value="Talaja" cityid="1043">Talaja</option>
                                                <option value="Talala" cityid="1044">Talala</option>
                                                <option value="Talod" cityid="1045">Talod</option>
                                                <option value="Tankara" cityid="1046">Tankara</option>
                                                <option value="Tarsali" cityid="1047">Tarsali</option>
                                                <option value="Thangadh" cityid="1048">Thangadh</option>
                                                <option value="Tharad" cityid="1049">Tharad</option>
                                                <option value="Thasra" cityid="1050">Thasra</option>
                                                <option value="Udyognagar" cityid="1051">Udyognagar</option>
                                                <option value="Ukai" cityid="1052">Ukai</option>
                                                <option value="Umbergaon" cityid="1053">Umbergaon</option>
                                                <option value="Umbergaon INA" cityid="1054">Umbergaon INA</option>
                                                <option value="Umrala" cityid="1055">Umrala</option>
                                                <option value="Umreth" cityid="1056">Umreth</option>
                                                <option value="Un" cityid="1057">Un</option>
                                                <option value="Una" cityid="1058">Una</option>
                                                <option value="Unjha" cityid="1059">Unjha</option>
                                                <option value="Upleta" cityid="1060">Upleta</option>
                                                <option value="Utran" cityid="1061">Utran</option>
                                                <option value="Uttarsanda" cityid="1062">Uttarsanda</option>
                                                <option value="V.U. Nagar" cityid="1063">V.U. Nagar</option>
                                                <option value="V.V. Nagar" cityid="1064">V.V. Nagar</option>
                                                <option value="Vadia" cityid="1065">Vadia</option>
                                                <option value="Vadla" cityid="1066">Vadla</option>
                                                <option value="Vadnagar" cityid="1067">Vadnagar</option>
                                                <option value="Vadodara" cityid="1068" selected>Vadodara</option>
                                                <option value="Vaghodia INA" cityid="1069">Vaghodia INA</option>
                                                <option value="Valbhipur" cityid="1070">Valbhipur</option>
                                                <option value="Vallabh Vidyanagar" cityid="1071">Vallabh Vidyanagar</option>
                                                <option value="Valsad" cityid="1072">Valsad</option>
                                                <option value="Valsad INA" cityid="1073">Valsad INA</option>
                                                <option value="Vanthali" cityid="1074">Vanthali</option>
                                                <option value="Vapi" cityid="1075">Vapi</option>
                                                <option value="Vapi INA" cityid="1076">Vapi INA</option>
                                                <option value="Vartej" cityid="1077">Vartej</option>
                                                <option value="Vasad" cityid="1078">Vasad</option>
                                                <option value="Vasna Borsad INA" cityid="1079">Vasna Borsad INA</option>
                                                <option value="Vaso" cityid="1080">Vaso</option>
                                                <option value="Veraval" cityid="1081">Veraval</option>
                                                <option value="Vidyanagar" cityid="1082">Vidyanagar</option>
                                                <option value="Vijalpor" cityid="1083">Vijalpor</option>
                                                <option value="Vijapur" cityid="1084">Vijapur</option>
                                                <option value="Vinchhiya" cityid="1085">Vinchhiya</option>
                                                <option value="Vinzol" cityid="1086">Vinzol</option>
                                                <option value="Virpur" cityid="1087">Virpur</option>
                                                <option value="Visavadar" cityid="1088">Visavadar</option>
                                                <option value="Visnagar" cityid="1089">Visnagar</option>
                                                <option value="Vyara" cityid="1090">Vyara</option>
                                                <option value="Wadhwan" cityid="1091">Wadhwan</option>
                                                <option value="Waghai" cityid="1092">Waghai</option>
                                                <option value="Waghodia" cityid="1093">Waghodia</option>
                                                <option value="Wankaner" cityid="1094">Wankaner</option>
                                                <option value="Zalod" cityid="1095">Zalod</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Pincode</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Pincode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Technician Role</label>
                                        <div class="col-sm-10">
                                            <select id="cityId" class="form-control" name="Role" required="required">
                                                <option value="Electrician">Electrician</option>
                                                <option value="Mechanic">Mechanic</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="cityId" class="form-control" name="Status" required="required">
                                                <option value="Active">Active</option>
                                                <option value="Deactive">Deactive</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                             <button type="submit" class="btn btn-theme" name="Submit" >Submit</button>
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
 $FirstName=$_POST["FirstName"];
   $LastName=$_POST["LastName"];
   $UserName=$_POST["UserName"];
   $Password=$_POST["Password"];
   $Address=$_POST["Address"];
   $Country=$_POST["Country"];
   $State=$_POST["State"];
   $City=$_POST["City"];
   $Pincode=$_POST["Pincode"];
   $Role=$_POST["Role"];
   $Status=$_POST["Status"];
   $Email=$_POST["Email"];
   $Mobile=$_POST["Mobile"];
   if ($FirstName==""){echo '<script>alert("Please Enter First Name");</script>';}
  else if($LastName==""){echo '<script>alert("Please Enter Last Name");</script>';}
  else if($Mobile==""){echo '<script>alert("Please Enter Mobile No.");</script>';}
  else if($UserName==""){echo '<script>alert("Please Enter Username");</script>';}
  else if($Password==""){echo '<script>alert("Please Enter Password");</script>';}
  else if($Address==""){echo '<script>alert("Please Enter Address");</script>';}
  else if($Country==""){echo '<script>alert("Please Enter Country");</script>';}
  else if($State==""){echo '<script>alert("Please Enter State");</script>';}
  else if($City==""){echo '<script>alert("Please Enter Pincode");</script>';}
  else if($Pincode==""){echo '<script>alert("Please Enter Last Name");</script>';}
  else if($Role==""){echo '<script>alert("Please Enter Role");</script>';}
  else if($Email==""){echo '<script>alert("Please Enter Email");</script>';}
  else if($Status==""){echo '<script>alert("Please Enter Status");</script>';}
  else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) { echo '<script>alert("Please Enter Valid Email Address");</script>';}
elseif(preg_match('/^[0-9]{10}$/', $Mobile)) {
    
     $sql="SELECT * FROM technician WHERE UserName ='$UserName'";
            $result=mysql_query($sql);
            $count=mysql_num_rows($result);



if($count==1 || $count>=1){
    
    echo '<script>alert("Username Already Exist");</script>';
    
    
}

else{
    
    
    
    
    echo $sql = "INSERT INTO technician (UserName, Password, FirstName, LastName, Mobile, Country, State, City, Address, Pincode, TechnicianRole, UserStatus, Email) VALUES ('$UserName', '$Password', '$FirstName', '$LastName', '$Mobile', '$Country', '$State', '$City', '$Address', '$Pincode', '$Role', '$Status', '$Email')";

    mysql_query($sql)or die(mysql_error());
    //header("location:managetech.php");
echo '<script>alert("Technician Added Successfully.");</script>';
}
}
    
   else{
 
  
  echo '<script>alert("Please Enter Valid Mobile No.");</script>';
  
  
   }}
  ?>
</html>
