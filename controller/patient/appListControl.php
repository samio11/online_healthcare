<?php
include '../../model/patient_db.php';
//session_start();

$pid = $_SESSION['p_id'];
$astr = $pstr = $dstr = '';
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->approvedApp($conObj, $pid);
$approvedApp = [];
if ($result) {
    foreach ($result as $appointment) {
        $approvedApp[] = [
            'app_id' => $appointment['app_id'],
            'd_name' => $appointment['d_name'],
            'd_gender' => $appointment['d_gender'],
            'd_cat' => $appointment['d_cat'],
            'stime' => $appointment['stime'],
            'note' => $appointment['note'],

        ];
    }
} else {
    $appointmentData = [];
}

$result = $mydb->pendingApp($conObj, $pid);
foreach ($result as $document) {
    $pstr .= "<tr><td>" . $document['d_name'] . "</td>";
    $pstr .= "<td>" . $document['d_gender'] . "</td>";
    $pstr .= "<td>" . $document['d_cat'] . "</td>";
    $pstr .= "<td>" . $document['time'] . "</td>";
    $pstr .= "<td>" . $document['note'] . "</td></th>";
}
$result = $mydb->declinedApp($conObj, $pid);
foreach ($result as $document) {
    $dstr .= "<tr><td>" . $document['d_name'] . "</td>";
    $dstr .= "<td>" . $document['d_gender'] . "</td>";
    $dstr .= "<td>" . $document['d_cat'] . "</td>";
    $dstr .= "<td>" . $document['time'] . "</td>";
    $dstr .= "<td>" . $document['note'] . "</td></th>";
}
