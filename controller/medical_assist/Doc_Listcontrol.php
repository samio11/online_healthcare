<?php
include '../models/mydb.php';

$mydb = new Model();
$conobj = $mydb -> OpenCon();
$result = $mydb -> getDoc_List($conobj);



if(isset($_REQUEST['goback'])){
    
    header("Location:../view/profile.php");
}

?>