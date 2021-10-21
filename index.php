<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="https://i.ibb.co/r2L55tc/vote.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/welcome.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Voters
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="/voterreg.php">Register for voters</a></li>
            <li><a class="dropdown-item" href="/voterlogin.php">Login for voters</a></li>
                                
            
          </ul>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Candidates
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Login as Generalscretary</a></li>
            <li><a class="dropdown-item" href="#">Login as Financescretary</a></li> 
            <li><a class="dropdown-item" href="#">Login as Sportsscretary</a></li>
            <li><a class="dropdown-item" href="#">Login as Technicalscretary</a></li>
            <li><a class="dropdown-item" href="#">Login as Mediascretary</a></li>
            <li><a class="dropdown-item" href="#">Login as Culturalscretary</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/generalreg.php">Register for Generalscretary</a></li>
            <li><a class="dropdown-item" href="/financereg.php">Register for Financescretary</a></li> 
            <li><a class="dropdown-item" href="/sportsreg.php">Register for Sportsscretary</a></li>
            <li><a class="dropdown-item" href="/technicalreg.php">Register for Technicalscretary</a></li>
            <li><a class="dropdown-item" href="/mediareg.php">Register for Mediascretary</a></li>
            <li><a class="dropdown-item" href="/culturalreg.php">Register for Culturalscretary</a></li>

               
            
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/leaderboard.php">Results</a>
        </li>
        
        
        
      </ul>   
      

    </div>
  </div>
</nav>
<html>
<head>
<title>Online voting Platform</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<div class="p-1 mb-2 bg-success text-white"><marquee><b>NOTE : &ensp; 1) Register before voting &ensp;&ensp;&ensp;    2) Registration for candidates open till October 16, 2021 &ensp;&ensp;&ensp; 3) Registration for voters open till October 21, 2021  &ensp;&ensp;&ensp; 4) </b></marquee></div>
<br>

<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM voters";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <div class="text-center">
        <img src="http://www.yooralla.com.au/__data/assets/image/0017/40436/Voting-780x493.jpg"  width="360" height="260" class="responsive" alt="...">
      </div>
      
        <center><h5 class="card-title">Total Registered Voters <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg></h5></center>        
        <p class="card-text">       
        </p>
        
        <center><a href="upload.php" class="btn btn-primary"> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>  <?php echo "".$rowcount;?> Registered</a></center>
      </div>
    </div>
  </div>
  <br>
<br>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">  
      <div class="text-center">
        <img src="https://i.ibb.co/9nQPybf/Candidates-Home-Page.png"  width="360" height="260" class="responsive" alt="...">
      </div>    
        <center><h5 class="card-title">Total Registered Candidates <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-lock" viewBox="0 0 16 16">
  <path d="M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0zM7 7v1h2V7a1 1 0 0 0-2 0zM6 9.3v2.4c0 .042.02.107.105.175A.637.637 0 0 0 6.5 12h3a.64.64 0 0 0 .395-.125c.085-.068.105-.133.105-.175V9.3c0-.042-.02-.107-.105-.175A.637.637 0 0 0 9.5 9h-3a.637.637 0 0 0-.395.125C6.02 9.193 6 9.258 6 9.3z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> </h5></center>        
        <p class="card-text"></p>
        <center><a href="#" class="btn btn-primary"> <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> </a></center>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>

<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM 	compgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $compgeneral=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM compculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $compcultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM compfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $compfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM compsportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $compsports=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM compmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $compmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM comptechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $comptech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Computer Engineering</h2></center>
<div class="table-responsive">
<table  class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$compgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$compcultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$compfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$comptech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$compsports;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$compmedia;?></TD>
   </TR>
</TABLE>
<hr>
<br>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electgeneral=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electcultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electsportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electsports=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM electtechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $electtech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Electrical Engineering</h2></center>
<div class="table-responsive">
<table  class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$electgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$electcultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$electfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$electtech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$electsports;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$electmedia;?></TD>
   </TR>
</TABLE>
<br>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civilgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civilgeneral=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civilculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civilcultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civilfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civilfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civilmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civilmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civilsportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civilsports=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM civiltechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $civiltech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Civil Engineering</h2></center>
<div class="table-responsive">
<table  class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$civilgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$civilcultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$civilfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$civiltech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$civilsports;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$civilmedia;?></TD>
   </TR>
</TABLE>
<br>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM 	mechanicalgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicalgeneral=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechanicalculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicalcultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechanicalfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicalfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechanicalmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicalmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechanicalsportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicalsports=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechanicaltechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechanicaltech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Mechanical Engineering</h2></center>
<div class="table-responsive">
<table  class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$mechanicalgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$mechanicalcultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$mechanicalfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$mechanicaltech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$mechanicalsports;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$mechanicalmedia;?></TD>
   </TR>
</TABLE>
<br>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechatgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechatgeneral=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechatculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechatcultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechatfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechatfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechatmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechatmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechatsportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechatsports=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM mechattechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $mechattech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Mechatronics Engineering</h2></center>
<div class="table-responsive">
<table class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$mechatgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$mechatcultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$mechatfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$mechattech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$mechatgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$mechatgeneral;?></TD>
   </TR>
</TABLE>
<br>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidsgeneralcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidsgeneral=mysqli_num_rows($result);
  // echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidsculturalcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidscultural=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidsfinancecandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidsfinance=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidsmediacandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidsmedia=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidssportscandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidssports=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<?php
//$conn = new mysqli(localhost, $username, $password, $database);
include 'dbconnect.php';
$sql = "SELECT * FROM aidstechcandidates";
if ($result=mysqli_query($conn,$sql)) {
    $aidstech=mysqli_num_rows($result);
  //  echo "The total number of rows are: ".$rowcount; 
}
?>
<center><h2>Artificial Inteligience & Data Science </h2></center>
<div class="table-responsive">
<center><table  class="table table-striped table-hover">

   
  
   <TR align="center">
      <TH>Sr No</TH>
      <TH>Post</TH>
      <TH>No of Candidates applied</TH>
   </TR>
   <TR align="center">
      <TD>1</TD>
      <TD>General Secretary</TD>
      <TD><?php echo "".$aidsgeneral;?></TD>
   </TR>
   <TR align="center">
      <TD>2</TD>
      <TD>Cultural Secretary</TD>
      <TD><?php echo "".$aidscultural;?></TD>
   </TR>
   <TR align="center">
      <TD>3</TD>
      <TD>Finance Secretary</TD>
      <TD><?php echo "".$aidsfinance;?></TD>
   </TR>
   <TR align="center">
      <TD>4</TD>
      <TD>Technical Secretary</TD>
      <TD><?php echo "".$aidstech;?></TD>
   </TR>
   <TR align="center">
      <TD>5</TD>
      <TD>Sports Secretary</TD>
      <TD><?php echo "".$aidssports;?></TD>
   </TR>
   <TR align="center">
      <TD>6</TD>
      <TD>Media Secretary</TD>
      <TD><?php echo "".$aidsmedia;?></TD>
   </TR>
</TABLE></center>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</table>


























<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="text-center">
        <img class="mb-2" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="20" height="19">
        <small class="d-block mb-3 text-muted">&copy; 2021</small>
      </div>
      
      </div>
      
    </div>
  </footer>

