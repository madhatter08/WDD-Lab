<?php
session_start();
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email and password
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    // Prepare and execute a SQL query
    $query = "select * from register_tbl where email='" . $email . "' and password='" . $password . "' ";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) == 1) {
        //Redirect the user to home page
        $_SESSION['loggedin'] = true;
        $_SESSION['registerId'] = $row['registerId'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        echo '<script type="text/JavaScript">';
        echo 'alert("You are successfully login!")';
        echo '</script>';
        $con->close();
        header("Location: dashboard/resident-dashboard.php");
        exit;
    } else {
        echo '<script type="text/JavaScript">';
        echo 'alert("Incorrect username or password. Please try again!")';
        echo '</script>';
        include('login.html');
        $con->close();
        exit;
    }
}
?>