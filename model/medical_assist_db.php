<?php
class Model
{

    function OpenCon(){
      $conn= new mysqli("localhost","root","","ma");
      return $conn;
    }
    function AddStudent($conn, $name, $email, $password, $PhoneNumber, $nationselect){
        $sql="INSERT INTO ma_register (name,email, password, phonenumber, nationselect) VALUES ('$name', '$email', '$password', '$PhoneNumber', '$nationselect')";
        $result= $conn->query($sql);
        return $result;
    }

    function CheckLoginCredentials($conn, $email, $password){
     $sql ="SELECT email, password from ma_register WHERE Email='$email' AND Password='$password' ";
     $result= $conn->query($sql);
     return $result;
    }

    function getUserInfo($conn,$email) //Shows Info on profile
    {
      $sql = "SELECT * from ma_register WHERE Email='$email' ";
      $result = $conn -> query($sql);
      return $result;
    }
    function UpdateProfile($conn,$email,$name,$phonenumber,$password,$nationselect)
    {
      $sql = "UPDATE ma_register SET name = '$name', phonenumber='$phonenumber', password ='$password', nationselect='$nationselect' WHERE Email='$email'" ;
      $result = $conn -> query($sql);
      return $result;
    }
    function ShowUser($conn,$name)  //Search using ajax
    {
        $sql = "SELECT name,email,phonenumber,nationselect from ma_register WHERE Name ='$name' ";
        return $conn->query($sql);
    }
    function getDoc_List($conn) //Shows Info on Doctors 
    {
      $sql = "SELECT * from doc_list";
      $result = $conn -> query($sql);
      return $result;
    }
    function InsertPortfolio($conn,$name,$email,$gender,$height,$ChoosenDoctor){
      $sql="INSERT INTO pat_portfolio (Pat_name,Pat_email,Pat_gender,Pat_height,Pat_ChosenDoc) VALUES ('$name', '$email','$gender','$height','$ChoosenDoctor')";
      $result= $conn->query($sql);
      return $result;
  }
  }
  ?>