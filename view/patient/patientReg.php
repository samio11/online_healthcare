<?php include '../../controller/patient/patientControl.php'; ?>
<html>

<head>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <form method="POST" action="" onsubmit="return validateForm()">


            <div class="main">
            <h1>Patient Registrarion</h1>
        <h3>Enter your informartion</h3>
            <table>
                <tr>
                   <label> <td colspan="2">Full Name</td></label>
                    <label><td colspan="3"><input type="text" class="error" name="name" id="name" placeholder="<?php echo $nameError; ?>"></td></label>
                    <label><p class="error"> </p></label>
                </tr>
                <tr>
                    <td colspan="2">Date of Birth: </td>
                    <td colspan="3"><input type="date" name="dob">
                        <?php echo $dobError; ?></td>
                </tr>
            <tr>
                    <td colspan="2">Gender:</td>
                    <td colspan="2"><select name="gender" id="gender">
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
                    <td colspan="2">Contact Number:</td>
                    <td colspan="3"><input type="text" name="phone">
                        <?php echo $phoneError; ?></td>
                </tr>
                <tr>

                    <td colspan="2">Marital Status:</td>
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
                    <td colspan="2">Email:</td>
                    <td><input type="text" name="email">
                        <?php echo $emailError; ?>
                        <?php echo $email; ?></td>
                </tr>
                <tr>
                    <td colspan="2">Password:</td>
                    <td><input type="text" name="password">
                        <?php echo $passwordError; ?></td>
                </tr>

                <tr>
                    <td colspan="2">Street Address</td>
                    <td colspan=3><input type="text" name="street" id="address"></td>
                    <td>
                        <p id="add"></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">City</td>
                    <td><input type="text" name="city" id="city"></td>
                </tr>
                <tr>
                    <td colspan="2">Postal Code</td>
                    <td><input type="text" name="postal" id="postal"></td>

                </tr>
                <tr>
                    <td colspan=2">
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
                    <td colspan=2><button type="submit" id="login"  name="login">Login</button></td>
                    <td colspan=2><button type="submit" id="submit" name="submit">Submit</button></td>
                </tr>
            </table>
            </div>

    </form>
</body>

</html>