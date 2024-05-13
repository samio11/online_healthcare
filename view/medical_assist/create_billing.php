
<?php include "../../controller/medical_assist/billingcontrol.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Billing</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/medical_assist_myscript.js"></script>
    <link rel="stylesheet" href="../../css/medical_assist/billing_page.css">
</head>
<body>
    <div class="docmain">
        <h1 style=" color: rgb(58, 48, 130);">Billing</h1>
        <input type="text" id="live_search" placeholder="Search here..." onkeyup="liveSearch2(this.value)">
        
        <table class="text">       
        <tr>
            <th>Appo.ID</th>
            <th>P.ID</th>
            <th>P.Name</th>
            <th>Status</th>
            <th>Payment</th>
            <th>Go To</th>
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