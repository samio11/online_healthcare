<?php include '../../controller/patient/patientControl.php'; ?>
<html>

<head>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body class="body">
    <form method="POST" action="" onsubmit="return validateForm()">


        <div class="main">
            <h1>Patient Registrarion</h1>
            <h3>Enter your informartion</h3>
            <table width="100%">
                <tr>

                    <td>Full Name</td>
                    <td><input type="text" class="error" name="name" id="name" placeholder="<?php echo $nameError; ?>"></td>
                    <p class="error"> </p>


                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob">
                        <?php echo $dobError; ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><select name="gender" id="gender">
                            <option disabled selected value> Select gender </option>
                            <option name="male">Male</option>
                            <option name="female">Female</option>
                            <option name="others">Others</option>
                        </select></td>
                </tr>
                <tr>
                    <td>

                        <p id="genderError"></p>
                    </td>
                </tr>

                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="phone">
                        <?php echo $phoneError; ?></td>
                </tr>
                <tr>

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
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password">
                        <?php echo $passwordError; ?></td>
                </tr>

                <tr>
                    <td>Street Address</td>
                    <td><input type="text" name="street" id="address"></td>
                    <td>
                        <p id="add"></p>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" id="city"></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><input type="text" name="postal" id="postal"></td>

                </tr>
                <tr>
                    <td>
                        <p id="cityError"></p>
                    </td>
                    <td></td>
                    <td>
                        <p id="postalError"></p>
                    </td>
                </tr>
                <tr>
                    <td><br> </td>
                </tr>
                <tr>
                    <td colspan=2><button type="submit" id="submit" name="submit">Submit</button></td>
                </tr>
            </table>


    </form>
    <p>Already a user?<a href="login.php" style="text-decoration: none;"> Login here </a></p>
    </div>
</body>

</html>