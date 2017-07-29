<?php
/**
 * Created by PhpStorm.
 * User: Sumeet
 * Date: 20-07-2017
 * Time: 20:46
 */

include 'db_connect.php';
if(isset($_POST['otp'])){
    $number = $_POST['otp'];
}

$sql = "SELECT * FROM users WHERE mobile_number = ".$number;

if($connect->query($sql) == TRUE){
    $otp = otpGenerate();
    sendSms($otp, $number);
    $valid['success'] = array('success' => false, 'messages' => array());
    $query = "INSERT INTO otp(`id`,`otp_number`,`mobile_number`) VALUES ('','$otp','$number')   ";

    if($connect->query($query) === TRUE){
        $valid['success'] = true;
        $valid['messages'] = 'Successfully Added';
    }else{
        $valid['success'] = false;
        $valid['messages'] = 'Error';
    }
    if($valid['success'] == true){
        header('location: http://localhost/team-4/team-4/PHP-API/otp-verify.php');
    }
}else{
    echo "No such Mobile Number in Database";
}
//echo $number." ";


function otpGenerate(){
    $rand = generateRandomNumber(6);
    return $rand;
}

function generateRandomNumber($length)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendSms($otp, $number){
    $ch = curl_init();
    //add booking id here
    $encoded_message = rawurlencode($otp);
    $options = array (
        CURLOPT_RETURNTRANSFER => true, // return web page
        CURLOPT_HEADER => false, // don't return headers
        CURLOPT_AUTOREFERER => true, // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 60, // timeout on connect
        CURLOPT_TIMEOUT => 60, // timeout on response
        CURLOPT_MAXREDIRS => 10
    ); // stop after 10 redirects
    // apply those options

    curl_setopt_array($ch, $options);

    $msg91_url = "https://control.msg91.com/api/sendhttp.php?authkey=129871AjGCFqqRB5816d010&mobiles=".$number."&message=".$encoded_message."&sender=CEQUE&route=4&country=91";
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
    curl_setopt($ch, CURLOPT_URL, $msg91_url);
    // grab URL and pass it to the browser
    // close cURL resource, and free up system resources
    curl_exec($ch);

}
?>