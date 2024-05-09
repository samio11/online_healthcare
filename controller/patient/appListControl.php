<?php
include '../../model/patient_db.php';
//session_start();
$pid = $_SESSION['p_id'];
$str = '';
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->viewAppointment($conObj, $pid);




foreach ($result as $document) {
    $str .= "<tr><td>" . $document['d_name'] . "</td>";
    $str .= "<td>" . $document['d_gender'] . "</td>";
    $str .= "<td>" . $document['d_cat'] . "</td>";
    $str .= "<td>" . $document['time'] . "</td>";
    $str .= "<td>" . $document['note'] . "</td>";
    $str .= "<td>" . $document['status'] . "</td></tr>";
}
