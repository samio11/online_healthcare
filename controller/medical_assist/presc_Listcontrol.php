<?php
include '../../model/medical_assist_db.php';
session_start();
if(!isset($_POST['input'])){
$str="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->prescription_List($conObj);

foreach($result as $document)
    {
       $str = $str . "<tr><td>".$document['pres_id']."</td>";
       $str = $str . "<td>".$document['app_id']."</td>";
       $str = $str . "<td>".$document['p_id']."</td>";
       $str = $str . "<td>".$document['prescribed']."</td>";
       $str = $str . "<td>".$document['test']."</td>";
       $str = $str . "<td><button type='button' id='" . $document['pres_id'] . "' onclick='demo1(this.id)' class='updateButton'>Update Prescription</button></td></tr>";
    }
    
}
   if(isset($_POST['input'])){
        $str="";
        $input = $_POST['input'];
        echo $input;
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->liveSearch1($conObj, $input);
        foreach($result as $document)
        {
       $str = $str . "<tr><td>".$document['pres_id']."</td>";
       $str = $str . "<td>".$document['app_id']."</td>";
       $str = $str . "<td>".$document['p_id']."</td>";
       $str = $str . "<td>".$document['prescribed']."</td>";
       $str = $str . "<td>".$document['test']."</td>";
       $str = $str . "<td><button type='button' id='" . $document['pres_id'] . "' onclick='demo1(this.id)' class='updateButton'>Update Prescription</button></td></tr>";
        }
       echo $str;  
    }
    if(isset($_POST['return'])){
        header("Location: ../../view/medical_assist/homepage.php"); 
    }