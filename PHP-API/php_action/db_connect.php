 <?php
/**
 * Created by PhpStorm.
 * User: Sumeet
 * Date: 29-07-2017
 * Time: 19:12
 */
//
// $localhost = 'localhost';
// $username = "root";
// $password = "";
// $dbname = "cfg_project";

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$host = $url["host"];
$user = $url["user"];
$pwd = $url["pass"];
$dbname = substr($url["path"], 1);

$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
} else {
    // echo "Successfully connected";
}
?>
