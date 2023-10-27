<?php
    session_start();
    require_once('connect.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the submitted username and password
        $submitted_username = strtolower($_POST["username"]);
        $submitted_password = $_POST["password"];

        // Prepare and execute a SQL query to retrieve the user's password
        $sql = "SELECT password FROM users_tbl WHERE email = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $submitted_username);
        $stmt->execute();
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        // Verify user by comparing the submitted and stored passwords.
        if ($submitted_password === $stored_password) {
            // Redirect the user to dashboard page
            $_SESSION['loggedin'] = true;
            header("Location: index.html");
        } else {
            // Display an error message and go back to login form
            echo'<script type="text/JavaScript">';
            echo 'alert("Incorrect username or password. Please try again!")';
            echo '</script>';
            include('login.html');
            exit;
        }

        // Close the database connection
        $stmt->close();
        $con->close();
    }
?>
