<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 12:29:50 GMT -->

<head>
    <meta charset="utf-8">
    <title>Request Form</title>
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
                        <!--<div class="float-right align-item-center mt-2"><button class="btn btn-info px-4 align-self-center report-btn">Create Report</button></div>-->
                        <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard mr-2"></i>Request Form</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Barangay Issuance Request Form</li>
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
                        <a href="resident-request.php"><i class="mdi mdi-file-alert mdi-24px"></i><span>Request Form</span></a>
                    </li>
                    <li>
                        <a href="resident-official.php"><i class="mdi mdi-home-account mdi-24px"></i><span>Officials</span></a>
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
                                        <h3>Barangay Issuance Request Form</h3>
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
                                                        <form class="form-horizontal form-material mb-0" action="../request-resident.php" method="post" id="updateForm">
                                                            <h4>Request Details</h4>
                                                            <div class="form-group"><label>Fullname</label><input type="text" name="fullname" placeholder="i.e. Juan C. Dela Cruz" class="form-control" required></div>
                                                            <div class="form-group">
                                                                <label>Certificate Type</label>
                                                                <select name="certType" class="form-control" required>
                                                                    <option disabled selected>Select option</option>
                                                                    <option>Barangay Clearance</option>
                                                                    <option>Business Clearance</option>
                                                                    <option>Certificate of Indigency</option>
                                                                    <option>Certificate of Residency</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label>Purpose</label><textarea rows="3" name="purpose" placeholder="i.e. Application" class="form-control"></textarea></div>
                                                            <h4>Requester Details</h4>
                                                            <div class="form-group row">
                                                                <div class="col-md-6"><label>Name</label><input type="text" name="requester" class="form-control" id="example-email" value="<?php echo $data['firstname'] . ' ' . $data['lastname']; ?>" readonly></div>
                                                                <div class="col-md-6"><label>Position</label><input type="text" name="position" class="form-control" value="<?php echo 'Resident'; ?>" readonly></div>
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

                                                            <button type="submit" name="submit" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Submit</button>
                                                            <input type="button" onclick="if(confirm('Are you sure to reset all changes?')) resetForm();" value="Cancel" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0" style="margin-right: 20px;">
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