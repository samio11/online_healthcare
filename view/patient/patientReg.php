<?php include '../controller/patientControl.php'; ?>
<html>

<head>
    <script src="../js/myscript.js"></script>
    <link rel="stylesheet" href="../css/mystyle.css">
</head>

<body>
    <form method="POST" action="" "onsubmit="return validateForm()">
        <fieldset>
            <legend>Patient Registration</legend>
            <table>
                <tr>
                    <td>Full Name</td>
                    <td colspan="3"><input type="text" name="name" id="name" onkeyup="loadDoc()">
                        <?php echo $nameError; ?>
                        <?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob">
                        <?php echo $dob; ?>
                        <?php echo $dobError; ?></td>

                    <td>Gender:</td>
                    <td><select id="gender">
                            <option disabled selected value> Select gender </option>
                            <option name="male">Male</option>
                            <option name="female">Female</option>
                            <option name="others">Others</option>
                        </select></td>
                        <td><p id="genderError"></p></td>
                </tr>

                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="phone">
                        <?php echo $phoneError; ?>
                        <?php echo $phone; ?></td>

                    <td>Marital Status:</td>
                    <td><select id="marital">
                            <option disabled selected value> Select gender </option>
                            <option name="married">Married</option>
                            <option name="single">Single</option>
                        </select></td>
                        <td><p id="maritalError"></p></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email">
                        <?php echo $emailError; ?>
                        <?php echo $email; ?></td>

                    <td>Password:</td>
                    <td><input type="text" name="password">
                        <?php echo $passwordError; ?></td>
                </tr>

                <tr>
                    <td>Street Address</td>
                    <td colspan=3><input type="text" name="city" id="address"></td>
                    <td>
                        <p id="add"></p>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" id="city"></td>
                    
                    <td>Postal Code</td>
                    <td><input type="text" name="postal" id="postal"></td>
                    
                </tr>
                <tr>
                    <td colspan=2><p id="cityError"></p></td>
                    <td></td><td colspan=2><p id="postalError"></p></td>
                </tr>
                <tr>
                    <td><br> </td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" value="Login" name="login"></td>
                    <td colspan=2><input type="submit" value="Submit" name="submit"></td>
                </tr>
                <tr>
                    <td>
                        <p id="demo"></p>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>