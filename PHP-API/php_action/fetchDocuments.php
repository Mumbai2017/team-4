<?php

include 'db_connect.php';

$id = $_POST['id'];
$sql = "SELECT * FROM plan WHERE id=".$id ;
$query = $connect->query($sql);

if($query->num_rows > 0){
    $row = $query->fetch_array();
}
$connect->close();

echo json_encode($row);
?>