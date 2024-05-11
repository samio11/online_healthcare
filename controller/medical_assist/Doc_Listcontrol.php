<?php
include '../../model/medical_assist_db.php';
if(!isset($_POST['input'])){
$str="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->docList($conObj);

foreach($result as $document)
    {
       $str = $str . "<tr><td>".$document['name']."</td>";
       $str = $str . "<td>".$document['email']."</td>";
       $str = $str . "<td>".$document['gender']."</td>";
       $str = $str . "<td>".$document['cat']."</td>";
       $str = $str . "<td>".$document['pnumber']."</td>";
       $str = $str . "<td>".$document['lnumber']."</td>";
       $str = $str . "<td>".$document['place']."</td>";
      
    }
    
}
   if(isset($_POST['input'])){
        $str="";
        $input = $_POST['input'];
        echo $input;
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->liveSearch($conObj, $input);
        foreach($result as $document)
        {
            $str = $str . "<tr><td>".$document['name']."</td>";
            $str = $str . "<td>".$document['email']."</td>";
            $str = $str . "<td>".$document['gender']."</td>";
            $str = $str . "<td>".$document['cat']."</td>";
            $str = $str . "<td>".$document['pnumber']."</td>";
            $str = $str . "<td>".$document['lnumber']."</td>";
            $str = $str . "<td>".$document['place']."</td>";
        
        }
      echo $str;  
    }
    if(isset($_POST['return'])){
        header("Location: ../../view/medical_assist/homepage.php"); 
    }
?>