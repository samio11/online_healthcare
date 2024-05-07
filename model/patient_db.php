<?php
//set_include_path(dirname(__FILE__) . "/../");
require '../../mongodbphp/vendor/autoload.php';
use MongoDB\Driver\ServerApi;
use MongoDB\BSON\Regex;

class Model
{
    function OpenCon(){
        $uri = 'mongodb+srv://ashiq:ashiq@cluster0.1vw1o0y.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
        $apiVersion = new ServerApi(ServerApi::V1);
        $conn = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
        return $conn;
    }
    function autoIncrement($conn){
        $collection = $conn->online_health->counter;
        $cursor = $collection->find();
        foreach ($cursor as $document) {
            $count = (int)$document["p_id"];
        }
        $collection->updateOne(
            [ 'p_id' => (string)$count ],
            ['$set' => ["p_id" => $count + 1]]
        );
        return $count;
    }
    function AddPatient($conn, $name, $email, $password, $gender, $phone, $dob, $martial, $address){
        $count = $this->autoIncrement($conn);
        $collection = $conn->online_health->patient;
        $cursor = $collection->insertOne([
            'p_id' => $count + 1,
            'name' => $name,
            "email" => $email,
            "password" => $password,
            'gender' => $gender,
            'phone' => $phone,
            'dob' => $dob,
            'marital' => $martial,
            'address' => $address
        ]);
        return $cursor->getInsertedCount();
    }
    function login($conn, $email, $password){
        $collection = $conn->online_health->patient;
        $cursor = $collection->findOne([
            'email' => $email,
            'password' => $password,
        ]);
        return $cursor;
    }
    function ShowProfile($conn, $email){
        $collection = $conn->online_health->patient;
        $cursor = $collection->findOne([
            'email' => $email,
        ]);
        return $cursor;
    }
    function checkEmail($conn, $email){
        return $this->ShowProfile($conn, $email);       
    }
    function updatePassword($conn, $email, $password){
        $collection = $conn->online_health->patient;
        $cursor = $collection->updateOne([
            'email' => $email],
            ['$set' => ['password' => $password]]
        );
        return $cursor->getModifiedCount();
    }
    function updateProfile($conn, $email,$password, $name, $phone,$address){
        $collection = $conn->online_health->patient;
        $cursor = $collection->updateOne([
            'email' => $email,
            'password' => $password],
            ['$set' => ['name' => $name,
                       'phone' => $phone,
                       'address' => $address]]
        );
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
    function docList($conn){
        $collection = $conn->online_health->doctor;
        $cursor = $collection->find();
        return $cursor;
    }
    function liveSearch($conn, $input){
        $collection = $conn->online_health->doctor;
        $cursor = $collection->find([
            '$or' => [
                    ["name"=> new Regex($input,"i")],
                    ["place"=> new Regex($input,"i")],
                    ["lnumber"=> new Regex($input,"i")],
                    ["cat"=> new Regex($input,"i")]
                    ]
        ]);
        return $cursor;
    }
    function doctor($conn, $d_id){
        $collection = $conn->online_health->doctor;
        $cursor = $collection->findOne([
            'd_id' => $d_id,
        ]);
        return $cursor;

    }
}
