
function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pnumber = document.getElementById("pnumber").value;
    var lnumber = document.getElementById("lnumber").value;
    var place = document.getElementById("place").value;
    var pass = document.getElementById("pass").value;

    if (fname == "" || lname == "" || email == "" || pnumber == "" || lnumber == "" || place == "" || pass == "") {
        alert("All fields are required");
        return false;
    }

    

    return true;
}

