<?php
//set_include_path(dirname(__FILE__) . "/..//../");
//require 'mongo\vendor/autoload.php';
require '../../mongodbphp/vendor/autoload.php';

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
            $count= (int)$document["ma_id"];
        }
        $collection->updateOne([
            'ma_id'=>$count],
            ['$set' => ["ma_id" => $count+1]]
        );
        $count++;
        
        $collection = $conn->online_health->medical_assist;
        $cursor= $collection->insertOne([
            'ma_id' => (string) $count,
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
      $collection = $conn->online_health->medical_assist;
      $cursor = $collection->updateOne(
          [
              'email' => $email
          ],
          ['$set' => ['password' => $password]]
      );
      return $cursor->getModifiedCount();
  }

  function UploadPic($conn, $email, $photo){
        

    $collection = $conn->online_health->medical_assist;
    $cursor = $collection->updateOne([
        'email' => $email],
        
        ['$set' => ['photo' => $photo]]
    );
    return $cursor;
}
function removePicture($conn, $email){
    $collection = $conn->online_health->medical_assist;
    $cursor = $collection->updateOne([
        'email' => $email],
        ['$set' => ['photo' => ""]]
    );
    return $cursor;
}
  
function View_appointments($conn) {
  $collection = $conn->online_health->appointment;
  $cursor = $collection->find();
  return $cursor;
}

function ViewPresList($conn, $pres_id){
    $collection = $conn->online_health->doctor_prescribed;
    $cursor = $collection->findOne([
        'pres_id' => $pres_id,
    ]);
    return $cursor;
} 
function updatePresc($conn,$pres_id,$app_id,$p_id,$p_name,$p_email,$p_gender, $height,$weight,$bg,$dia,$appdate,$stime,$d_name,$prescribed,$test)
  {
      $collection = $conn->online_health->doctor_prescribed;
      $cursor = $collection->updateOne(
          [
              'pres_id' => $pres_id
          ],
          ['$set' => ['p_name' => $p_name,
                       'p_email' => $p_email,
                       'p_gender' => $p_gender,
                       'height' => $height,
                       'weight' => $weight,
                       'bg' => $bg,
                       'dia'=> $dia,
                       'appdate'=> $appdate,
                       'stime'=> $stime,
                       'd_name'=> $d_name,
                       'status'=> 'ready'
                     ]]
      );
      return $cursor;
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

    function prescription_List($conn)
    {
        $collection = $conn->online_health->doctor_prescribed;
        $cursor = $collection->find();
        return $cursor;
    }
    function liveSearch1($conn, $input)
    {
        $collection = $conn->online_health->doctor_prescribed;
        $cursor = $collection->find([
            '$or' => [
                ["pres_id" => new Regex($input, "i")],
                ["app_id" => new Regex($input, "i")],
                ["p_id" => new Regex($input, "i")],
                ["prescribed" => new Regex($input, "i")],
                ["tests" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }
    /*
    function prescription($conn, $pres_id)
    {
        $collection = $conn->online_health->doctor_prescribed;
        $cursor = $collection->findOne([
            'pres_id' => $pres_id,
        ]);
        return $cursor;
    }
    */
function billing($conn)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find();
        return $cursor;
    }
function liveSearch2($conn, $input)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find([
            '$or' => [
                ["app_id" => new Regex($input, "i")],
                ["p_id" => new Regex($input, "i")],
                ["p_name" => new Regex($input, "i")],
                ["status" => new Regex($input, "i")],
                ["payment" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }

    function ViewAppo($conn, $app_id){
        $collection = $conn->online_health->appointment;
        $cursor = $collection->findOne([
            'app_id' => $app_id,
        ]);
        return $cursor;
    } 
    function updateAppointment($conn, $app_id,$amount)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->updateOne(
            [
                'app_id' => $app_id
            ],
            ['$set' => ['amount' => $amount]]
        );
        return $cursor;
    }
    function patList($conn)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->find();
        return $cursor;
    }
    function liveSearch3($conn, $input)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->find([
            '$or' => [
                ["p_id" => new Regex($input, "i")],
                ["name" => new Regex($input, "i")],
                ["email" => new Regex($input, "i")],
                ["gender" => new Regex($input, "i")],
                ["height" => new Regex($input, "i")],
                ["weight" => new Regex($input, "i")],
                ["blood" => new Regex($input, "i")],
                ["diabetes" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }
  } 
    

