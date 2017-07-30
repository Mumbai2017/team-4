<?php

include 'db_connect.php';
include '../Mail.php';

$id = $_POST['id'];

$sql = "UPDATE plan SET approved_status = 1 WHERE id=".$id ;
$query = $connect->query($sql);

$sql_2 = "SELECT * FROM plan WHERE id=".$id;
$query_2 = $connect->query($sql_2);

if($query_2->num_rows > 0) {
    while ($row = $query_2->fetch_array()) {
        $sql_3 = "SELECT * FROM users WHERE id=".$row['user_id'];
        $query_3 = $connect->query($sql_3);
        if($query_3->num_rows > 0){
            while ($row_2 = $query_3->fetch_array()){
                $email = $row_2['email'];
                Mail::sendMail('Your Plan has been Successfully verified','Thankyou',$email);
            }
        }
    }
}

?>