<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 12:29:50 GMT -->

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../img/logo.png">
    <link href="assets/plugins/ticker/jquery.jConveyorTicker.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
</head>
<?php include('../session.php'); ?>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <!-- LOGO -->
            <div class="topbar-left"><a href="admin.html" class="logo">
                    <span><img src="../img/logo.png" style="width: 50px;"> </span>
                    <span><img src="../img/logo-word.png" style="width: 170px; height: 30px;" alt="logo-large" class="logo-lg"></span></a>
            </div>
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown">
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img alt="profile-user" class="rounded-circle" <?php
                                                                        $result = mysqli_query($con, $image_query);
                                                                        if ($result->num_rows > 0) {
                                                                            while ($data = mysqli_fetch_assoc($result)) {
                                                                        ?> <img src="../img/<?php echo $data['picture']; ?>">
                <?php
                                                                            }
                                                                        }
                ?>
                <span class="ml-1 nav-user-name hidden-sm"><i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.php"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled topbar-nav mb-0">
                <li><button class="button-menu-mobile nav-link waves-effect waves-light"><i class="mdi mdi-menu nav-icon"></i></button></li>
                <li class="hide-phone app-search">
                    <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fas fa-search"></i></a></form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper-img" style="background-image: url(../img/bg.jpg);">
        <div class="page-wrapper-img-inner">
            <div class="sidebar-user media">
                <img alt="user" class="rounded-circle img-thumbnail mb-1" <?php
                                                                            $result = mysqli_query($con, $image_query);
                                                                            if ($result->num_rows > 0) {
                                                                                while ($data = mysqli_fetch_assoc($result)) {
                                                                            ?> <img src="../img/<?php echo $data['picture']; ?>">
        <?php
                                                                                }
                                                                            }
        ?>
        <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
        <div class="media-body">
            <h5 class="text-light">
                Hello,
                <?php
                $result = mysqli_query($con, $image_query);
                $data = mysqli_fetch_assoc($result);
                echo $data['firstname'];
                echo ' ';
                echo $data['lastname'];
                echo '!';
                //echo $firstname; 

                ?></h5>
            <ul class="list-unstyled list-inline mb-0 mt-2">
                <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-account text-light"></i></a></li>
                <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-settings text-light"></i></a></li>
                <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-power text-danger"></i></a></li>
            </ul>
        </div>
            </div>
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right align-item-center mt-2"><button class="btn btn-info px-4 align-self-center report-btn">Create Report</button></div>
                        <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard mr-2"></i>User Profile</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">User Information</li>
                            </ol>
                        </div>
                    </div>
                    <!--end page title box-->
                </div>
                <!--end col-->
            </div>
            <!--end row--><!-- end page title end breadcrumb -->
        </div>
        <!--end page-wrapper-img-inner-->
    </div>
    <!--end page-wrapper-img-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu" id="side-nav">
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="resident-dashboard.php"><i class="mdi mdi-monitor mdi-24px"></i><span>Dashboard</span></a>
                    </li>
                    <!--
                    <li>
                        <a href="request-cert.php"><i class="mdi mdi-file-alert mdi-24px"></i><span>Requests Monitoring</span></a>
                    </li>-->
                    <li>
                        <a href="#"><i class="mdi mdi-file-alert mdi-24px"></i><span>My Requests</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="#">Total Requests</a></li>
                            <li><a href="resident-request.php">Request Form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-home-account mdi-24px"></i><span>Officials</span></a>
                    </li>
                </ul>
            </div>
            <!-- end left-sidenav-->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                                    <div class="fro_profile">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mb-lg-0">
                                                <div class="fro_profile-main">
                                                    <div class="fro_profile-main-pic">
                                                        <img alt="" class="rounded-circle" style="width: 100px;" <?php
                                                                                                                    $result = mysqli_query($con, $image_query);
                                                                                                                    if ($result->num_rows > 0) {
                                                                                                                        while ($data = mysqli_fetch_assoc($result)) {
                                                                                                                    ?> <img src="../img/<?php echo $data['picture']; ?>">
                                                <?php
                                                                                                                        }
                                                                                                                    }
                                                ?>
                                                <span class="fro-profile_main-pic-change"><i class="fas fa-camera"></i></span>
                                                    </div>
                                                    <div class="fro_profile_user-detail">
                                                        <h5 class="fro_user-name">
                                                            <?php
                                                            $result = mysqli_query($con, $image_query);
                                                            $data = mysqli_fetch_assoc($result);
                                                            echo $data['firstname'];
                                                            echo ' ';
                                                            echo $data['lastname'];
                                                            ?>
                                                        </h5>
                                                        <p class="mb-0 fro_user-name-post">
                                                            Occupation: <?php echo $data['occupation']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 mb-3 mb-lg-0">
                                                <div class="header-title">Personal Information</div>
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="seling-report">
                                                            <h5 class=" seling-data-detail">Birthdate: <?php echo $data['birthdate']; ?></h5>
                                                            <h5 class=" seling-data-detail">Address: <?php echo $data['housenum'] . ' ' . $data['streetPurok']; ?></h5>
                                                            <h5 class=" seling-data-detail">Nationality: <?php echo $data['nationality']; ?></h5>
                                                            <h5 class=" seling-data-detail">Phone No.: <?php echo $data['phonenum']; ?></h5>
                                                            <h5 class=" seling-data-detail">Email: <?php echo $data['email']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 align-item-center">
                                                        <canvas id="pro-doughnut" height="180"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 mb-2 mb-lg-0">
                                                <div class="header-title">Emergency Contact</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="seling-report">
                                                            <h5 class=" seling-data-detail">Person: <?php echo $data['contactPerson']; ?></h5>
                                                            <h5 class=" seling-data-detail">Relationship: <?php echo $data['relationship']; ?></h5>
                                                            <h5 class=" seling-data-detail">Address: <?php echo $data['address']; ?></h5>
                                                            <h5 class=" seling-data-detail">Contact No.: <?php echo $data['contactnum']; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end f_profile-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="profile-tabContent">
                                        <div class="tab-pane fade show active" id="profile-dash">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="">
                                                        <form class="form-horizontal form-material mb-0" action="../update.php" method="post" id="updateForm">
                                                            <div class="form-group">
                                                                <h4>Profile Picture</h4>
                                                                <input type="file" id="input-file-now-custom-1" class="dropify" name="picture" data-default-file="../img/<?php echo $data['picture']; ?>">
                                                            </div>

                                                            <h4>Personal Details</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"><label>Firstname</label><input type="text" placeholder="Enter your firstname" class="form-control" name="firstname" id="example-email" value="<?php echo $data['firstname']; ?>"></div>
                                                                <div class="col-md-3"><label>Middlename</label><input type="text" placeholder="Enter your middlename" class="form-control" name="middlename" value="<?php echo $data['middlename']; ?>"></div>
                                                                <div class="col-md-3"><label>Lastname</label><input type="text" placeholder="Enter your lastname" class="form-control" name="lastname" value="<?php echo $data['lastname']; ?>"></div>
                                                                <div class="col-md-3"><label>Suffix</label><input type="text" placeholder="Suffix" class="form-control" name="suffix" value="<?php echo $data['suffix']; ?>"></div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4"><label>Birthdate</label><input type="date" placeholder="Select your birthdate" class="form-control" name="birthdate" id="example-email" value="<?php echo $data['birthdate']; ?>"></div>
                                                                <div class="col-md-4"><label>Birthplace</label><input type="text" placeholder="Enter your birthplace" class="form-control" name="birthplace" value="<?php echo $data['birthplace']; ?>"></div>
                                                                <div class="col-md-4">
                                                                    <label>Gender</label>
                                                                    <select name="gender" class="form-control" value="<?php echo $data['gender']; ?>" required>
                                                                        <option disabled>Select gender</option>
                                                                        <option <?php echo ($data['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                                                        <option <?php echo ($data['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"><label>Nationality</label><input type="text" placeholder="Enter your nationality" class="form-control" name="nationality" id="example-email" value="<?php echo $data['nationality']; ?>"></div>
                                                                <div class="col-md-3">
                                                                    <label>Civil Status</label>
                                                                    <select name="civilstatus" class="form-control" value="<?php echo $data['civilstatus']; ?>" required>
                                                                        <option disabled>Select civil status</option>
                                                                        <option <?php echo ($data['civilstatus'] == 'Single') ? 'selected' : ''; ?>>Single</option>
                                                                        <option <?php echo ($data['civilstatus'] == 'Married') ? 'selected' : ''; ?>>Married</option>
                                                                        <option <?php echo ($data['civilstatus'] == 'Separated') ? 'selected' : ''; ?>>Separated</option>
                                                                        <option <?php echo ($data['civilstatus'] == 'Widowed') ? 'selected' : ''; ?>>Widowed</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><label>Occupation</label><input type="text" placeholder="Enter your occupation" class="form-control" name="occupation" value="<?php echo $data['occupation']; ?>"></div>
                                                                <div class="col-md-3"><label>Phone No.</label><input type="number" placeholder="Enter your phone number" class="form-control" name="phonenum" value="<?php echo $data['phonenum']; ?>"></div>
                                                            </div>

                                                            <h4>Address Details</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-4"><label>House No.</label><input type="number" placeholder="Enter house number" class="form-control" name="housenum" id="example-email" value="<?php echo $data['housenum']; ?>"></div>
                                                                <div class="col-md-4"><label>Street/Purok</label><input type="text" placeholder="Enter street/purok" class="form-control" name="streetPurok" value="<?php echo $data['streetPurok']; ?>"></div>
                                                                <div class="col-md-4"><label>Resident Since</label><input type="number" placeholder="Enter year" class="form-control" name="since" value="<?php echo $data['since']; ?>"></div>
                                                            </div>

                                                            <h4>Barangay Details</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-3">
                                                                    <label>PWD?</label>
                                                                    <select name="pwd" class="form-control" value="<?php echo $data['pwd']; ?>" required>
                                                                        <option disabled>Select option</option>
                                                                        <option <?php echo ($data['pwd'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                                        <option <?php echo ($data['pwd'] == 'No') ? 'selected' : ''; ?>>No</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Senior Citizen?</label>
                                                                    <select name="senior" class="form-control" value="<?php echo $data['senior']; ?>" required>
                                                                        <option disabled>Select option</option>
                                                                        <option <?php echo ($data['senior'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                                        <option <?php echo ($data['senior'] == 'No') ? 'selected' : ''; ?>>No</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label>Voter Status</label>
                                                                    <select name="voterstatus" class="form-control" value="<?php echo $data['voterstatus']; ?>" required>
                                                                        <option disabled>Select option</option>
                                                                        <option <?php echo ($data['voterstatus'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                                                                        <option <?php echo ($data['voterstatus'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><label>Valid ID Type</label><input type="text" placeholder="Enter valid ID type" class="form-control" name="validIdType" id="example-email" value="<?php echo $data['validIdType']; ?>"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Valid ID Picture</label>
                                                                <input type="file" id="input-file-now-custom-1" class="dropify" name="validId" data-default-file="../img/<?php echo $data['validId']; ?>">
                                                            </div>


                                                            <h4>Emergency Contact</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-3"><label>Contact Person</label><input type="text" placeholder="Enter contact person" class="form-control" name="contactPerson" id="example-email" value="<?php echo $data['contactPerson']; ?>"></div>
                                                                <div class="col-md-3"><label>Relationship</label><input type="text" placeholder="Enter relationship" class="form-control" name="relationship" value="<?php echo $data['relationship']; ?>"></div>
                                                                <div class="col-md-3"><label>Address</label><input type="text" placeholder="Enter address" class="form-control" name="address" value="<?php echo $data['address']; ?>"></div>
                                                                <div class="col-md-3"><label>Contact No.</label><input type="text" placeholder="Enter contact number" class="form-control" name="contactnum" value="<?php echo $data['contactnum']; ?>"></div>
                                                            </div>

                                                            <h4>Account Details</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-4"><label>Email</label><input type="email" placeholder="Enter your email" class="form-control" name="email" id="example-email" value="<?php echo $data['email']; ?>" readonly></div>
                                                                <div class="col-md-4"><label>Password</label><input type="password" placeholder="Enter your password" class="form-control" value="<?php echo $data['password']; ?>" readonly></div>
                                                                <div class="col-md-4"><label>Date of Registration</label><input type="date" placeholder="" class="form-control" value="<?php echo $data['regs_date']; ?>" readonly></div>
                                                            </div>
                                                            <!--
                                                            <div class="form-group"><input type="text" placeholder="Full Name" class="form-control"></div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6"><input type="text" placeholder="Phone No" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control">
                                                                        <option>London</option>
                                                                        <option>India</option>
                                                                        <option>Usa</option>
                                                                        <option>Canada</option>
                                                                        <option>Thailand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group"><textarea rows="5" placeholder="Message" class="form-control"></textarea>-->

                                                            <button type="submit" name="submit" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Update Profile</button>
                                                            <input type="button" onclick="if(confirm('Are you sure to reset all changes?')) resetForm();" value="Reset Changes" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0" style="margin-right: 20px;">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
                <div class="card-body">
                    <div class="wrap">
                        <div class="jctkr-label"><strong>Partnership</strong></div>
                        <div class="js-conveyor-example">
                            <ul>
                                <li><img src="../img/logo.png" alt="" class="thumb-sm rounded"> <span class="text-primary font-14"><b>Brgy. Makiling</b></b></span> <span class="text-muted mb-0 font-12">...........................</span></li>
                                <li><img src="../img/lpu-logo.png" alt="" class="thumb-sm rounded"> <span class="text-primary font-14"><b>LPU - Laguna</b></span> <span class="text-muted mb-0 font-12">...........................</span></li>
                                <li><img src="../img/logo.png" alt="" class="thumb-sm rounded"> <span class="text-primary font-14"><b>Brgy. Makiling</b></span> <span class="text-muted mb-0 font-12">...........................</span></li>
                                <li><img src="../img/lpu-logo.png" alt="" class="thumb-sm rounded"> <span class="text-primary font-14"><b>LPU - Laguna</b></span> <span class="text-muted mb-0 font-12">...........................</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
                <footer class="footer text-center text-sm-left">&copy; 2023 Manalo | BSIT 3-1 <span class="text-muted d-none d-sm-inline-block float-right">Crafted by Manalo</span></footer>
            </div>
            <!-- end page content -->
        </div>
        <!--end page-wrapper-inner -->
    </div>
    <!-- end page-wrapper --><!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="../../../apexcharts.com/samples/assets/series1000.js"></script>
    <script src="../../../apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="assets/plugins/dropify/js/dropify.min.js"></script>
    <script src="assets/plugins/ticker/jquery.jConveyorTicker.min.js"></script>
    <script src="assets/plugins/peity-chart/jquery.peity.min.js"></script>
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/pages/jquery.profile.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        function resetForm() {
            document.getElementById("updateForm").reset();
        }
    </script>
</body>
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 12:29:51 GMT -->

</html>