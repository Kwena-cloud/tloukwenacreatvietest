<?php
$to="kwenasefike007@gmail.com";
$username=$_POST['name'];
$email=$_POST['email'];
$service=$_POST['service'];
$message=$_POST['message'];
$body='';

$body.="New Quote Request from: " .$username. "\r\n";
$body.="With email address: " .$email. "\r\n";
$body.="With Service requested: " .$service. "\r\n";
$body.="With description: " .$message. "\r\n";

mail($to, $service, $body);
?>