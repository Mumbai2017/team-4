<?php

include 'db_connect.php';

$id = $_POST['id'];
echo $id;
$sql = "UPDATE plan SET approved_status = 1 WHERE id=".$id ;
$query = $connect->query($sql);

?>