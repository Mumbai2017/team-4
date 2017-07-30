<?php
session_start();

require_once 'db_connect.php';

if(! $_SESSION['user_id']){
    header('location: http://localhost/team-4/team-4/PHP-API/index.php');
}
?>