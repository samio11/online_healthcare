<?php
include '../controller/portfolioControl.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form method="POST" action=""> <h1> Portfolio Data Entry:</h1><br>

     <table>
        <tr>
            <td>Patient Name:</td><td><input type="text" name = "PatientName" />
            <?php echo $nameError; ?>
            </td>
        </tr>
        
        <tr>
            <td>Patient Email:</td><td><input type="text" name = "PatientEmail" />
            <?php echo $emailError; ?>
            </td>
        </tr>
        
        <tr>
        <td>Gender:</td>
        <td><select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
        </select>
        <?php echo $genderselectError;?>
        </td>
        </tr>
       
        <tr>
        <tr>
            <td>Height:</td><td><input type="text" name = "Height" />
            <?php echo $heightError; ?>
        </td>
            
        </tr>
        <br>
        <tr>
            <td>Weight:</td><td><input type="text" name = "Weight" />
            <?php echo $weightError; ?>
        </td>
            
        </tr>
        <br>
        <tr>
            <td>Blood Group:</td><td><input type="text" name = "BloodGroup" />
            
        </td>
            
        </tr>
        <br>
        <tr>
        <td>Diabetes:</td>
        <td><select name="Diabetes">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        <option value="NotSure">Not Sure</option>
        </select>
        <?php echo $diabetesError; ?>
        </td>
        </tr>
        <tr>
        
<td colspan="2">Date Of Appointment:</td><td><input type="date" name="appointment">
<?php echo $appointmentError; ?>
<?php echo $appointment; ?>
</td>
</tr>
        <tr>
            <td>Patient Complaint:</td><td><input type="text" name = "PatientComplaint" /></td>
        </tr>
        <br>
        <tr>
            <td>Choosen Doctor:</td> <td><input type="text"name = "ChoosenDoctor" />
            <?php echo $choosenDoctorError; ?>
        </td>
        </tr>
        <br>
        <br>
    
    <tr>
        <td><input type="submit" name = "submitPortfolio" value="Submit Portfolio" /></td>
    </tr>
</table>
</form>
</body>
</html>