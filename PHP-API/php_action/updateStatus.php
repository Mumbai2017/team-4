<?php

include 'db_connect.php';
include '../Mail.php';
global $email;
$id = $_POST['id'];

$sql = "UPDATE plan SET approved_status = 1 WHERE id=".$id ;
$query = $connect->query($sql);

$sql_2 = "SELECT * FROM plan WHERE user_id=".$id;
$query = $connect->query($sql_2);

if($query->num_rows > 0){
    while ($row = $query->fetch_array()){
        $email = $row['email'];
    }
}
Mail::sendMail('Your Plan has been Successfully verified','Thankyou',$email);

?>