<?php
session_start();
$id = $_GET['id'];
$_SESSION['user_id'] = 1;
$user_id = $_SESSION['user_id'];

$string = "Teacher".$id.$user_id;

?>
<div id="tlkio" data-channel="<?php echo $string; ?>" data-theme="theme--minimal" style="width:250px;height:250px;position: fixed;bottom: 25px;right: 0;"></div><script async src="http://tlk.io/embed.js" type="text/javascript"></script></div>
