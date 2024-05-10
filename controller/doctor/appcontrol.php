<?php
/*
include '../../model/doctor_db.php';

session_start();

// Check if the user is logged in as a doctor
if (!isset($_SESSION["d_id"])) {
    header("Location: login.php");
    exit();
}
$mydb = new Model();
$conObj = $mydb->OpenCon();
$appointments = $mydb->ShowAppointment($conObj, $_SESSION['d_id']);

if ($appointments) {
    foreach ($appointments as $appointment) {

    $_SESSION['app_id']= $appointment['app_id'];
    $_SESSION['p_id']= $appointment['p_id'];
    $_SESSION['p_name']= $appointment['p_name'];
    $_SESSION['p_gender']= $appointment['p_gender'];
    $_SESSION['time']= $appointment['time'];
    $_SESSION['note']= $appointment['note'];

    }
} else {
    echo "<tr><td colspan='6'>No appointments found</td></tr>";
}
*/

include '../../model/doctor_db.php';

session_start();

// Check if the user is logged in as a doctor
if (!isset($_SESSION["d_id"])) {
    header("Location: login.php");
    exit();
}

$mydb = new Model();
$conObj = $mydb->OpenCon();
$appointments = $mydb->ShowAppointment($conObj, $_SESSION['d_id']);

$appointmentData = []; 

if ($appointments) {
    foreach ($appointments as $appointment) {
        $appointmentData[] = [
            'app_id' => $appointment['app_id'],
            'p_id' => $appointment['p_id'],
            'p_name' => $appointment['p_name'],
            'p_gender' => $appointment['p_gender'],
            'time' => $appointment['time'],
            'note' => $appointment['note']
        ];
    }
} else {
    $appointmentData = []; }


  $approved = $mydb->approvedApp($conObj, $_SESSION['d_id']);
  $approvedData = []; 
    
    if ($approved) {
        foreach ($approved as $approve) {
            $approvedData[] = [
                'app_id' => $approve['app_id'],
                'p_id' => $approve['p_id'],
                'p_name' => $approve['p_name'],
                'p_gender' => $approve['p_gender'],
                'stime' => $approve['stime'],
                'note' => $approve['note']
            ];
        }
    } else {
        $approvedData = []; }





if(isset($_REQUEST['set_time'])){
    header("Location: ../../view/doctor/approve_app.php");

 
}

if(isset($_REQUEST['decline'])){
  
  
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
  
    $declined = $mydb->declineApp($conObj, $_REQUEST['decline']);
    header("Location: ../../view/doctor/app.php");


}













?>






