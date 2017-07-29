<?php
/**
 * Created by PhpStorm.
 * User: Sumeet
 * Date: 29-07-2017
 * Time: 18:57
 */
include 'db_connect.php';

$subject = "SELECT DISTINCT subject FROM subject";
$subject_in_db = $connect->query($subject);

$plan = "SELECT * FROM plan";
$plan_in_db = $connect->query($plan);



?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Section</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap theme-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">


    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables/jquery.dataTables.min.css">

    <!-- file input -->
    <link rel="stylesheet" href="../assets/plugins/fileinput/css/fileinput.min.css">

    <!-- jquery -->
    <script src="../assets/jquery/jquery.min.js"></script>
    <!-- jquery ui -->
    <link rel="stylesheet" href="../assets/jquery-ui/jquery-ui.min.css">

    <script src="../assets/jquery-ui/jquery-ui.min.js"></script>

    <!-- bootstrap js -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>
<div class="form-group">
    <label for="subject" class="control-label">SUBJECT</label><br>
    <?php
    if($subject_in_db->num_rows > 0){
        while($row = $subject_in_db->fetch_array()){
            ?>
            <div class="checkbox-inline">
                <label class="checkbox-inline">
                    <input type="checkbox" value="<?php echo $row['subject'];?>" name="subject" class="subject" id="subject" onclick="changed();"><?php echo $row['subject']; ?>
                </label>
            </div>
            <?php
        }
    }
    ?>
</div>

<div class="row">
    <div class="col-md-8">
        <?php
        if($plan_in_db->num_rows > 0){
            while ($row = $plan_in_db->fetch_array()){
                $sql = "SELECT * FROM users WHERE id=".$row['user_id'];
                $data = $connect->query($sql);
                if($data->num_rows > 0){
                    while($my_row = $data->fetch_array()){
                        ?>
                        <ul class="list-group">
                            <div class="plan">
                                <li class="list-group-item" id="<?php echo $row['id']?>"><blockquote><p><?php echo $my_row['name']; ?></p><button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;" data-toggle="modal" data-target="#viewDocs" onclick="viewDoc(<?php echo $row['id'];?>);"><span>View Document</span></button></blockquote>
                                    <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"   onclick="updateStatus(<?php echo $row['id']; ?>);"><i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span>Approve</span></button>
                                    <button class="btn btn-default comment" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"><i class="glyphicon glyphicon-flash" style="color:#f9d616;"></i><span style="color:#f9d616;">Chat</span></button>
                                </li>
                            </div>
                        </ul>
                        <?php
                    }
                }
                ?>
                <?php
            }
        }
        ?>
    </div>



</div>

<div class="modal fade" id="viewDocs" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Document of Teacher</h4>
            </div>
            <div class="modal-body">
                <div id="images">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="./custom/js/plans.js"></script>
</body>
</html>
