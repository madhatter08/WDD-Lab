<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('BG.jpg'); ">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background-image: url('lpu-3.jpg'); "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Student Details</h1>
                            </div>

                            <!-- PHP Code -->
                            <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST"){
                                    //Get the raw inputs
                                    $firstname = $_POST['firstname'];
                                    $lastname = $_POST['lastname'];
                                    $gender = $_POST['gender'];
                                    $birthdate = $_POST['birthdate'];
                                    $address = $_POST['address'];
                                    $country = $_POST['country'];
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];
                                    $confirm_password = $_POST['conpassword'];

                                    //Display the raw inputs
                                    echo "<h3><b>RAW INPUT</b></h3>";
                                    echo "First Name: " . $firstname . "<br>";
                                    echo "Last Name: " . $lastname . "<br>";
                                    echo "Gender: " . $gender . "<br>";
                                    echo "Birthdate: " . $birthdate . "<br>";
                                    echo "Address: " . $address . "<br>";
                                    echo "Country: " . $country . "<br>";
                                    echo "Username: " . $username . "<br>";
                                    echo "Password: " . $password . "<br>";
                                    echo "Confirm Password: " . $confirm_password . "<br><br>";

                                    // Define validation and sanitization functions
                                    function sanitizeInput($input) {
                                        $search = array(
                                            '@<script[^>]*?>.*?</script>@si',   
                                            '@<[\/\!]*?[^<>]*?>@si',            
                                            '@<style[^>]*?>.*?</style>@siU',    
                                            '@<![\s\S]*?--[ \t\n\r]*>@' 
                                        );
                                        $input = preg_replace($search, "", $input);
                                        $input = preg_replace("/[^a-zA-Z0-9\s]/", "", $input);
                                        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                                        $input = trim($input);
                                        $input = stripslashes($input);
                                        return $input;
                                    }

                                    //Get and sanitize user inputs
                                    $s_firstname = sanitizeInput($_POST['firstname']);
                                    $s_lastname = sanitizeInput($_POST['lastname']);
                                    $s_gender = sanitizeInput($_POST['gender']);
                                    $s_birthdate = sanitizeInput($_POST['birthdate']);
                                    $s_address = sanitizeInput($_POST['address']);
                                    $s_country = sanitizeInput($_POST['country']);
                                    $s_username = sanitizeInput($_POST['username']);
                                    $s_password = sanitizeInput($_POST['password']);
                                    $s_confirm_password = sanitizeInput($_POST['conpassword']);

                                    // Check if passwords match
                                    if ($password != $confirm_password) {
                                        echo "Password and Confirm Password do not match.";
                                    } else {
                                        echo "<h3><b>CLEANED INPUT</b></h3>";
                                        echo "First Name: " . $s_firstname . "<br>";
                                        echo "Last Name: " . $s_lastname . "<br>";
                                        echo "Gender: " . $s_gender . "<br>";
                                        echo "Birthdate: " . $s_birthdate . "<br>";
                                        echo "Address: " . $s_address . "<br>";
                                        echo "Country: " . $s_country . "<br>";
                                        echo "Username: " . $s_username . "<br>";
                                        echo "Password: " . $s_password . "<br>";
                                        echo "Confirm Password: " . $s_confirm_password . "<br>";
                                    }
                                }
                            ?>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>