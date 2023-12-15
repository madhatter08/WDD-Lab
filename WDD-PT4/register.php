<?php
require_once('connect.php');
if (isset($_POST['submit'])) {
    if ($con) {
        //demographic
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $birthdate = $_POST['birthdate'];
        $birthplace = $_POST['birthplace'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $civilstatus = $_POST['civilstatus'];
        $occupation = $_POST['occupation'];
        $phonenum = $_POST['phonenum'];
        $picture = $_POST['picture'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //address
        $housenum = $_POST['housenum'];
        $streetPurok = $_POST['streetPurok'];
        $since = $_POST['since'];

        //barangay
        $pwd = $_POST['pwd'];
        $senior = $_POST['senior'];
        $voterstatus = $_POST['voterstatus'];
        $validIdType = $_POST['validIdType'];
        $validId = $_POST['validId'];

        //emergency
        $contactPerson = $_POST['contactPerson'];
        $relationship = $_POST['relationship'];
        $address = $_POST['address'];
        $contactnum = $_POST['contactnum'];

        $query = "insert into register_tbl(firstname,middlename,lastname,suffix,birthdate,birthplace,gender,nationality,civilstatus,occupation,phonenum,picture,email,password,housenum,streetPurok,since,pwd,senior,voterstatus,validIdType,validId,contactPerson,relationship,address,contactnum,status,regs_date) 
                  values('$firstname','$middlename','$lastname','$suffix','$birthdate','$birthplace','$gender','$nationality','$civilstatus','$occupation','$phonenum','$picture','$email','$password','$housenum','$streetPurok','$since','$pwd','$senior','$voterstatus','$validIdType','$validId','$contactPerson','$relationship','$address','$contactnum','Pending',NOW())";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script type="text/JavaScript">';
            echo 'alert("Successfully registered!\nLogin to your account.")';
            echo '</script>'; ?>
            <script type="text/Javascript">
                window.location='./login.html';
                </script>
            <?php
        } else {
            $err[] = 'Registration failed...' . mysqli_error($con);
        }
        mysqli_close($con);
    } else {
        die('Connection Failed: ' . mysqli_connect_error());
    }
}
?>