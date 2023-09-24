function regStud() {
    document.getElementById("form").addEventListener("submit", function (event) {
        event.preventDefault();

        //Key value pairing HTML -> JS
        //First Name, Last Name, Email, Gender, Address, Contact No, Username, Password, Confirm Password
        var fname = document.getElementById("firstName").value;
        var lname = document.getElementById("lastName").value;
        var em = document.getElementById("email").value;
        var ele = document.getElementsByName('gender');
        for (i = 0; i < ele.length; i++) {
            if (ele[i].checked)
                var gnd = ele[i].value;
        }
        var add = document.getElementById("address").value;
        var con = document.getElementById("contact").value;
        var uname = document.getElementById("username").value;
        var pass = document.getElementById("password").value;
        var cpass = document.getElementById("conPass").value;

        var data = {
            FirstName: fname,
            LastName: lname,
            Email: em,
            Gender: gnd,
            Address: add,
            Username: uname,
            Password: pass,
            ConfirmPassword: cpass,
        };

        alert("New Student Registered!");

        var jsonData = JSON.stringify(data, null, ' ');
        console.log(jsonData);
        document.getElementById("output").textContent = jsonData;
    });
}