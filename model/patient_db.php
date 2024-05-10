<?php
//set_include_path(dirname(__FILE__) . "/../");
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
        foreach ($cursor as $document) {
            $count = (int)$document["p_id"];
        }
        $collection->updateOne(
            ['p_id' => (string)$count],
            ['$set' => ["p_id" => $count + 1]]
        );
        return $count + 1;
    }
    function AddPatient($conn, $name, $email, $password, $gender, $phone, $dob, $martial, $address)
    {
        $count = $this->autoIncrement($conn);
        $collection = $conn->online_health->patient;
        $cursor = $collection->insertOne([
            'p_id' => (string) $count,
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
    function login($conn, $email, $password)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->findOne([
            'email' => $email,
            'password' => $password,
        ]);
        return $cursor;
    }
    function ShowProfile($conn, $email)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->findOne([
            'email' => $email,
        ]);
        return $cursor;
    }
    function checkEmail($conn, $email)
    {
        return $this->ShowProfile($conn, $email);
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
    function updateProfile($conn, $email, $password, $name, $phone, $address)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->updateOne(
            [
                'email' => $email,
                'password' => $password
            ],
            ['$set' => [
                'name' => $name,
                'phone' => $phone,
                'address' => $address
            ]]
        );
        return $cursor;
    }
    function UploadDocument($conn, $email, $photo)
    {


        $collection = $conn->online_health->patient;
        $cursor = $collection->updateOne(
            [
                'email' => $email
            ],

            ['$set' => ['photo' => $photo]]
        );
        return $cursor;
    }
    function removePicture($conn, $email)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->updateOne(
            [
                'email' => $email
            ],
            ['$set' => ['photo' => ""]]
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
                ["place" => new Regex($input, "i")],
                ["gender" => new Regex($input, "i")],
                ["cat" => new Regex($input, "i")]
            ]
        ]);
        return $cursor;
    }
    function doctor($conn, $d_id)
    {
        $collection = $conn->online_health->doctor;
        $cursor = $collection->findOne([
            'd_id' => $d_id,
        ]);
        return $cursor;
    }
    function reqAppointment($conn, $pid, $pname, $pgender, $paddress, $did, $dname, $dcat, $dgender, $time, $note)
    {
        $collection = $conn->online_health->counter;
        $cursor = $collection->find();
        foreach ($cursor as $document) {
            $count = (int)$document["app_id"];
        }
        $collection->updateOne(
            ['app_id' => $count],
            ['$set' => ["app_id" => $count + 1]]
        );
        $collection = $conn->online_health->appointment;
        $cursor = $collection->insertOne([
            'app_id' => (string) ($count + 1),
            'p_id' => $pid,
            'p_name' => $pname,
            'p_gender' => $pgender,
            'p_address' => $paddress,
            "d_id" => $did,
            'd_name' => $dname,
            'd_gender' => $dgender,
            'd_cat' => $dcat,
            "time" => $time,
            'note' => $note,
            'status' => 'pending',
            'payment' => 'unpaid'
        ]);
        return $cursor->getInsertedCount();
    }
    function approvedApp($conn, $pid)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find([
            'p_id' => $pid,
            'status' => 'approved'

        ]);
        return $cursor;
    }
    function pendingApp($conn, $pid)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find([
            'p_id' => $pid,
            'status' => 'pending'

        ]);
        return $cursor;
    }
    function declinedApp($conn, $pid)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find([
            'p_id' => $pid,
            'status' => 'declined'

        ]);
        return $cursor;
    }
    function duePayment($conn, $pid)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->find([
            'p_id' => $pid,
            'payment' => 'unpaid'
        ]);
        return $cursor;
    }
    function viewDueAppointment($conn, $appid)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->findOne([
            'app_id' => $appid
        ]);
        return $cursor;
    }
    function chatdatabase($conn, $msg, $room,  $time, $pname)
    {
        $collection = $conn->online_health->counter;
        $cursor = $collection->find();
        foreach ($cursor as $document) {
            $count = (int)$document["chat"];
        }
        $collection->updateOne(
            ['chat' => $count],
            ['$set' => ["chat" => $count + 1]]
        );
        $collection = $conn->online_health->chat;
        $cursor = $collection->insertOne([
            'sno' => (string) ($count + 1),
            'msg' => $msg,
            'room' => $room,
            'time' => $time,
            'name' => $pname,
            'flag' => 'patient'
        ]);
        return $cursor->getInsertedCount();
    }
    function msgdatabase($conn, $room)
    {
        $collection = $conn->online_health->chat;
        $cursor = $collection->find([
            'room' => $room
        ]);
        return $cursor;
    }
    function viewAppById($conn, $app_id)
    {
        $collection = $conn->online_health->appointment;
        $cursor = $collection->findOne([
            'app_id' => $app_id
        ]);
        return $cursor;
    }
}
