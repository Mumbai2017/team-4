<?php
/**
 * Created by PhpStorm.
 * User: Sumeet
 * Date: 29-07-2017
 * Time: 19:12
 */

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cfg_project";

$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
} else {
    // echo "Successfully connected";
}
?>