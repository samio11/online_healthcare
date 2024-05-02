<html>
<head>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
    </head>
    <body>
        <form method="POST" action="">
            <div class="wrap"> <button type="submit" name="showProfile" id="showProfile">View Profile</button></div>
            <div class="wrap"> <button type="submit" name="updateProfile" id="updateProfile">Update Profile</button></div>
            <div class="wrap"> <button type="submit" name="reqAppointment" id="reqAppointment">Appointments</button></div>
            <div class="wrap"> <button type="submit" name="history" id="history">Medical History</button></div>
            <div class="wrap"> <button type="submit" name="med" id="med">Medicines</button></div>
            <div class="wrap"> <button type="submit" name="message" id="message">Messages</button></div>
            <div class="wrap"> <button type="submit" name="documents" id="documents">Documents</button></div>
            <div class="wrap"> <button type="submit" name="logout" id="logout">Logout</button></div>
        </form>
    </body>
</html>
<?php include '../../controller/patient/homepageControl.php'; ?>