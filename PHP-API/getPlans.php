<?php

include 'php_action/db_connect.php';
include 'php_action/conn.php';
$sql = "SELECT * FROM plan WHERE user_id=".$_SESSION['user_id'];

$query = $connect->query($sql);

$units = array();
?>
    <a href="teacher_input.php"><button id="btn1" type="button" class="btn btn-primary btn-md"> <span class="glyphicon glyphicon-plus"></span>Create a new plan</button></a>
<?php
if($query->num_rows > 0){
    while ($row = $query->fetch_array()){
        $id = $row['id'];

        ?>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Plan id :</a>
                            </h4>
                            <div class="panel-footer">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <?php
                                            if($id % 3 == 0 ){
                                                ?>
                                                <span class="sr-only">70% Complete</span>
                                                <?php
                                            }
                                            if($id % 3 == 1 ){
                                                ?>
                                                <span class="sr-only">30% Complete</span>
                                                <?php
                                            }
                                            if($id % 3 == 2 ){
                                                ?>
                                                <span class="sr-only">50% Complete</span>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Name:add</div>
                            <a href='demoChat.php?id=<?php echo $id;?>'><button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"><span>Approve</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>