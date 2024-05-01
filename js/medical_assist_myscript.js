
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



}
/*function loadUser() {
    const xhttp = new XMLHttpRequest();
    var str = document.getElementById("Name").value;
    xhttp.onload = function () {
        document.getElementById("txt").innerHTML = this.responseText;
    }

    xhttp.open("GET", "../controller/searchUser.php?name=" + str);
    xhttp.send();
}
*/




