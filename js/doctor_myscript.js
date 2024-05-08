
function validateForm() {

    var fname = document.getElementById("fname").value;
    var specialChars = /[!@#$%^&*(),.?":{}|<>]/;
    if (specialChars.test(fname))
     {
        document.getElementById("fnameError").innerHTML = "Please enter a valid first name ";
        return false;
    }
    var lname = document.getElementById("lname").value;
    
    if (specialChars.test(lname))
     {
        document.getElementById("lnameError").innerHTML = "Please enter a valid last name ";
        return false;
    }
    
    var gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        document.getElementById("genderError").innerHTML = "Gender must be selected";
        return false;
    }
    
    var cat = document.getElementById("cat").value;
    if (cat == "") {
      document.getElementById("catError").innerHTML = "category must be filled";
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
  xhttp.open("GET", "http://localhost/online_healthcare/controller/doctor/removephoto.php?email=" + email, true);
  xhttp.send();
  }
