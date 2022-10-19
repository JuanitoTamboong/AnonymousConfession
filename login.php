<?php
if(isset($_POST['submit']));

date_default_timezone_set('Asia/Manila');
$date = date('m-d-y h:i:sa');
$anonymous = $_POST['anonymous'];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['HTTP_USER_AGENT'];
$file = fopen("loginlist.txt","a+");
$hades = ("Date & Time:". $date."\nAnonymous:". $anonymous."\n\n");

fputs($file,$hades);

fclose($file);
?>
