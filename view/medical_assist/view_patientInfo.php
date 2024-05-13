<?php include "../../controller/medical_assist/pat_infocontrol.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Additional Info</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/docList_page.css">
</head>
<body>
    <div class="docmain">
    <h1 style=" color: rgb(58, 48, 130);">Patient's Additional Info</h1>
        <input type="text" id="live_search" placeholder="Search here..." onkeyup="liveSearch3(this.value)">
        
        <table class="text">       
        <tr>
            <th>P_ID</th>
            <th>P_Name</th>
            <th>P_Email</th>
            <th>Gender</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Blood group</th>
            <th>Diabetes</th>
            
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