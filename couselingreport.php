<!DOCTYPE html>
<?php
    session_start();
    if(!$_SESSION['Logged_In'])
    {
        header('Location:LogIn.php');
        exit;
    }
    include ("config.php");
?>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>G&CSMS-Counseling Service</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

<!--dynamic table-->
    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" href="css/jquery.steps.css?1">

    <!-- Custom styles for this template -->
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" id="logo" onclick="printpage()">
        <img src="images/logogcsms.png" alt="">
    </a>
   
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu" onclick="printpage()">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix" id="clearfix" onclick="printpage()">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder="Search" id="Search" onclick="printpage()">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="username"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse"  >
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a  href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="profiling/index.php">
                        <i class="fa fa-users"></i>
                        <span>Profiling</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="counseling_page.php">
                        <i class="fa fa-suitcase"></i>
                        <span>Counseling Services</span>
                    </a>
                   
                </li>
                <li>
                    <a href="filesanddocuments.php">
                        <i class="fa fa-book"></i>
                        <span>Files and Documents </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="active" href="reports.php">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="sysconfig.php">
                        <i class="fa fa-cog"></i>
                        <span>System COnfiguration</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->

    <section id="main-content">
        <section class="wrapper">
          <input id="printpagebutton" type="button" class="btn btn-default-success" value="Print this page" onclick="printpage()"/>
        <script type="text/javascript">
        function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var logo = document.getElementById("logo");
        var topmenu = document.getElementById("top_menu");
        var clearfix = document.getElementById("clearfix");
        var Search = document.getElementById("Search");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        logo.style.visibility = 'hidden';
        topmenu.style.visibility = 'hidden';
        clearfix.style.visibility = 'hidden';
        Search.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        logo.style.visibility = 'visible';
        topmenu.style.visibility = 'visible';
        clearfix.style.visibility = 'visible';
        Search.style.visibility = 'visible';
    }
        </script>
        <!-- page start-->
                <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Guidance Record
                    </header>
                    <div class="panel-body">
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Student number</th>
                                    <th>Student name</th>
                                    <th>Type</th>
                                    <th>Details</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
        <!-- page start-->
<?php

$conn = mysqli_connect("localhost","root","","g&csms_db");

// Check connection
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
  $sql= "SELECT  `STUDENT_NO`,`STUDENT_NAME`,`COUNSELING_TYPE`,`COUNSELING_DETAILS`,`COUNSELING_DATE`FROM `t_counseling_service`";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

    /* fetch object array */
    while ($row = mysqli_fetch_row($query)) {

                   echo' <tbody>
                    <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3]. '</td>
                    <td>'.$row[4].'</td>
                </tr>
                </tbody>';
        }


    /* free result set */


/* close connection */


?>


        <!-- page end-->
        </section>
        </div>
    </section>
        <!-- page start-->
        
                </section>
    <!--main content end-->
<!--right sidebar start-->

<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script src="js/jquery-steps/jquery.steps.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>

<script src="js/iCheck/jquery.icheck.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--icheck init -->
<script src="js/icheck-init.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>


</body>
</html>
