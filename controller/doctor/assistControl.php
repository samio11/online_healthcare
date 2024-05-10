<?php
include '../../model/doctor_db.php';

session_start();




$mydb = new Model();
$conObj = $mydb->OpenCon();
$assist = $mydb->ShowAssistant($conObj);

$assistData = []; 

if ($assist) {
    foreach ($assist as $assistant) {
        $assistData[] = [
            'ma_id' => $assistant['ma_id'],
            'name' => $assistant['name'],
           
          
        ];
    }
} else {
    $assistData = []; }


 



?>











?>
