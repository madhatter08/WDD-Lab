<?php
    require_once('connect.php');
    if(isset($_POST['submit'])){
        if($con){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthdate'];
            $gender = $_POST['gender'];
            $contactno = $_POST['phonenum'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $conpassword = $_POST['conpassword'];
                                    
            $query = "insert into users_tbl(firstname,lastname,email,birthdate,gender,contactno,address,username,password,c_password,regs_date) values('$firstname','$lastname','$email','$birthdate','$gender','$contactno','$address','$username','$password','$conpassword',NOW())";

            $result = mysqli_query($con,$query);

            if($result){
                echo'<script type="text/JavaScript">';
                echo 'alert("Successfully registered!")';
                echo '</script>'; ?>
                <script type="text/Javascript">
                    window.location='admin.php';
                </script>
            <?php
            }else{
                $err[] = 'Registration failed...'.mysqli_error($con);
            }
            mysqli_close($con);
        }else{
            die('Connection Failed: '.mysqli_connect_error());
        }
    }
?>