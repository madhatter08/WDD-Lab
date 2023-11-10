<?php
    session_start();
    require_once('connect.php');

    if (isset($_POST['submit'])) {
        // Get the submitted username and password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare and execute a SQL query
        $query = "select * from users where username='".$username."' and password='".$password."' ";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) == 1){
            //Redirect the user to home page
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'];

            echo'<script type="text/JavaScript">';
            echo 'alert("You are successfully login!")';
            echo '</script>';?>
            <script type="text/JavaScript">
                window.location='home.php'
            </script> <?php
        } else {
            echo'<script type="text/JavaScript">';
            echo 'alert("Incorrect username or password. Please try again!")';
            echo '</script>';?>
            <script type="text/JavaScript">
                window.location='index.html'
            </script> <?php
        }
    }
?>