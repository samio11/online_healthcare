<?php
include '../../model/patient_db.php';

$str = "";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->medAssist($conObj);
foreach ($result as $document) {
    $str = $str . "<tr><td>" . $document['name'] . "</td>";
    $str = $str . "<td>" . $document['gender'] . "</td>";
    $str = $str . "<td>" . $document['address'] . "</td>";
    $str = $str . "<td>" . $document['email'] . "</td>";
    $str = $str . "<td>" . $document['phone'] . "</td></tr>";
}
