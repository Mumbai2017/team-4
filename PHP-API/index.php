<?php
session_start();
require_once 'php_action/db_connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP</title>

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
            <!-- <a class="navbar-brand" href="#">Brand</a> -->
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
<div class="container">
    <div class="row vertical">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign in</h3>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" id="otpForm" action="php_action/otp-generate.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <label for="otp" class="control-label">Mobile Number: </label>
                                <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter the Mobile Number">
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" id="submitNumber" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Submit </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- panel-body -->
            </div>
            <!-- /panel -->
        </div>
        <!-- /col-md-4 -->
    </div>
    <!-- /row -->
</div>


<script src="custom/js/otp-generate.js"></script>
</body>
</html>
