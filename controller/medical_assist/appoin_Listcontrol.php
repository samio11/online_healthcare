<?php
include '../../model/medical_assist_db.php';
session_start();
$mydb = new Model();
$conObj = $mydb->OpenCon();
$cursor = $mydb->View_appointments($conObj);

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $filteredAppointments = [];
    foreach ($cursor as $appoin) {
        if(stripos($appoin['p_name'], $search) !== false ||
           stripos($appoin['p_gender'], $search) !== false ||
           stripos($appoin['p_address'], $search) !== false ||
           stripos($appoin['d_name'], $search) !== false ||
           stripos($appoin['d_gender'], $search) !== false ||
           stripos($appoin['d_cat'], $search) !== false ||
           stripos($appoin['time'], $search) !== false ||
           stripos($appoin['stime'], $search) !== false ||
           stripos($appoin['payment'], $search) !== false ||
           stripos($appoin['status'], $search) !== false) {
            $filteredAppointments[] = [
                'app_id' => $appoin['app_id'],
                'p_name' => $appoin['p_name'],
                'p_gender' => $appoin['p_gender'],
                'p_address' => $appoin['p_address'],
                'd_name' => $appoin['d_name'],
                'd_gender' => $appoin['d_gender'],
                'd_cat' => $appoin['d_cat'],
                'time' => $appoin['time'],
                'stime' => $appoin['stime'],
                'payment' => $appoin['payment'],
                'note' => $appoin['note'],
                'status' => $appoin['status']
            ];
        }
    }
    $_SESSION['appoins'] = $filteredAppointments;
} else {
    // If search form is not submitted, store all appointments in the session
    $appoins = [];
    foreach ($cursor as $appoin) {
        $appoins[] = [
            'app_id' => $appoin['app_id'],
            'p_name' => $appoin['p_name'],
            'p_gender' => $appoin['p_gender'],
            'p_address' => $appoin['p_address'],
            'd_name' => $appoin['d_name'],
            'd_gender' => $appoin['d_gender'],
            'd_cat' => $appoin['d_cat'],
            'time' => $appoin['time'],
            'stime' => $appoin['stime'],
            'payment' => $appoin['payment'],
            'note' => $appoin['note'],
            'status' => $appoin['status']
        ];
    }
    $_SESSION['appoins_all'] = $appoins; // Store all appointments
    $_SESSION['appoins'] = $appoins; // Set initial display to all appointments
}

if(isset($_REQUEST['goback'])){
    header("Location: ../../view/medical_assist/homepage.php");
}
?>
