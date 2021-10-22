<?php
include __DIR__."/connect.php";
if(!isset($_COOKIE['client'])||$_COOKIE['client']=='NULL'){
$_SESSION['msg']='<div class="alert alert-danger" role="alert">Login to continue</div>';
header("location: ./login.php");
}
else{
$sql=mysqli_query($connect,"select * from vhost_client where client_email='".$_COOKIE['client']."'");
if(mysqli_num_rows($sql)>0){
$user=mysqli_fetch_assoc($sql);
}
else{
header('location: login.php');
}
}
?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Store components - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="../assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <script src="../assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="../assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="../assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="../assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./home.php">
                <img src="https://app.infinityfree.net/images/logo.png" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <a href="domainchecker.php" class="btn btn-sm btn-outline-primary">Create account</a>
                </div>
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(https://www.gravatar.com/avatar/032d7764ac43a25f2404b4488e7ee777?s=80&d=retro&r=pg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(https://www.gravatar.com/avatar/032d7764ac43a25f2404b4488e7ee777?s=80&d=retro&r=pg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(https://www.gravatar.com/avatar/032d7764ac43a25f2404b4488e7ee777?s=80&d=retro&r=pg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(https://www.gravatar.com/avatar/032d7764ac43a25f2404b4488e7ee777?s=80&d=retro&r=pg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Hi <?php echo $user['client_name'];?></span>
                      <small class="text-muted d-block mt-1"><?php echo $user['client_email'];?></small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="accountsettings.php">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    
                    
                    <div class="dropdown-divider"></div>
                    
                    <a class="dropdown-item" href="function/logout.php">
                      <i class="dropdown-icon fe fe-log-out"></i> Logout
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./home.php" class="nav-link active"><i class="fe fe-home"></i> Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Accounts</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./accounts.php" class="dropdown-item ">View Accounts</a>
                      <a href="./domainchecker.php" class="dropdown-item ">Create Accounts</a>
                      
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Free SSL</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./ssls.php" class="dropdown-item ">View SSL</a>
                      <a href="./newssl.php" class="dropdown-item ">Add SSL</a>
                      
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Tickets</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./tickets.php" class="dropdown-item ">View Tickets</a>
                      <a href="./createticket.php" class="dropdown-item ">Create Ticket</a>
                      
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>










<!-- Main Content -->
<?php
if($user['client_status']==0){
header('location: ./validate.php');
}
?>
