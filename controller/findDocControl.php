<?php
include '../model/patient_db.php';
   $str = "";
   $mydb = new Model();
   $conObj = $mydb->OpenCon();
   $result = $mydb->docList($conObj);
   foreach ($result as $document) {
      $str = $str . "<tr><td>" . $document['name'] . "</td>";
      $str = $str . "<td>" . $document['cat'] . "</td>";
      $str = $str . "<td>" . $document['gender'] . "</td>";
      $str = $str . "<td>" . $document['place'] . "</td>";
   }
