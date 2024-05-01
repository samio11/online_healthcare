<?php
include '../models/mydb.php';
$count=1;
$data = array();
$mydb = new Model();
$conObj = $mydb->OpenCon();
$result = $mydb->ShowUser($conObj);
if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()){
            $data[] = $row;
            echo "<h3>User ".$count.": </h3>";
          echo "<table><tr><td>Name:</td><td>".$row["name"]."</td></tr>";
          echo "<tr><td>Date of Birth:</td><td>".$row["dob"]."</td></tr>";
          echo "<tr><td>Phone Number:</td><td>".$row["phone"]."</td></tr>";
          echo "<tr><td>Email:</td><td>".$row["email"]."</td></tr></table>"; 
          echo "<br>";
          $count++;
          $json = json_encode($data);
          //echo $json;
        }

    }
?>
<script type="text/javascript"> var jsonData = "<?=$json?>"</script>
<script type="text/javascript" src="../js/my.js"></script>
