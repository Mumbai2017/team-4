<?php
	include 'php_action/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Section</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap theme-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">

    <!-- file input -->
    <link rel="stylesheet" href="assets/plugins/fileinput/css/fileinput.min.css">

    <!-- jquery -->
    <script src="assets/jquery/jquery.min.js"></script>
    <!-- jquery ui -->
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.min.css">

    <script src="assets/jquery-ui/jquery-ui.min.js"></script>

    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CEQUE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        	<ul class="nav navbar-nav navbar-right">
                <li class="dropdown" id="navSetting">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>
                        <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="col-lg-12 mainprof" style="width:96%">
    <!--
    <button type="button" style="margin-top: 1%; margin-left: 1%" data-toggle="collapse" data-target="#filters" class="visible-lg btn btn-warning btn-lg collapsed" aria-expanded="false">
            <span class="glyphicon glyphicon-plus">

            </span>
    </button>
    -->
    <div class="col-lg-2 mainprof" style="padding: 1%" id="filters" aria-expanded="false">
        <div style="margin-top: 1%; background-color: #f8f8f8; padding: 1%">
            <ul class="nav nav-pills nav-stacked mytabs">

                <h4 style="color:#e40046;margin-left:3vw;">Teacher Section</h4>
                <hr style="margin-top:10px;">
                <li >
                    <a data-toggle="tab" href="#my-home" aria-expanded="true">
                    </a>
                </li>
                <li>
                    <a class="active" data-toggle="tab" href="#home" aria-expanded="true">
                        <span class="fa fa-user"></span>
                        &nbsp;&nbsp;Dashboard
                    </a>
                </li>
                <br>
                <li>
                    <a  href="https://www.streamable.com" target="_blank" >
                        <span class="fa fa-user"></span>
                        &nbsp;&nbsp;Upload Your Work
                    </a>
                </li>
                <br>
                <br>
            </ul>
        </div>
    </div>

    <div class="col-lg-10" style="margin-top: 1%; paddingbackground-color: #f8f8f8">
        <div class="tab-content">
            <div id="home" class="tab-pane fade">
                <?php include 'getPlans.php';   ?>
            </div>
        </div>
        <iframe
    width="350"
    height="430" style="right: 0; bottom: 0; position: fixed;"
    src="https://console.api.ai/api-client/demo/embedded/7062f631-8e47-4262-98c3-ccb9a00304cd">
</iframe>
    </div>




    <!-- Trigger the modal with a button -->
<button style="left: 0; bottom: 0; position: fixed;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload the video and share the link with CEQUE</button>

<script src="custom/js/view-plans.js"></script>

</body>
</html>



