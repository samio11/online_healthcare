
function validateForm() {
    var name = document.getElementById("Name").value;
    if (name == "") {
        document.getElementById("nameError").innerHTML = "Name should be atleast 4 characters";
        return false;

    }
    var phone = document.getElementById("Phone").value;
    if (isNaN(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone Number invalid";
        return false;

    }

    var gender = document.getElementById("Gender").value;
    if (!gender) {
        document.getElementById("genderError").innerHTML = "Select gender";
        return false;
    }

    var dob = document.getElementById("dob").value;
    if (!dob) {
        document.getElementById("dobError").innerHTML = "Select Date of Birth";
        return false;
    }
    var license = document.getElementById("license").value;
    if (license == "") {
        document.getElementById("licenseError").innerHTML = "Enter a License address";
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
      xhttp.open("GET", "http://localhost/online_healthcare/controller/medical_assist/removephoto.php?email=" + email, true);
      xhttp.send();
    }

    function liveSearch(value) {
        $(document).ready(function () {
          var input = value;
      
          $.ajax({
            url: "http://localhost/online_healthcare/controller/medical_assist/doc_Listcontrol.php",
            method: "POST",
            data: { input: input },
            success: function (data) {
              $("#searchresult").html(data);
            }
          });
        });
      }

 function liveSearch1(value) {
        $(document).ready(function () {
          var input = value;
      
          $.ajax({
            url: "http://localhost/online_healthcare/controller/medical_assist/presc_Listcontrol.php",
            method: "POST",
            data: { input: input },
            success: function (data) {
              $("#searchresult").html(data);
            }
          });
        });
      }
function demo1(pres_id) {
        document.location.href = 'prescription.php?pres_id=' + pres_id;
      }


function liveSearch2(value) {
        $(document).ready(function () {
          var input = value;
      
          $.ajax({
            url: "http://localhost/online_healthcare/controller/medical_assist/billingcontrol.php",
            method: "POST",
            data: { input: input },
            success: function (data) {
              $("#searchresult").html(data);
            }
          });
        });
      }
function demo(app_id) {
        document.location.href = 'set_payment.php?app_id=' + app_id;
      }

function liveSearch3(value) {
        $(document).ready(function () {
          var input = value;
      
          $.ajax({
            url: "http://localhost/online_healthcare/controller/medical_assist/pat_infocontrol.php",
            method: "POST",
            data: { input: input },
            success: function (data) {
              $("#searchresult").html(data);
            }
          });
        });
       
      }
      function downloadPrescription(){
        const element = document.getElementById('receipt');
      
        html2pdf().from(element).save();
      
      }


