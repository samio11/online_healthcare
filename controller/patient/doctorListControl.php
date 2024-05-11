<?php
include '../../model/patient_db.php';
if (!isset($_POST['input'])) {
   $str = "";
   $mydb = new Model();
   $conObj = $mydb->OpenCon();
   $result = $mydb->docList($conObj);
   foreach ($result as $document) {
      $str = $str . "<tr><td>" . $document['name'] . "</td>";
      $str = $str . "<td>" . $document['cat'] . "</td>";
      $str = $str . "<td>" . $document['gender'] . "</td>";
      $str = $str . "<td>" . $document['place'] . "</td>";
      $str = $str . "<td><button type='button' id='" . $document['d_id'] . "' onclick='demo(this.id)' class='docButton'>Take Appointment</button></td></tr>";
   }
}
if (isset($_POST['input'])) {
   $str = "";
   $input = $_POST['input'];
   //echo $input;
   $mydb = new Model();
   $conObj = $mydb->OpenCon();
   $result = $mydb->liveSearch($conObj, $input);
   foreach ($result as $document) {
      $str = $str . "<tr><td>" . $document['name'] . "</td>";
      $str = $str . "<td>" . $document['cat'] . "</td>";
      $str = $str . "<td>" . $document['gender'] . "</td>";
      $str = $str . "<td>" . $document['place'] . "</td>";
      $str = $str . "<td><button type='button'id='" . $document['d_id'] . "' onclick='demo(this.id)' class='docButton'>Take Appointment</button></td></tr>";
   }
   echo $str;
}
