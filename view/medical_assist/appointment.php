<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
</head>
<body>
    <form method="POST" action=""> <h1> Patient Appointment</h1><br>
        <tr>
            <td>Patient Email:<input type="text" name = "PatientEmail" /></td>
            
        </tr>
        <br>
        <tr>
            <td>Patient Name:<input type="password" name = "PatientName" /></td>
        </tr>
        <br>
        <tr>
            <td>Appointment Time: <input type="text" name = "AppointmentTime" /></td>
        </tr>
        <br>
        <tr>
            <td>Patient Complaint: <input type="text" name = "PatientComplaint" /></td>
        </tr>
        <br>
        <tr>
            <td>Choosen Doctor: <input type="text" name = "ChoosenDoctor" /></td>
        </tr>
        <br>
    <tr>
        <td><input type="submit" name = "CreateAppointment" value="Create Appointment" /></td>
    </tr>
    
    </form>
</body>
</html>