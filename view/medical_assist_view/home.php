<?php
include '../../layouts/header.php';
include '../controller/process.php';
include '../JS/myscript.js';
include '../CSS/mystyle.css';

?>
<html>
<body>
<form method="POST" action="" onsubmit="return validateForm()">

<fieldset>
  <legend>Sign Up Now!:</legend>
  <table>
        <tr>
            <td>Name:</td><td> <input type="text" name="Name" id="Name"  placeholder ="Name">
<?php echo $nameError; ?>
<?php echo $name; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Email:</td>
<td><input type="text" name="Email" placeholder ="Email">
<?php echo $emailError; ?>
<?php echo $email; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Password:</td><td> <input type="password" name="Password" >
<?php echo $passwordError; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Phone Number:</td><td> <input type="text" name="PhoneNumber" id="PhoneNumber">
<?php echo $phonenumberError; ?>
<?php echo $phonenumber; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Gender:</td>
<td><select name="Gender" id="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select>
  <?php echo $genderError; ?>
<?php echo $gender; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Address:</td><td><input type="text" name="Address" >
<?php echo $addressError; ?>
<?php echo $address; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>License:</td><td><input type="text" name="License">
<?php echo $licenseError; ?>
<?php echo $license; ?>
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Date Of Birth:</td><td><input type="date" name="Date Of Birth" >
<td colspan="2">
</td>
</tr>
<br>

<tr>
<td>Nationality:</td>
<td><select name="Nationality">
    <option value="Bangladeshi">Bangladeshi</option>
    <option value="Others">Others</option>
  </select>
  <?php echo $nationselectError; ?>
<?php echo $nationselect; ?>
<td colspan="2">
</td>
</tr>
<br>
  
<tr>
<td><input type="submit" name="Submit" value="SUBMIT"><td colspan="2"></td>
</tr>
<br>
<tr>
<td><input type="reset" name="Reset" value="RESET"><td colspan="2"></td>
</tr>
<br>

</fieldset>
</form>
</table>
</body>
</html>

<?php
include '../../layouts/footer.php';
?>