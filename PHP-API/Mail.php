<?php
include_once __DIR__.'/PHPMailer/PHPMailerAutoload.php';
class Mail {
    public static function sendMail($subject, $body, $address) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'sumeet.shahani@ves.ac.in';
        $mail->Password = 'professionalcoder';
        $mail->SetFrom('no-reply@team4.org');
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($address);

        $mail->Send();
    }
}