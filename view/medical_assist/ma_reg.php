<?php
include '../../controller/medical_assist/process.php';
include '../../css/medical_assist/reg_page.css';

?>
<html>
<head>
    <script src="../../js/medical_assist_myscript.js"></script>
</head>
<body>
<div class="main">
<h1>Medical Assistant Register</h1>
<form method="POST" action="" onsubmit="return validateForm()">

  <table>
        <tr>
            <td colspan="2">Name:</td><td> <input type="text" name="Name" id="Name"  placeholder ="Hey! What's Your Name?">
<?php echo $nameError; ?>
<?php echo $name; ?>
</td>
</tr>


<tr>
<td colspan="2">Email:</td>
<td><input type="text" name="Email">
<?php echo $emailError; ?>
<?php echo $email; ?>
</td>
</tr>


<tr>
<td colspan="2">Password:</td><td> <input type="password" name="Password" >
<?php echo $passwordError; ?>
</td>
</tr>


<tr>
<td colspan="2">Phone Number:</td><td> <input type="text" name="Phone" id="Phone">
<?php echo $phoneError; ?>
<?php echo $phone; ?>
</td>
</tr>


<tr>
<td colspan="2">Gender:</td>
<td><select name="Gender" id="Gender">
<option disabled selected value> Select Gender </option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select>
  <?php echo $genderError; ?>
<?php echo $gender; ?>
</td>
</tr>


<tr>
<td colspan="2">Address:</td><td><input type="text" name="Address" >
<?php echo $addressError; ?>
<?php echo $address; ?>
</td>
</tr>


<tr>
<td colspan="2">License:</td><td><input type="text" name="License" id ="license">
<?php echo $licenseError; ?>
<?php echo $license; ?>
</td>
</tr>


<tr>
<td colspan="2">Date Of Birth:</td><td><input type="date" name="dob" id="dob">
<?php echo $dobError; ?>
<?php echo $dob; ?>
</td>
</tr>

<tr>
<td colspan="2">Nationality:</td>
<td><select name="Nationality" id="Nationality">
<option disabled selected value> Select Nationality </option>
    <option value="Bangladeshi">Bangladeshi</option>
    <option value="Others">Others</option>
  </select>
  <?php echo $nationselectError; ?>
<?php echo $nationselect; ?>
</td>
</tr>

 <tr> 
<td><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="Reset" value="Reset"></td>
</tr>



</form>
<p>Already Have an Account?<a href="login.php" style="text-decoration: none;"> Login Now! </a></p>
</div>
</table>
</body>
</html>


