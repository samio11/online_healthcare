<?php include "../../controller/medical_assist/presc_Listcontrol.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Prescription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/prescList_page.css">
    
</head>
<body>
    <div class="docmain">
        <h1>Update Prescription</h1>
        <input type="text" id="live_search" placeholder="Search here..." onkeyup="liveSearch1(this.value)">
        
        <table class="text">       
        <tr>
            <th>Presc. ID</th>
            <th>Appo. ID</th>
            <th>Patient ID</th>
            <th>Prescribed Medicine</th>
            <th>Tests</th>
            <th>Go to</th>
            </tr>
           <tbody id="searchresult">
           <?php echo $str ?>
           </tbody> 
          
        </table>
        <form method="post" action="">
    <button type="submit" name="return" id="return">Homepage</button>
</form>
    </div>
    
</body>

