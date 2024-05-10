<?php
include '../../model/patient_db.php';
$msg = $_POST['text'];
$room = $_POST['room'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$appresult = $mydb->viewAppById($conObj, $room);
$pname = $appresult['p_name'];
$result = $mydb->chatdatabase($conObj, $msg, $room, date("Y-m-d h:i:sa"), $pname);
