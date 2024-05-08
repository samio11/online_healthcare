<?php
set_include_path(dirname(__FILE__) . "/..//../");
require 'mongo\vendor/autoload.php';

use MongoDB\Driver\ServerApi;



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
    function UploadDocument($conn, $email, $photo){
        

      $collection = $conn->online_health->patient;
      $cursor = $collection->updateOne([
          'email' => $email],
          
          ['$set' => ['photo' => $photo]]
      );
      return $cursor;
  }
  function removePicture($conn, $email){
      $collection = $conn->online_health->patient;
      $cursor = $collection->updateOne([
          'email' => $email],
          ['$set' => ['photo' => ""]]
      );
      return $cursor;
  }

}

