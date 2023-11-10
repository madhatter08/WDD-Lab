<?php
    require_once('connect.php');
    if(isset($_POST['submit'])){
        if($con){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $picture = $_POST['picture'];
            $username = $_POST['username'];
            $password = $_POST['password'];
                                    
            $query = "insert into users(fullname,email,picture,username,password,reg_date) values('$fullname','$email','$picture','$username','$password',NOW())";
            $result = mysqli_query($con,$query);

            if($result){
                echo'<script type="text/JavaScript">';
                echo 'alert("Successfully registered!")';
                echo '</script>'; ?>
                <script type="text/Javascript">
                    window.location='home.php';
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