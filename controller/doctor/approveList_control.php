<?php
include '../../model/doctor_db.php';

session_start();

if(!isset($_POST['input'])){
$mydb = new Model();
$conObj = $mydb->OpenCon();
$approved = $mydb->approvedApp($conObj, $_SESSION['d_id']);
  $approvedData = []; 
    
    if ($approved) {
        foreach ($approved as $approve) {
            $approvedData[] = [
                'app_id' => $approve['app_id'],
                'p_id' => $approve['p_id'],
                'p_name' => $approve['p_name'],
                'p_gender' => $approve['p_gender'],
                'stime' => $approve['stime'],
                'note' => $approve['note']
            ];
        }
    } else {
        $approvedData = []; }
    }
        

$str="";
if(isset($_POST['input'])){
    $str="";
   // echo $str;
    $input = $_POST['input'];
  //  echo $input;
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->SearchApproveList($conObj, $input);
    foreach($result as $document)
    {
       $str = $str . "<tr><td>".$document['app_id']."</td>";
       $str = $str . "<td>".$document['p_id']."</td>";
       $str = $str . "<td>".$document['p_name']."</td>";
       $str = $str . "<td>". $document['p_gender']. "</td>";
       $str = $str . "<td>". $document['stime']. "</td>";
       $str = $str .  "<td>". $document['note']. "</td>";
       $str = $str . "<td><button type='submit'  >Set Time</button>
       <button type='submit' id='".$document['app_id']."' onclick='demo(this.id)' >Message</button></td>
      </tr>";
     
    }
    
  echo $str;  
} ?>

