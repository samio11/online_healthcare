
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
 
 
function removePicture(email) {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
          document.getElementById('imgsrc').src = this.responseText;
      }
  };
  xhttp.open("GET", "http://localhost/online_healthcare/controller/doctor/removephoto.php?email=" + email, true);
  xhttp.send();
}

function chat(app_id) {
  var clientmsg = $("#usermsg").val();
  $.post("../../controller/doctor/chatroomControl.php", { text: clientmsg, room: app_id },
    function (data, status) {
      document.getElementsByClassName('anyclass')[0].innerHTML = data;
    });
  return false;
}
function runFunction(app_id) {
 
  $.post("../../controller/doctor/chatRefreshControl.php", { room: app_id },
    function (data, status) {
      document.getElementsByClassName('anyclass')[0].innerHTML = data;
    }
  )
}






