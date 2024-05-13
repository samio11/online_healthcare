<?php
include '../../model/medical_assist_db.php';
session_start();
if(isset($_REQUEST['return'])){
    header("Location: ../../view/medical_assist/homepage.php");
  }
if (!isset($_POST['input'])) {
   $str = "";
   $mydb = new Model();
   $conObj = $mydb->OpenCon();
   $result = $mydb->billing($conObj);
   foreach ($result as $document) {
      $str = $str . "<tr><td>" . $document['app_id'] . "</td>";
      $str = $str . "<td>" . $document['p_id'] . "</td>";
      $str = $str . "<td>" . $document['p_name'] . "</td>";
      $str = $str . "<td>" . $document['status'] . "</td>";
      $str = $str . "<td>" . $document['payment'] . "</td>";
      $str = $str . "<td><button type='button' id='" . $document['app_id'] . "' onclick='demo(this.id)' class='billButton'>Set Amount</button></td></tr>";
   }
}
if (isset($_POST['input'])) {
   $str = "";
   $input = $_POST['input'];
   $mydb = new Model();
   $conObj = $mydb->OpenCon();
   $result = $mydb->liveSearch2($conObj, $input);
   foreach ($result as $document) {
    $str = $str . "<tr><td>" . $document['app_id'] . "</td>";
    $str = $str . "<td>" . $document['p_id'] . "</td>";
    $str = $str . "<td>" . $document['p_name'] . "</td>";
    $str = $str . "<td>" . $document['status'] . "</td>";
    $str = $str . "<td>" . $document['payment'] . "</td>";
    $str = $str . "<td><button type='button' id='" . $document['app_id'] . "' onclick='demo(this.id)' class='billButton'>Set Amount</button></td></tr>";
 }
   echo $str;
}