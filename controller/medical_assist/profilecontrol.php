<?php
include '../models/mydb.php';
session_start();

$mydb = new Model();
$conobj = $mydb -> OpenCon();
$result = $mydb -> getUserInfo($conobj,$_SESSION["Email"]);

if($result->num_rows > 0)
{
    echo "Welcome ";
    foreach($result as $row)

    {
    
        echo $row['name'];
    }
 
}
if(isset($_REQUEST['updateProfile'])){
    
    header("Location:../view/updateProfile.php");
}
if(isset($_REQUEST['ViewDoc_List'])){
    
    header("Location:../view/Doctor_List.php");
}
if(isset($_REQUEST['createPortfolio'])){
    
    header("Location:../view/portfolio.php");
}
?>