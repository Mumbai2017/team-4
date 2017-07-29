<?php

include 'php_action/db_connect.php';

$_SESSION['user_id'] = 1;
$sql = "SELECT * FROM plan WHERE user_id=".$_SESSION['user_id'];

$query = $connect->query($sql);

$units = array();

if($query->num_rows > 0){
    while ($row = $query->fetch_array()){
        $id = $row['id'];
        $user_id = $_SESSION['user_id'];
        ?>
        <button class="btn btn-default" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"   onclick="createChat('<?php echo $id ?>','<?php echo $user_id; ?>');"><i class="glyphicon glyphicon-heart" data-aos="flip-right"></i><span>Approve</span></button>
        <?php
    }
}
?>