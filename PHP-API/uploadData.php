<?php
include 'php_action/db_connect.php' ;
session_start();
$_SESSION['user_id']=2;
$user_id = 1 ;
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST){
    $type = explode('.', $_FILES['planImage']['name']);

    $type = $type[count($type)-1];
    $url = 'custom/images/'.uniqid(rand()).'.'.$type;
    print_r($url);
    $unit = 1;
    $chat_id = 1;
    $approved_status = 0;
    if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
        if(is_uploaded_file($_FILES['planImage']['tmp_name'])) {

            if(move_uploaded_file($_FILES['planImage']['tmp_name'], $url)) {
                $sql = "INSERT INTO plan(documents, unit_id, chat_id, approved_status, user_id) VALUES ('$url','$unit','$chat_id','$approved_status','$user_id')";

                if($connect->query($sql) === TRUE) {
                    $valid['success'] = true;
                    $valid['messages'] = "Successfully Added";
                } else {
                    $valid['success'] = false;
                    $valid['messages'] = "Error while adding the members";
                }

            }	else {
                return false;
            }	// /else
        } // if
    }
    $connect->close();
    echo json_encode($valid);
}
?>
