
function validateForm() {

    var fname = document.getElementById("fname").value;
    var specialChars = /[!@#$%^&*(),.?":{}|<>]/;
    if (specialChars.test(fname))
     {
        document.getElementById("fnameError").innerHTML = "Please enter a valid first name with at least 50 alphabetic characters";
        return false;
    }
    var lname = document.getElementById("lname").value;
    
    if (specialChars.test(lname))
     {
        document.getElementById("lnameError").innerHTML = "Please enter a valid last name with at least 50 alphabetic characters";
        return false;
    }
    
   
    var cat = document.getElementById("cat").value;
    if (cat == "") {
      document.getElementById("catError").innerHTML = "category must be filled";
      return false;
    }

    
  
 
}

