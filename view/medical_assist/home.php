<?php
include '../../controller/medical_assist/process.php';
//include '../JS/myscript.js';
include '../../css/medical_assist/reg_page.css';

?>
<html>
<body>
  <form method="POST" action="" onsubmit="return validateForm()">

    <fieldset>
      <legend>Sign Up Now!:</legend>
      <table>
        <tr>
          <td colspan="3">Name:</td>
          <td> <input type="text" name="Name" id="Name" placeholder="Type your Name"></td>
          <?php echo $nameError; ?>
          <?php echo $name; ?>
          </td>
        </tr>
       

        <tr>
          <td colspan="3">Email:</td>
          <td><input type="text" name="Email" placeholder="Type your Email">
            <?php echo $emailError; ?>
            <?php echo $email; ?>
          </td>
        </tr>
        

        <tr>
          <td colspan="3">Password:</td>
          <td> <input type="password" name="Password">
            <?php echo $passwordError; ?>
          </td>
        </tr>
       

        <tr>
          <td colspan="3">Phone Number:</td>
          <td> <input type="text" name="PhoneNumber" id="PhoneNumber">
            <?php echo $phonenumberError; ?>
            <?php echo $phonenumber; ?>
          </td>
        </tr>
        

        <tr>
          <td colspan="3">Gender:</td>
          <td><select name="Gender" id="Gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
            </select>
            <?php echo $genderError; ?>
            <?php echo $gender; ?>
          
          </td>
        </tr>
       

        <tr>
          <td colspan="3">Address:</td>
          <td><input type="text" name="Address">
            <?php echo $addressError; ?>
            <?php echo $address; ?>
         
          </td>
        </tr>
        

        <tr>
          <td colspan="3">License:</td>
          <td><input type="text" name="License">
            <?php echo $licenseError; ?>
            <?php echo $license; ?>
         
          </td>
        </tr>
        

        <tr>
          <td colspan="3">Date Of Birth:</td>
          <td><input type="date" name="DOB">
          <?php echo $dobError; ?>
            <?php echo $dob; ?>
          </td>
        </tr>
        

        <tr>
          <td colspan="3">Nationality:</td>
          <td><select name="Nationality">
              <option value="Bangladeshi">Bangladeshi</option>
              <option value="Others">Others</option>
            </select>
            <?php echo $nationselectError; ?>
            <?php echo $nationselect; ?>
          </td>
        </tr>
       

        <tr>
          <td colspan="3"><input type="submit" name="Submit" value="SUBMIT">
          
        </tr>
        
        <tr>
          <td colspan="3"><input type="reset" name="Reset" value="RESET">
          
        </tr>
        

    </fieldset>
  </form>
  </table>
</body>

</html>