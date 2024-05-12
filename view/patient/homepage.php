<html>

<head>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body class="homebody">
    <form method="POST" action="">
        <div class="homemain">
            <table>
                <tr>
                    <td><button type="submit" name="showProfile" id="showProfile">View Profile</button></td>
                    <td><button type="submit" name="docList" id="docList">Doctors</button></td>
                    <td><button type="submit" name="appointment" id="appointment">Appointments</button></td>
                    <td><button type="submit" name="assistant" id="assistant">Medical Assistant</button></td>
                    <td><button type="submit" name="med" id="med">Medicines</button></td>
                    <td><button type="submit" name="billing" id="billing">Billing</button></td>
                    <td><button type="submit" name="addinfo" id="addinfo">Additional Information</button></td>
                    <td><button type="submit" name="logout" id="logout">Logout</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>
<?php include '../../controller/patient/homepageControl.php'; ?>