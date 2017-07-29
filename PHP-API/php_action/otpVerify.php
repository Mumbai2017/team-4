<?php
/**
 * Created by PhpStorm.
 * User: Sumeet
 * Date: 20-07-2017
 * Time: 22:33
 */
include "db_connect.php";
session_start();
global $m_number;
$otp = $_POST['verify_otp'];
$query_1 = "SELECT * FROM otp WHERE otp_number = '$otp'";
$result_1 = $connect->query($query_1);

if($result_1->num_rows > 0){
    while ($row = $result_1->fetch_array()){
        $m_number = $row['mobile_number'];
    }

    if(! empty($m_number)){
        $sql = "SELECT * FROM USERS WHERE mobile_number=".$m_number;
        $query = $connect->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_array()){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                
                if($row['type_of_user'] == 'teacher'){
                    header('location: http://localhost/team-4/team-4/PHP-API/view-plans.php');
                }else if($row['type_of_user'] == 'admin'){
                    header('location: http://localhost/team-4/team-4/PHP-API/dashboard.php');
                }
            }
        }
    }
}else{
    echo "Enter the Correct OTP";
}



?>