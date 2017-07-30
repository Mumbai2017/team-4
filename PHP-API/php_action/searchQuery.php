<?php
include "db_connect.php";


$db = new DB("127.0.0.1", "cfg_project", "root", "");
$tosearch = explode(" ", $_GET['query']);
if (count($tosearch) == 1) {
    $tosearch = str_split($tosearch[0], 2);
}

$whereclause = "";
$paramsarray = array(':body'=>'%'.$_GET['query'].'%');
for ($i = 0; $i < count($tosearch); $i++) {
    if ($i % 2) {
        $whereclause .= " OR name LIKE :p$i ";
        $paramsarray[":p$i"] = $tosearch[$i];
    }
}
$sql = "SELECT id,name FROM users WHERE name LIKE".$whereclause."LIMIT 10".$paramsarray;
$query = $connect->query($sql);

$response = '[';

if($query->num_rows > 0){
    while ($row = $query->fetch_array()){
        $response .= "{";
        $response .= '"id": '.$row['id'].',';
        $response .= '"name": '.$row['names'].'';
        $response .= "},";
    }
}

$response = substr($response, 0, strlen($response)-1);
$response .= "]";

http_response_code(200);
echo $response;
?>