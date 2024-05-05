<?php include '../../controller/patient/patientControl.php'; ?>
<html>

<head>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <form method="POST" action="" onsubmit="return validateForm()">
        <fieldset>
            <legend>Patient Registration</legend>
            <table>
                <tr>
                    <td>Full Name</td>
                    <td colspan="3"><input type="text" class="error" name="name" id="name" placeholder="<?php echo $nameError; ?>"></td>
                    <p class="error"> </p>
                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob">
                        <?php echo $dobError; ?></td>

                    <td>Gender:</td>
                    <td><select name="gender" id="gender">
                            <option disabled selected value> Select gender </option>
                            <option name="male">Male</option>
                            <option name="female">Female</option>
                            <option name="others">Others</option>
                        </select></td>
                    <td>
                        <p id="genderError"></p>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="phone">
                        <?php echo $phoneError; ?>

                    <td>Marital Status:</td>
                    <td><select name="marital" id="marital">
                            <option disabled selected value> Select gender </option>
                            <option name="married">Married</option>
                            <option name="single">Single</option>
                        </select></td>
                    <td>
                        <p id="maritalError"></p>
                    </td>
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
                    <td colspan=3><input type="text" name="street" id="address"></td>
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
                    <td colspan=2>
                        <p id="cityError"></p>
                    </td>
                    <td></td>
                    <td colspan=2>
                        <p id="postalError"></p>
                    </td>
                </tr>
                <tr>
                    <td><br> </td>
                </tr>
                <tr>
                    <td colspan=2><input type="submit" value="Login" name="login"></td>
                    <td colspan=2><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>