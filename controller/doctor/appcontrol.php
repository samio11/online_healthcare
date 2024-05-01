//login
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method="POST" action="">
        <tr>
            <td>Email: <input type="email" name = "email" /></td>
            <?php echo $emailError; ?>
            <?php echo $email; ?></td>
        </tr>
        <br>
        <tr>
            <td>Password: <input type="pass" name = "pass" id="pass" /></td>
            <?php echo $passError; ?>
            <?php echo $pass; ?></td>
        </tr>
        <br>
    
    <tr>
        <td><input type="submit" name = "Submit" value="Login" /></td>
    </tr>
    
    </form>
</body>
</html>
//regulations<html>

<head>

</head>
<body>
    <form method= "POST" action="">

    <h1>Doctor Registration Form</h1>
    <table>
    <tr><br></tr>
       <tr>
            <td>First Name: </td>
            <td>Last Name: </td>
            </tr>
            
            <tr>
            <td><input type="text" name = "fname" >
            <?php echo $fnameError; ?>
            <?php echo $fname; ?></td>
            
            <td><input type="text" name = "lname" >
            <?php echo $lnameError; ?>
            <?php echo $lname; ?></td>
            </tr>
            <tr><td><br></td></tr>

            
            
       
        <tr>
            <td>Email: </td> 
        
            <td><input type="email" name="email" id = "email" >
            <?php echo $emailError; ?>
            <?php echo $email; ?></td>
            
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Phone number: </td>
            <td><input type="pnumber" name="pnumber" id="pnumber" >
            <?php echo $pnumberError; ?>
            <?php echo $pnumber; ?></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Licence number: </td>
            <td><input type="lnumber" name="lnumber" id="lnumber"  >
            <?php echo $lnumberError; ?>
            <?php echo $lnumber; ?></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Current workplace:</td>
            <td><textarea name="place" id="" cols="30" rows="5" ></textarea>
             <?php echo $placeError; ?>
            <?php echo $place; ?></td>
        </tr>
        <tr><td><br></td></tr>
      

        <tr>
            <td>
            PASSWORD <input type="pass" name="pass" id="pass">
            <?php echo $passError; ?>
            <?php echo $pass; ?></td>
            </td>
        </tr>
        
        <tr><td><br></td></tr> 
        <tr>
            <td>Agreeing to comply with the healthcare policies and regulations</td>
            <td><input type="checkbox" name="" id="" ></td>
            
        </tr>
        <tr><td><br></td></tr> 
        
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name = "SUBMIT"> </td></tr>
          
        
            
    </table>

        
    </form>
</body>
</html>
