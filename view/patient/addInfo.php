<?php include "homepage.php"  ?>
<?php include "../../controller/patient/addInfoController.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Additional Information</title>
    <script src="../../js/patient_myscript.js"></script>
    <link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
    <div class="main">
        <h1>Additional Information</h1>
        <form action="" method="POST">
            <table width="100%">
                <tr>
                    <td>Height (inches)</td>
                    <td><input type="text" name="height" id="height" placeholder=""></td>
                </tr>
                <tr>
                    <td>Weight (kgs) </td>
                    <td><input type="text" name="weight" id="weight" placeholder=""></td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td><select name="blood" id="blood">
                            <option disabled selected value> Select </option>
                            <option name="a+">A+</option>
                            <option name="a-">A-</option>
                            <option name="b+">
                                <Base>
                                </Base>+
                            </option>
                            <option name="b-">B-</option>
                            <option name="ab+">AB+</option>
                            <option name="ab_">AB-</option>
                            <option name="o+">O+</option>
                            <option name="o-">O-</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Diabetes</td>
                    <td><select name="diabetes" id="diabetes">
                            <option disabled selected value> Select </option>
                            <option name="no">No</option>
                            <option name="a">Type A</option>
                            <option name="b">Type B</option>
                        </select></td>
                </tr>
            </table>
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>

</html>