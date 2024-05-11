
function validateForm() {
    var name = document.getElementById("Name").value;
    if (name == "") {
        document.getElementById("nameError").innerHTML = "Name must be filled";
        return false;

    }
    var phone = document.getElementById("Phone").value;
    if (isNaN(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone number must be filled";
        return false;

    }

    var gender = document.getElementById("Gender").value;
    if (!gender) {
        document.getElementById("genderError").innerHTML = "Gender must be selected";
        return false;
    }

    var dob = document.getElementById("dob").value;
    if (!dob) {
        document.getElementById("dobError").innerHTML = "Date of Birth must be selected";
        return false;
    }
    var postal = document.getElementById("license").value;
    if (license == "") {
        document.getElementById("licenseError").innerHTML = "License must be included";
        return false;
    }
  }
    function validateEmail(){
        var email = document.getElementById('submit_email').value;
        var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!regex.test(email)){
          document.getElementById('email_error').innerHTML = "Please Enter a valid email address";
          return false;
        }
      }

      function openDiag(){
        document.getElementById('uploadphoto').click();
      }
      function random(){
        alert("hello");
      }
      function photoUpload(){
      
      }
      function removePicture(email){
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function () {
        document.getElementById('imgsrc').getAttribute('src').innerHTML = this.responseText;
      }
      xhttp.open("GET", "http://localhost/online_healthcare/controller/medical_assist/test.php?email=" + email, true);
      xhttp.send();
      }

}





