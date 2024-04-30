<?php
        require '../mongodbphp/vendor/autoload.php';
        use MongoDB\Driver\ServerApi;
/*
// Connection string
$uri = 'mongodb+srv://ashiq:ashiq@cluster0.1vw1o0y.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
// Set the version of the Stable API on the client
$apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);


$collection = $client->online_health->patient;

$cursor = $collection->find();
foreach($cursor as $document){
    echo "Inretest rate: ".$document["interest_rate"]."  "."Loan: ".$document['Loan']."<br>";
}
$collection->insertOne([
    'Borrower'=>35,
    "Loan"=>45000,
    "interest_rate"=> 3,
]);
/*
$collection->deleteOne([
    'Borrower'=>34,
]);*/
/*$collection->updateOne([
    'Borrower'=>1],
    ['$set' => ["Loan" => 69]]
);*/

//var_dump($document);

// connect to mongodb
 /*  $m = new MongoDB\Client();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->sample_guides;
	
   echo "Database sample_guides selected";
   $collection = $db->planets;
   echo "Collection selected succsessfully";
   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }*/
class Model{
    function OpenCon(){
        $uri = 'mongodb+srv://ashiq:ashiq@cluster0.1vw1o0y.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
        $apiVersion = new ServerApi(ServerApi::V1);
        $conn= new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
        return $conn;
    }
    function AddPatient($conn,$name,$dob,$phone,$email,$password)
    {
        $sql ="INSERT INTO patient (name, dob, phone, email, password) VALUES ('$name','$dob','$phone','$email','$password')";
        return $conn->query($sql);   
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
        $sql = "SELECT *  FROM patient WHERE email='$email'";
        return $conn->query($sql);
    }
    function UpdateUser($conn, $email, $name, $phone, $password)
    {
        $sql = "UPDATE patient SET name='$name', phone='$phone', password='$password'  WHERE email='$email'";
        return $conn->query($sql);
    }
    function UploadDocument($conn, $email, $photo, $nid, $medical)
    {
        $sql= "INSERT INTO documents (email, photo, nid, medical) VALUES ('$email', '$photo', '$nid', '$medical')";
        return $conn->query($sql);
    }

    function ShowUser($conn)
    {
        $collection = $conn->online_health->patient;
        $cursor = $collection->find();
        return $cursor;
    }



    
}
?>
?>