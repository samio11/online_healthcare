<?php
include '../../model/patient_db.php';

$msg = $_POST['text'];
$ip = $_POST['ip'];
$room = $_POST['room'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->chatdatabase($conObj, $msg, $room, $ip, time());
echo $_SERVER['REMOTE_ADDR'];
 