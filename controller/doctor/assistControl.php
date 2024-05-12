<?php
include '../../model/doctor_db.php';

session_start();
$str="";
//echo "str";

if(!isset($_POST['input'])){

$mydb = new Model();
$conObj = $mydb->OpenCon();
$assist = $mydb->ShowAssistant($conObj);

$assistData = []; 

if ($assist) {
    foreach ($assist as $assistant) {
        $assistData[] = [
            'ma_id' => $assistant['ma_id'],
            'name' => $assistant['name'],
           
          
        ];
    }
}else {
    $assistData = []; }
}
   
    if(isset($_POST['input'])){
        $str="";
        $input = $_POST['input'];
        echo $input;
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->liveSearchAssist($conObj, $input);
        foreach($result as $document)
        {
           $str = $str . "<tr><td>".$document['ma_id']."</td>";
           $str = $str . "<td>".$document['name']."</td>";
           $str = $str . "<td><button type='submit'  id='".$document['ma_id']."' onclick='demo(this.id)' >Send documents</button></td></tr>";
          // $str = $str . "<td><button type="submit" name="doc" id="doc"' onclick='demo(this.id)' >send document</button></td></tr>";
          // $str = $str . "<td><button type='button' id='".$document['d_id']."' onclick='demo(this.id)' >Take Appointment</button></td></tr>";
        }
      echo $str;  
    }
    if(isset($_POST['doc'])){

        header("Location: ../../view/doctor/document.php");

    }



?>












