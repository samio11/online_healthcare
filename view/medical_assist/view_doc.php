
<?php include "../../controller/medical_assist/doc_Listcontrol.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor's List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/docList_page.css">
</head>
<body>
    <div class="docmain">
        <h1>Doctor's List</h1>
        <input type="text" id="live_search" placeholder="Search here..." onkeyup="liveSearch(this.value)">
        
        <table class="text">       
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Speciality</th>
            <th>Phone Number</th>
            <th>Valid License</th>
            <th>Address</th>
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

