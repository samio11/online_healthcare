<?php
 include "../models/mongo.php" ;
        if(isset($_REQUEST['Shows'])){
            echo "Button pressed";
        $mydb = new Model();
        $conObj = $mydb->OpenCon();
        $result = $mydb->ShowUser($conObj);
        foreach($result as $document){
            echo "<td>Inretest rate: ".$document["interest_rate"]."</td><td>"."Loan: ".$document['Loan']."</td><br>";
        } 

    }
?>