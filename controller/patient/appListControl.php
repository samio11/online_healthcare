<?php 
    include '../../model/patient_db.php';
    session_start();
    $pid = $_SESSION['p_id'];
    echo $pid;
    $str='';
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->viewAppointment($conObj, $pid);
    
    
    
    
    foreach($result as $document){
        $str .= "<tr><td>".$document['d_id']."</td>";
        $str .= "<td>".$document['time']."</td>";
        $str .= "<td>".$document['note']."</td>";
        $str .= "<td>".$document['status']."</td></tr>";
        
        
    }
    



    ?>