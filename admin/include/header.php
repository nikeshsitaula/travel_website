<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
 <meta name="keyword" content="">
  <link rel="shortcut icon" href="img/favicon.png">

 <title>Admin | Travel Website</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>
<style>

#example_paginate{
margin-top:30px;}
.paginate_button{
margin:10px !important;
}
th {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: #eeeeee;
}
th, td {
  padding: 0.5rem;
}
td:hover {
  background-color: #020202;
  color:#fff;
}
.paginate_button {
  border-radius: 0 !important;
}
.dataTables_paginate a {
  color: #143361;
  background-color: transparent;
  font-weight: 600;
}
.dataTables_paginate a.current:hover {
  background-color: transparent;
  color: #143361;
  border: 0px;
}
.dataTables_paginate a.current:focus {
  background-color: transparent;
  color: #143361;
  outline: none;
}
.dataTables_paginate a {
  border: 1px;
  margin-left: 0px;
  color: #707070;
  padding: 7px 2px;
  margin: 0px 20px;
}
.dataTables_paginate a:hover {
  background-color: transparent;
  color: #4A90E2;
  padding-bottom: 2px;
  border-bottom: 1px solid;
}
.dataTables_paginate a:focus {
  outline: none;
  background-color: transparent;
  /*color:#707070;*/
}
.dataTables_paginate a:first-child, .dataTables_paginate a:last-child {
  border: 2px solid #143361 !important;
  border-radius: 6px;
  margin: 0px;
  padding: 6px 12px;
  border: 2px solid;
  font-size: 14px;
  color: #143361;
}
.dataTables_paginate a:first-child:hover, .dataTables_paginate a:last-child:hover {
  text-decoration: none !important;
  color: #fff;
  background-color: #143361;
}
.dataTables_paginate a:first-child:focus, .dataTables_paginate a:last-child:focus {
  outline: none;
}

</style>

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">ADMIN&nbsp;<span class="lite" style="color:#fff !important">Travel Website</span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon_cog"></i>
                            <span class="username">Settings</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="changepassword.php"><i class="icon_key_alt"></i> Change Password</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_lock"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->
