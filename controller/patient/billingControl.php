<?php
include '../../model/patient_db.php';



    $pid = $_SESSION['p_id'];
    $str = '';
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->duePayment($conObj, $pid);
    foreach ($result as $document) {
        $str .= "<tr><td>" . $document['d_name'] . "</td>";
        $str .= "<td>" . $document['d_gender'] . "</td>";
        $str .= "<td>" . $document['d_cat'] . "</td>";
        $str .= "<td>" . $document['time'] . "</td>";
        $str .= "<td>" . $document['note'] . "</td>";
        $str .= "<td>" . $document['status'] . "</td>";
        $str .= "<td>" . $document['payment'] . "</td>";
        $str .= "<td><button type='button'  onclick='payment(" . $document['app_id'] . ")' >Pay</button></td></tr>";
    }

