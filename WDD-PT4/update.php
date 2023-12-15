<?php
session_start();
require_once('./connect.php');
if (isset($_POST['submit'])) {
    if ($con) {
        //personal details
        $registerId = $_SESSION["registerId"];
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

        //address details
        $housenum = $_POST['housenum'];
        $streetPurok = $_POST['streetPurok'];
        $since = $_POST['since'];

        //barangay details
        $pwd = $_POST['pwd'];
        $senior = $_POST['senior'];
        $voterstatus = $_POST['voterstatus'];
        $validIdType = $_POST['validIdType'];
        $validId = $_POST['validId'];

        //emergency contact
        $contactPerson = $_POST['contactPerson'];
        $relationship = $_POST['relationship'];
        $address = $_POST['address'];
        $contactnum = $_POST['contactnum'];
        

        $query = "update register_tbl set firstname = '$firstname',middlename = '$middlename',lastname = '$lastname',suffix = '$suffix',birthdate = '$birthdate',birthplace = '$birthplace',gender = '$gender',nationality = '$nationality',civilstatus = '$civilstatus',occupation = '$occupation',phonenum = '$phonenum',picture = '$picture',housenum = '$housenum',streetPurok = '$streetPurok',since = '$since',pwd = '$pwd',senior = '$senior',voterstatus = '$voterstatus',validIdType = '$validIdType',validId = '$validId',contactPerson = '$contactPerson',relationship = '$relationship',address = '$address',contactnum = '$contactnum' where registerId = '$registerId'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script type="text/JavaScript">';
            echo 'alert("User information successfully updated!")';
            echo '</script>'; ?>
            <script type="text/Javascript">
                window.location='dashboard/profile.php';
            </script>
            <?php
        } else {
            $err[] = 'Update failed...' . mysqli_error($con);
        }
        mysqli_close($con);
    } else {
        die('Connection Failed: ' . mysqli_connect_error());
    }
}
?>