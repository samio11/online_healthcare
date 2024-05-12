<?php
include '../../model/medical_assist_db.php';
if(!isset($_POST['input'])){
$str="";
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->patList($conObj);

foreach($result as $document)
    {
       $str = $str . "<tr><td>".$document['p_id']."</td>";
       $str = $str . "<td>".$document['name']."</td>";
       $str = $str . "<td>".$document['email']."</td>";
       $str = $str . "<td>".$document['gender']."</td>";
       $str = $str . "<td>".$document['height']."</td>";
       $str = $str . "<td>".$document['weight']."</td>";
       $str = $str . "<td>".$document['blood']."</td>";
       $str = $str . "<td>".$document['diabetes']."</td>";
      
    }
    
}
   if(isset($_POST['input'])){
        $str="";
        $input = $_POST['input'];
        echo $input;
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->liveSearch3($conObj, $input);
        foreach($result as $document)
        {
            
       $str = $str . "<tr><td>".$document['p_id']."</td>";
       $str = $str . "<td>".$document['name']."</td>";
       $str = $str . "<td>".$document['email']."</td>";
       $str = $str . "<td>".$document['gender']."</td>";
       $str = $str . "<td>".$document['height']."</td>";
       $str = $str . "<td>".$document['weight']."</td>";
       $str = $str . "<td>".$document['blood']."</td>";
       $str = $str . "<td>".$document['diabetes']."</td>";
        
        }
      echo $str;  
    }
    if(isset($_POST['return'])){
        header("Location: ../../view/medical_assist/homepage.php"); 
    }
?>