<?php
set_include_path(dirname(__FILE__) . "/..//../");
require 'mongo\vendor/autoload.php';

use MongoDB\Driver\ServerApi;
use MongoDB\BSON\Regex;


class Model
{

  function OpenCon()
  {
    $uri = 'mongodb+srv://ashiq:ashiq@cluster0.1vw1o0y.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
    $apiVersion = new ServerApi(ServerApi::V1);
    $conn = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
    return $conn;
  }
  function autoIncrement($conn)
  {
    $collection = $conn->online_health->counter;
    $cursor = $collection->find();
    $count = $cursor['ma_id'];

  }
  function AddMedical_assist($conn,$name,$email,$password,$phone,$gender,$address,$license,$dob,$nationselect)
    {
        $collection = $conn->online_health->counter;
        $cursor = $collection->find();
        foreach($cursor as $document){
            $count= (Int)$document["ma_id"];
        }
        $collection->updateOne([
            'ma_id'=>$count],
            ['$set' => ["ma_id" => $count+1]]
        );
        
        $collection = $conn->online_health->medical_assist;
        $collection->insertOne([
            'ma_id' => $count+1,
            'name'=>$name,
            "email"=>$email,
            "password"=> $password,
            'phone' => $phone,
            'gender' => $gender,
            'address' => $address,
            'license'=> $license,
            'dob' => $dob,
            'nationselect' => $nationselect
           
        ]); 
        return $cursor->getInsertedCount();
      }
        function login($conn, $email, $password){
          $collection = $conn->online_health->medical_assist;
          $cursor = $collection->findOne([
              'email' => $email,
              'password' => $password,
          ]);
          return $cursor;
      }
      function ViewProfile($conn, $email){
        $collection = $conn->online_health->medical_assist;
        $cursor = $collection->findOne([
            'email' => $email,
        ]);
        return $cursor;
    } 
    function UpdateProfile($conn,$email,$name,$phone,$password,$address){
      $collection = $conn->online_health->medical_assist;
      $cursor = $collection->updateOne([
          'email' => $email,
        
      ],
          ['$set' => ['name' => $name,
                     'phone' => $phone,
                     'password' => $password,
                     'address' => $address
                     ]]
      );
      return $cursor;
  }
    
    function checkEmail($conn, $email){
      return $this->ViewProfile($conn, $email);       
  }

    function UploadPhoto($conn, $email, $profilePic){
        

      $collection = $conn->online_health->medical_assist;
      $cursor = $collection->updateOne([
          'email' => $email],
          
          ['$set' => ['profilePic' => $profilePic]]
      );
      return $cursor;
  }
  function removePicture($conn, $email){
      $collection = $conn->online_health->medical_assist;
      $cursor = $collection->updateOne([
          'email' => $email],
          ['$set' => ['profilePic' => ""]]
      );
      return $cursor;
  }
  //Viewing all doctor's list
  function View_docs($conn) {
    $collection = $conn->online_health->doctor;
    $cursor = $collection->find();
    return $cursor;
}
function View_appointments($conn) {
  $collection = $conn->online_health->appointment;
  $cursor = $collection->find();
  return $cursor;
}
function AddPrescription($conn,$p_name,$p_email,$p_gender,$height,$weight,$bg,$dia,$appdate,$d_name,$med,$tests)
    {
        $collection = $conn->online_health->counter;
        $cursor = $collection->find();
        foreach($cursor as $document){
            $count= (Int)$document["pres_id"];
        }
        $collection->updateOne([
            'pres_id'=>$count],
            ['$set' => ["pres_id" => $count+1]]
        );
        
        $collection = $conn->online_health->presription;
        $collection->insertOne([
            'pres_id' => $count+1,
            'p_name'=>$p_name,
            "p_email"=>$p_email,
            'p_gender' => $p_gender,
            'height' => $height,
            'weight'=> $weight,
            'bg' => $bg,
            'dia' => $dia,
            'appdate' => $appdate,
            'd_name' => $d_name,
            'med' => $med,
            'tests' => $tests
           
        ]); 
        return $cursor->getInsertedCount();
      }

}

