<?php
use LDAP\Result;
set_include_path(dirname(__FILE__)."/../../");
require 'mongo/vendor/autoload.php';


use MongoDB\Driver\ServerApi;
class Model
{

    function OpenCon(){
      $uri = 'mongodb+srv://ashiq:ashiq@cluster0.1vw1o0y.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
        $apiVersion = new ServerApi(ServerApi::V1);
        $conn= new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
        return $conn;
    }
    function loginCheck($conn,$email,$pass){
      
      $collection = $conn->online_health->doctor;
        $cursor = $collection->findOne([
            'email' => $email,
            'pass' => $pass,
        ]);
        return $cursor;
  }
    
  
    function AddDocInfo($conn,$name, $email,$gender,$cat,$pnumber,$lnumber,$place, $pass){
     
          $collection = $conn->online_health->counter;
          $cursor = $collection->find();
          foreach($cursor as $document){
              $count= (Int)$document["d_id"];
          }
          $collection->updateOne([
              'd_id'=>$count],
              ['$set' => ["d_id" => $count+1]]
          );
          $count++;
          $collection = $conn->online_health->doctor;
          
          $result=$collection->insertOne([
              "d_id" => (string)$count,
              "name"=>$name,
             
              "email"=>$email,
              "gender" => $gender,
              'cat' => $cat,
              "pnumber"=> $pnumber,
              'lnumber' => $lnumber,
              'place' => $place,
              'pass' => $pass,
             
          ]); 
          return $result->getInsertedCount();
      }
    
      function checkEmail($conn, $email){
        return $this->ShowProfile($conn, $email);   
            
    }
    function ShowProfile($conn, $email)
    {
        $collection = $conn->online_health->doctor;
        $cursor = $collection->findOne([
            'email' => $email,
        ]);
        return $cursor;
    }
    function updatePassword($conn, $email, $pass){
        $collection = $conn->online_health->doctor;
        $cursor = $collection->updateOne([
            'email' => $email],
            ['$set' => ['pass' => $pass]]
        );
        return $cursor->getModifiedCount();
    }
   /* function ProfileInfo($conn,$table,$email)
    {
        $sql = "SELECT *  FROM $table WHERE email='$email'";
        $result = $conn->query($sql);
        return $result;
    }*/

  /*function UpdateProfile($conn,$table, $email, $fname, $pnumber, $pass)
    {
        $sql = "UPDATE $table SET fname='$fname', pnumber='$pnumber', pass='$pass'  WHERE email='$email'";
        $result = $conn->query($sql);
        return $result;
    }*/
    function UpdateProfile($conn, $email,$name, $pnumber, $pass){
        $collection = $conn->online_health->doctor;
        $cursor = $collection->updateOne([
            'email' => $email,
           // 'pass' => $pass
        ],
            ['$set' => ['name' => $name,
                       'pnumber' => $pnumber,
                       'pass' => $pass
                       ]]
        );
        return $cursor;
    }
    
function UploadDocument($conn,$table, $email, $photo, $nid, $medical)
{
    $sql= "INSERT INTO $table (email, photo, nid, medical) VALUES ('$email', '$photo', '$nid', '$medical')";
    $result= $conn->query($sql);
    return $result;
}

function appointmentCheck($conn,$table, $name,$age, $gender,$email){
  $sql="INSERT INTO $table (name,age,gender,email) VALUES 
  ('$name','$age', '$gender', '$email')";
 $result= $conn->query($sql);
 return $result;
} 

 

//"INSERT INTO appointment (name, age, gender, email) VALUES ('rahim', 20, 'male', 'rahim@gmail.com')";


}


?>


