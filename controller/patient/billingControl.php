<?php
include '../../model/patient_db.php';

$pid = $_SESSION['p_id'];
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->paymentApp($conObj, $pid, 'unpaid');
$dueApp = [];
if ($result) {
    foreach ($result as $appointment) {
        $dueApp[] = [
            'app_id' => $appointment['app_id'],
            'd_name' => $appointment['d_name'],
            'd_cat' => $appointment['d_cat'],
            'stime' => $appointment['stime'],
        ];
    }
} else {
    $appointmentData = [];
}
$dstr = '';
$result = $mydb->paymentApp($conObj, $pid, 'paid');
foreach ($result as $document) {
    $dstr .= "<tr><td>" . $document['app_id'] . "</td>";
    $dstr .= "<td>" . $document['d_name'] . "</td>";
    $dstr .= "<td>" . $document['d_cat'] . "</td>";
    $dstr .= "<td>" . $document['amount'] . "</td>";
    $dstr .= "<td>" . $document['trx'] . "</td></th>";
    $dstr .= "<td>" . $document['trx_date'] . "</td></th>";
}
