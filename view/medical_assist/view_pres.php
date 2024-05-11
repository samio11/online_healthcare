<?php include "../../controller/medical_assist/presc_Listcontrol.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor's List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/prescList_page.css">
</head>
<body>
    <div class="docmain">
        <h1>Prescription List</h1>
        <input type="text" id="live_search" placeholder="Search here..." onkeyup="liveSearch1(this.value)">
        
        <table class="text">       
        <tr>
            <th>Presc. ID</th>
            <th>P_Name</th>
            <th>P_Email</th>
            <th>P_Gender</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Blood Group</th>
            <th>Diabetes</th>
            <th>Appointment Date</th>
            <th>D_Name</th>
            <th>Medications</th>
            <th>Tests</th>
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

