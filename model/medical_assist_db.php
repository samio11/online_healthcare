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
        $cursor= $collection->insertOne([
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
    
  function checkEmail($conn, $email)
  {
      return $this->ViewProfile($conn, $email);
  }
  function updatePassword($conn, $email, $password)
  {
      $collection = $conn->online_health->patient;
      $cursor = $collection->updateOne(
          [
              'email' => $email
          ],
          ['$set' => ['password' => $password]]
      );
      return $cursor->getModifiedCount();
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
        
        $collection = $conn->online_health->prescription;
        $cursor = $collection->insertOne([
            'pres_id' => (string) ($count + 1),
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
      function docList($conn)
    {
        $collection = $conn->online_health->doctor;
        $cursor = $collection->find();
        return $cursor;
    }
    function liveSearch($conn, $input)
    {
        $collection = $conn->online_health->doctor;
        $cursor = $collection->find([
            '$or' => [
                ["name" => new Regex($input, "i")],
                ["email" => new Regex($input, "i")],
                ["gender" => new Regex($input, "i")],
                ["cat" => new Regex($input, "i")],
                ["pnumber" => new Regex($input, "i")],
                ["lnumber" => new Regex($input, "i")],
                ["place" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }
    /*function doctor($conn, $d_id)
    {
        $collection = $conn->online_health->doctor;
        $cursor = $collection->findOne([
            'd_id' => $d_id,
        ]);
        return $cursor;
    }
    */
    function prescription_List($conn)
    {
        $collection = $conn->online_health->prescription;
        $cursor = $collection->find();
        return $cursor;
    }
    function liveSearch1($conn, $input)
    {
        $collection = $conn->online_health->prescription;
        $cursor = $collection->find([
            '$or' => [
                ["pres_id" => new Regex($input, "i")],
                ["p_name" => new Regex($input, "i")],
                ["p_email" => new Regex($input, "i")],
                ["p_gender" => new Regex($input, "i")],
                ["height" => new Regex($input, "i")],
                ["weight" => new Regex($input, "i")],
                ["bg" => new Regex($input, "i")],
                ["dia" => new Regex($input, "i")],
                ["appdate" => new Regex($input, "i")],
                ["d_name" => new Regex($input, "i")],
                ["med" => new Regex($input, "i")],
                ["tests" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }

  function ViewPresc($conn, $pres_id){
      $collection = $conn->online_health->prescription;
      $cursor = $collection->findOne([
          'pres_id' => $pres_id,
      ]);
      return $cursor;
  } 
  function Presc_update($conn,$email,$name,$phone,$password,$address){
    $collection = $conn->online_health->prescription;
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
}

