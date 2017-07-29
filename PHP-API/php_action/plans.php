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
        <div class="col-md-10">
            <?php
                if($plan_in_db->num_rows > 0){
                    while ($row = $plan_in_db->fetch_array()){
                        ?>

                    <?php
                    }
                }
            ?>
        </div>
    </div>
<script src="../custom/js/plans.js"></script>
</body>
</html>
