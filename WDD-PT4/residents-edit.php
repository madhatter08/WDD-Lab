<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="register/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Residents Registration Form </title>
    <link href="img/logo.png" rel="shortcut icon">
</head>

<body style="background-image: url(img/arc.jpg); background-size: cover;">
    <div class="container">
        <header>Brgy. Makiling Resident Registration</header>
        <?php
        require_once('connect.php');
        if (isset($_POST['submit'])) {
            //personal details
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

            $email = $_POST['email'];
            $password = $_POST['password'];
            $registerId = $_POST['id'];

            $query = "update register_tbl set firstname = '$firstname',middlename = '$middlename',lastname = '$lastname',suffix = '$suffix',birthdate = '$birthdate',birthplace = '$birthplace',gender = '$gender',nationality = '$nationality',civilstatus = '$civilstatus',occupation = '$occupation',phonenum = '$phonenum',picture = '$picture',email = '$email',password='$password',housenum = '$housenum',streetPurok = '$streetPurok',since = '$since',pwd = '$pwd',senior = '$senior',voterstatus = '$voterstatus',validIdType = '$validIdType',validId = '$validId',contactPerson = '$contactPerson',relationship = '$relationship',address = '$address',contactnum = '$contactnum',status = 'Pending' where registerId = '$registerId'";
            //$result = $con->query($query);
            $result = mysqli_query($con, $query);

            if ($result == TRUE) {
                echo '<script type="text/JavaScript">';
                echo 'alert("Record successfully updated!")';
                echo '</script>'; ?>
                <script type="text/Javascript">
                    window.location='dashboard/residents.php';
                            </script>
        <?php
            } else {
                echo '<script type="text/JavaScript">';
                echo 'alert("Error in updating...")';
                echo '</script>';
            }
        }
        //Retrieve individual data to be updated
        if (isset($_GET['id'])) {
            $registerId = $_GET['id'];
            $sql = "SELECT * FROM register_tbl WHERE registerId = '$registerId'";
            $result = mysqli_query($con, $sql);

            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
                    //personal details
                    $firstname = $row['firstname'];
                    $middlename = $row['middlename'];
                    $lastname = $row['lastname'];
                    $suffix = $row['suffix'];
                    $birthdate = $row['birthdate'];
                    $birthplace = $row['birthplace'];
                    $gender = $row['gender'];
                    $nationality = $row['nationality'];
                    $civilstatus = $row['civilstatus'];
                    $occupation = $row['occupation'];
                    $phonenum = $row['phonenum'];
                    $picture = $row['picture'];

                    //address details
                    $housenum = $row['housenum'];
                    $streetPurok = $row['streetPurok'];
                    $since = $row['since'];

                    //barangay details
                    $pwd = $row['pwd'];
                    $senior = $row['senior'];
                    $voterstatus = $row['voterstatus'];
                    $validIdType = $row['validIdType'];
                    $validId = $row['validId'];

                    //emergency contact
                    $contactPerson = $row['contactPerson'];
                    $relationship = $row['relationship'];
                    $address = $row['address'];
                    $contactnum = $row['contactnum'];

                    $email = $row['email'];
                    $password = $row['password'];
                }
            }
        }
        ?>
        <form action="" method="post" style="overflow: scroll;">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your first name" required>
                            <input type="hidden" name="id" value="<?php echo $registerId; ?>">
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" name="middlename" value="<?php echo $middlename; ?>" placeholder="Enter your middle name">
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter your last name" required>
                        </div>

                        <div class="input-field">
                            <label>Suffix</label>
                            <input type="text" name="suffix" value="<?php echo $suffix; ?>" placeholder="Sr./Jr.">
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="birthdate" value="<?php echo $birthdate; ?>" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Place of Birth</label>
                            <input type="text" name="birthplace" value="<?php echo $birthplace; ?>" placeholder="Enter birth place" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled>Select gender</option>
                                <option <?php echo $gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option <?php echo $gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" value="<?php echo $nationality; ?>" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>Civil Status</label>
                            <select name="civilstatus" required>
                                <option disabled selected>Select status</option>
                                <option <?php echo $civilstatus == 'Single' ? 'selected' : ''; ?>>Single</option>
                                <option <?php echo $civilstatus == 'Married' ? 'selected' : ''; ?>>Married</option>
                                <option <?php echo $civilstatus == 'Separated' ? 'selected' : ''; ?>>Separated</option>
                                <option <?php echo $civilstatus == 'Widowed' ? 'selected' : ''; ?>>Widowed</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="occupation" value="<?php echo $occupation; ?>" placeholder="Enter your occupation" required>
                        </div>

                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="number" name="phonenum" value="<?php echo $phonenum; ?>" placeholder="Enter phone number" required>
                        </div>

                        <div class="input-field">
                            <label>Display Picture</label>
                            <input type="file" name="picture" value="<?php echo $picture; ?>" placeholder="Enter your display picture" onchange="readURL(this)" accept="image" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter your password" required>
                        </div>

                        <div class="input-field"></div>

                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText"><a href="dashboard/residents.php" style="color: #fff;">Cancel</a></span>
                        </div>

                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>


                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>House Number</label>
                            <input type="number" name="housenum" value="<?php echo $housenum; ?>" placeholder="Enter house number" required>
                        </div>

                        <div class="input-field">
                            <label>Street/Purok</label>
                            <input type="text" name="streetPurok" value="<?php echo $streetPurok; ?>" placeholder="Enter street/purok" required>
                        </div>

                        <div class="input-field">
                            <label>Resident Since</label>
                            <input type="number" name="since" value="<?php echo $since; ?>" placeholder="Enter year" required>
                        </div>

                    </div>
                </div>

                <div class="details address">
                    <span class="title">Barangay Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>PWD?</label>
                            <select name="pwd" required>
                                <option disabled>Select option</option>
                                <option <?php echo $pwd == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                <option <?php echo $pwd == 'No' ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Senior Citizen?</label>
                            <select name="senior" required>
                                <option disabled>Select option</option>
                                <option <?php echo $senior == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                <option <?php echo $senior == 'No' ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Voter Status</label>
                            <select name="voterstatus" required>
                                <option disabled>Select status</option>
                                <option <?php echo $voterstatus == 'Active' ? 'selected' : ''; ?>>Active</option>
                                <option <?php echo $voterstatus == 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Valid ID Type</label>
                            <input type="text" name="validIdType" value="<?php echo $validIdType; ?>" placeholder="Select image" required>
                        </div>

                        <div class="input-field">
                            <label>Valid ID</label>
                            <input type="file" name="validId" value="<?php echo $validId; ?>" placeholder="Select image" required>
                        </div>

                        <div class="input-field"></div>

                    </div>
                </div>

                <div class="details emergency">
                    <span class="title">Emergency Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Contact Person</label>
                            <input type="text" name="contactPerson" value="<?php echo $contactPerson; ?>" placeholder="Enter contact person" required>
                        </div>

                        <div class="input-field">
                            <label>Relationship</label>
                            <input type="text" name="relationship" value="<?php echo $relationship; ?>" placeholder="Enter relationship" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Enter address" required>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="number" name="contactnum" value="<?php echo $contactnum; ?>" placeholder="Enter contact number" required>
                        </div>

                    </div>
                </div>
                <div class="buttons">
                    <div class="backBtn">
                        <span class="btnText">Back</span>
                        <i class="uil uil-navigator"></i>
                    </div>

                    <button class="sumbit" name="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
            <!--
            <div class="form third">
                <div class="details ID">
                    <span class="title">Identity Details</span>
                
                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>
                
                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>
                
                        <div class="input-field">
                            <label>Issued Authority</label>
                            <input type="text" placeholder="Enter issued authority" required>
                        </div>
                
                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>
                
                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>
                
                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                    
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>-->
        </form>
    </div>

    <script src="register/script.js"></script>
</body>

</html>