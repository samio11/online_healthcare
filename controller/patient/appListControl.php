<?php
include '../../model/patient_db.php';
//session_start();

$pid = $_SESSION['p_id'];
$astr = $pstr = $dstr = '';
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->viewApp($conObj, $pid, 'approved',);
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
    $approvedApp = [];
}

$result = $mydb->viewApp($conObj, $pid, 'pending');
foreach ($result as $document) {
    $pstr .= "<tr><td>" . $document['d_name'] . "</td>";
    $pstr .= "<td>" . $document['d_gender'] . "</td>";
    $pstr .= "<td>" . $document['d_cat'] . "</td>";
    $pstr .= "<td>" . $document['time'] . "</td>";
    $pstr .= "<td>" . $document['note'] . "</td></th>";
}
$result = $mydb->viewApp($conObj, $pid, 'declined');
foreach ($result as $document) {
    $dstr .= "<tr><td>" . $document['d_name'] . "</td>";
    $dstr .= "<td>" . $document['d_gender'] . "</td>";
    $dstr .= "<td>" . $document['d_cat'] . "</td>";
    $dstr .= "<td>" . $document['time'] . "</td>";
    $dstr .= "<td>" . $document['note'] . "</td></th>";
}
