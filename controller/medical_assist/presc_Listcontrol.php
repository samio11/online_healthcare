<?php
include '../../model/medical_assist_db.php';
if(!isset($_POST['input'])){
$str="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->prescription_List($conObj);

foreach($result as $document)
    {
       $str = $str . "<tr><td>".$document['pres_id']."</td>";
       $str = $str . "<td>".$document['p_name']."</td>";
       $str = $str . "<td>".$document['p_email']."</td>";
       $str = $str . "<td>".$document['p_gender']."</td>";
       $str = $str . "<td>".$document['height']."</td>";
       $str = $str . "<td>".$document['weight']."</td>";
       $str = $str . "<td>".$document['bg']."</td>";
       $str = $str . "<td>".$document['dia']."</td>";
       $str = $str . "<td>".$document['appdate']."</td>";
       $str = $str . "<td>".$document['d_name']."</td>";
       $str = $str . "<td>".$document['med']."</td>";
       $str = $str . "<td>".$document['tests']."</td>";
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
        {$str = $str . "<tr><td>".$document['pres_id']."</td>";
            $str = $str . "<td>".$document['p_name']."</td>";
            $str = $str . "<td>".$document['p_email']."</td>";
            $str = $str . "<td>".$document['p_gender']."</td>";
            $str = $str . "<td>".$document['height']."</td>";
            $str = $str . "<td>".$document['weight']."</td>";
            $str = $str . "<td>".$document['bg']."</td>";
            $str = $str . "<td>".$document['dia']."</td>";
            $str = $str . "<td>".$document['appdate']."</td>";
            $str = $str . "<td>".$document['d_name']."</td>";
            $str = $str . "<td>".$document['med']."</td>";
            $str = $str . "<td>".$document['tests']."</td>";
        
        }
      echo $str;  
    }
    if(isset($_POST['return'])){
        header("Location: ../../view/medical_assist/homepage.php"); 
    }
?>