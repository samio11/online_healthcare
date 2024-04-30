
    function validateForm() {
        var name = document.getElementById("Name").value;
        if(name == "")
        {
            alert("Please fill Name (JS validation)");
            return false;

        }
        var phonenumber = document.getElementById("PhoneNumber").value;
        if (isNaN(phonenumber))
        {
            alert("Please fill Phone number with only numbers(JS validation)");
            return false;

        }

        var city = document.getElementById("Gender").value;
        if(city == "")
        {
            alert("Please fill City (JS validation)");
            return false;

        }
    
        var occupation = document.getElementById("Occupation").value;
       if(!occupation)
       {
        alert("Occupation must be selected");
        return false;
       }

      
      
    }
    function loadUser()
        {
        const xhttp = new XMLHttpRequest();
        var str = document.getElementById("Name").value;
        xhttp.onload = function() {
        document.getElementById("txt").innerHTML = this.responseText;
        }
        
        xhttp.open("GET", "../controller/searchUser.php?name="+str);
        xhttp.send();
      } 



    

