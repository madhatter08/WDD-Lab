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
                                <h1 class="h4 text-gray-900 mb-4">Update Student Information</h1>
                            </div>

                            <?php
                                require_once('connect.php');
                                if(isset($_POST['update'])){
                                    $firstname = $_POST['firstname']; 
                                    $lastname = $_POST['lastname']; 
                                    $email = $_POST['email']; 
                                    $birthdate = $_POST['birthdate']; 
                                    $gender = $_POST['gender'];
                                    $contactno = $_POST['phonenum'];
                                    $address = $_POST['address'];
                                    //$username = $_POST['username'];
                                    //$password = $_POST['password'];
                                    //$conpassword = $_POST['conpassword'];
                                    $image = $_POST['image'];
                                    $id = $_POST['id']; 

                                    $query = "update users_tbl set firstname='$firstname', lastname='$lastname', email='$email', birthdate='$birthdate', gender='$gender', contactno='$contactno', address='$address', image='$image' WHERE id='$id'";
                                    //$result = $con->query($query);
                                    $result = mysqli_query($con,$query);

                                    if($result == TRUE){
                                        echo '<script type="text/JavaScript">';
                                        echo 'alert("Record successfully updated...")';
                                        echo '</script>'; ?>
                                        <script type="text/Javascript">
                                            window.location='admin.php';
                                        </script>
                                    <?php
                                    }else{
                                        echo '<script type="text/JavaScript">';
                                        echo 'alert("Error in updating...")';
                                        echo '</script>';
                                    }
                                }
                                //Retrieve individual data to be updated
                                if(isset($_GET['id'])){
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM users_tbl WHERE id = '$id'";
                                    $result = mysqli_query($con,$sql);

                                    if($result -> num_rows){
                                        while($row = $result->fetch_assoc()){
                                            $firstname = $row['firstname'];
                                            $lastname = $row['lastname'];
                                            $email = $row['email'];
                                            $birthdate = $row['birthdate'];
                                            $gender = $row['gender'];
                                            $contactno = $row['contactno'];
                                            $address = $row['address'];
                                            $username = $row['username'];
                                            $password = $row['password'];
                                            $conpassword = $row['conpassword'];
                                            $image = $row['image'];
                                        }
                                    }
                                }
                            ?>

                            <!-- Registration form-->
                            <form method="post" action="" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control" id="exampleFirstName" placeholder="First Name" required>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" value="<?php echo $lastname;?>" class="form-control" id="exampleLastName" placeholder="Last Name" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="exampleInputEmail" placeholder="Email Address" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" name="image" value="<?php echo $image;?>" onchange="readURL(this)" accept="image" class="form-control" id="exampleFirstName" placeholder="Image"
                                            required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" name="birthdate" value="<?php echo $birthdate;?>" class="form-control" id="exampleInputEmail" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="gender" value="" class="form-control" required>
                                            <option disabled selected style="color:black"><?php echo $gender;?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="phonenum" value="<?php echo $contactno;?>" class="form-control" id="" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="address" value="<?php echo $address;?>" class="form-control" id="" placeholder="Home Address" required>
                                </div>
                                <!--
                                <div class="form-group">
                                    <input type="text" name="username" value="<?php echo $username;?>" class="form-control " id="username" placeholder="Username" required>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="password" name="password" value="<?php echo $password;?>" class="form-control " id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="conpassword" value="<?php echo $conpassword;?>" class="form-control " id="exampleRepeatPassword"
                                            placeholder="Confirm Password" required>
                                        <span id="password_error" style="color: red;"></span><br>
                                    </div>
                                </div>-->

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="button" name="cancel" class="btn btn-google btn-block" value="Cancel" onclick="if(confirm('Are you sure to cancel?')) history.back();">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">    
                                    </div>
                                </div>

                                <!--
                                //Update and Cancel buttons
                                <div style="margin-top: 5px;">
                                    <input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
                                </div>
                                <div style="margin-top: 5px;">
                                    <input type="button" name="cancel" class="btn btn-google btn-block" value="Cancel" onclick="if(confirm('Are you sure to cancel?')) history.back();">
                                </div>

                                //Google and Facebook buttons
                                <div class="btn btn-primary btn-user btn-block">
                                    <input type="submit" name="submit"/>
                                </div>

                                <a href="register.php" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>-->
                            </form>
                            <!--
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>-->
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