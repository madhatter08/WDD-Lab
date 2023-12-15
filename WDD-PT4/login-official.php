<?php
session_start();
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email and password
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    // Prepare and execute a SQL query
    $query = "select * from official_tbl where email='" . $email . "' and password='" . $password . "' ";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) == 1) {
        //Redirect the user to home page
        $_SESSION['loggedin'] = true;
        $_SESSION['officialId'] = $row['officialId'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        echo '<script type="text/JavaScript">';
        echo 'alert("You are successfully login as admin!")';
        echo '</script>';
        $con->close();
        header("Location: dashboard/admin.php");
        exit;
    } else {
        echo '<script type="text/JavaScript">';
        echo 'alert("Incorrect username or password. Please try again!")';
        echo '</script>';
        include('login-official.php');
        $con->close();
        exit;
    }
}
?>