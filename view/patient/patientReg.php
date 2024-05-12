<?php include '../../controller/patient/patientControl.php'; ?>
<html>

<head>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body class="body">
    <form method="POST" action="" onsubmit="return validateForm()">
        <div class="regmain">
            <h1>Patient Registrarion</h1>
            <h3>Enter your informartion</h3>
            <table width="100%">
                <tr>
                    <td><label>Full Name</label></td>
                    <td><input type="text" name="name" id="name">
                        <div class="error"><?php echo $nameError; ?></div>
                    </td>
                </tr>
                <tr>
                    <td><label>Date of Birth:</label> </td>
                    <td><input type="date" name="dob">
                        <div class="error"><?php echo $dobError; ?></div>
                    </td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td><select name="gender" id="gender">
                            <option disabled selected value> Select gender </option>
                            <option name="male">Male</option>
                            <option name="female">Female</option>
                            <option name="others">Others</option>
                        </select>
                        <div class="error" id="genderError"></div>
                    </td>
                </tr>
                <tr>
                    <td><label>Contact Number:</label></td>
                    <td><input type="text" name="phone">
                        <div class="error">
                            <p><?php echo $phoneError; ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label> Status:</label></td>
                    <td><select name="marital" id="marital">
                            <option disabled selected value> Select </option>
                            <option name="married">Married</option>
                            <option name="single">Single</option>
                        </select>
                        <div class="error" id="maritalError"></div>
                    </td>
                </tr>
                <tr>
                    <td><label> Email:</label></td>
                    <td><input type="text" name="email">
                        <div class="error"><?php echo $emailError; ?></div>
                    </td>
                </tr>
                <tr>
                    <td><label> Password:</label></td>
                    <td><input type="text" name="password">
                        <div class="error"><?php echo $passwordError; ?></div>
                    </td>
                </tr>
                <tr>
                    <td><label> Street Address:</label></td>
                    <td><input type="text" name="street" id="address">
                        <div class="error" id="add"></div>
                    </td>
                </tr>
                <tr>
                    <td><label> City:</label></td>
                    <td><input type="text" name="city" id="city">
                        <div class="error" id="cityError"></div>
                    </td>
                </tr>
                <tr>
                    <td><label> Postal Code:</label></td>
                    <td><input type="text" name="postal" id="postal">
                        <div class="error" id="postalError"></div>
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