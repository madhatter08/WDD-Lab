<?php
session_start();
require_once('./connect.php');
if (isset($_POST['submit'])) {
    if ($con) {
        //personal details
        $officialId = $_SESSION["officialId"];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $birthdate = $_POST['birthdate'];
        $position = $_POST['position'];
        $termStart = $_POST['termStart'];
        $termEnd = $_POST['termEnd'];
        $phonenum = $_POST['phonenum'];
        $image = $_POST['image'];
        

        $query = "update official_tbl set firstname = '$firstname',middlename = '$middlename',lastname = '$lastname',suffix = '$suffix',birthdate = '$birthdate',position = '$position',termStart = '$termStart',termEnd = '$termEnd',phonenum = '$phonenum',image = '$image' where officialId = '$officialId'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script type="text/JavaScript">';
            echo 'alert("User information successfully updated!")';
            echo '</script>'; ?>
            <script type="text/Javascript">
                window.location='dashboard/profile-official.php';
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