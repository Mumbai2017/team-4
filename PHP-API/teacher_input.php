<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload plan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container-fluid" id="div">

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
                    <h2>Upload plan</h2>


                    <form class="form-horizontal" method="POST"  enctype="multipart/form-data" action="uploadData.php" >
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="subject">Subject:</label>
                            <div class="col-sm-4">
                                <select  class="form-control" id="subject"  name="subject">
                                    <option>English</option>
                                    <option>Maths</option>
                                    <option>Marathi</option>
                                    <option>Geography</option>
                                    <option>Science</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="file">File:</label>

                            <div class="col-sm-4">  
                            <form class="form-horizontal" id="submitForm" action="uploadData.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>
                                <div class="kv-avatar center-block">
                                    <input type="file" class="form-control" id="planImage" placeholder="Product Name" name="planImage" class="file-loading" style="width:auto;"/>
                                </div>
                                <button type="submit" class="btn btn-primary" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                            </form>        
                            <a href="custom/images/whatsapp_bg.jpg" download>Download template</a>
                            </div>
                        </div>
                    </form>
                            <a href="https://streamable.com/" target="_blank">Upload Your Work</a>

                </div>
            </div>
        </div>


    </body>




</html>

