<?php
include '../models/mongo.php';
session_start();
if(isset($_REQUEST['login'])){
    $_SESSION['email'] = $_REQUEST['email'];
    $mydb = new Model();
    $conObj = $mydb->OpenCon();
    $result = $mydb->login($conObj, $_REQUEST['email'], $_REQUEST['password']);
    if($result > 0)
    {
       header("Location: ../view/homepage.php");
    }
    else echo "not valid";
}
?>