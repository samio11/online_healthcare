<?php
include '../../model/patient_db.php';

$str = "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->viewPrescription($conObj);
$prescription = [];
if ($result) {
    foreach ($result as $pres) {
        $prescription[] = [
            'app_id' => $pres['app_id'],
            'd_name' => $pres['d_name'],
            'appdate' => $pres['appdate'],
        ];
    }
} else {
    $prescription = [];
}
