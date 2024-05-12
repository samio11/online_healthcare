<?php
include '../../model/doctor_db.php';

session_start();


$mydb = new Model();
$conObj = $mydb->OpenCon();
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

        ?>