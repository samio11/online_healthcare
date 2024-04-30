<?php
class Model
{

    function OpenCon(){
      $conn= new mysqli("localhost","root","","doctor1");
     
      return $conn;
    }
    
    function ProfileInfo($conn,$table,$email)
    {
        $sql = "SELECT *  FROM $table WHERE email='$email'";
        $result = $conn->query($sql);
        return $result;
    }
    function AddDocInfo($conn,$table, $fname,$lname, $email,$pnumber,$lnumber,$place, $pass){
        $sql="INSERT INTO $table (fname,lname,email,pnumber,lnumber,place,pass) VALUES 
        ('$fname','$lname', '$email', '$pnumber', '$lnumber','$place','$pass')";
       $result= $conn->query($sql);
       return $result;
    }
    function loginCheck($conn,$table,$email,$pass){
      $sql = "SELECT email,pass from $table WHERE email='$email' AND pass = '$pass'";
      $result = $conn->query($sql);
      return $result;
  }

  function UpdateProfile($conn,$table, $email, $fname, $pnumber, $pass)
    {
        $sql = "UPDATE $table SET fname='$fname', pnumber='$pnumber', pass='$pass'  WHERE email='$email'";
        $result = $conn->query($sql);
        return $result;
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


