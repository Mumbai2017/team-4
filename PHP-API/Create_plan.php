<!DOCTYPE html>
<html>
    <head><title>View Video</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #btn1{
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
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
                    <a class="navbar-brand" href="#">Teacher Innovator Pages</a>
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
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <a href="Upload_plan.php"><button id="btn1" type="button" class="btn btn-primary btn-md"> <span class="glyphicon glyphicon-plus"></span>Create a new plan</button></a>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Plan id :01</a>
                            </h4>
                            <div class="panel-footer">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Name:add</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Plan id:02</a>
                            </h4>
                            <div class="panel-footer">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Name:Sub</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Plan id:03</a>
                            </h4>
                            <div class="panel-footer">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div></div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Name:Mul</div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </body>



</html>

