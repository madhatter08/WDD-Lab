<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 12:29:50 GMT -->

<head>
    <meta charset="utf-8">
    <title>Request Monitoring</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../img/logo.png">
    <link href="assets/plugins/footable/css/footable.bootstrap.css" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
</head>
<!--Delete Validation-->
<script type="text/javascript">
    function delete_id(registerId) {
        if (confirm('Are you sure to delete this record?')) {
            window.location.href = 'residents.php?delete_id=' + registerId;
            alert("Record deleted...")
        }
    }
</script>
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
                                                                        $result = mysqli_query($con, $official);
                                                                        if ($result->num_rows > 0) {
                                                                            while ($data = mysqli_fetch_assoc($result)) {
                                                                        ?> <img src="../img/<?php echo $data['image']; ?>">
                <?php
                                                                            }
                                                                        }
                ?>
                <span class="ml-1 nav-user-name hidden-sm"><i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile-official.php"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
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
                                                                            $result = mysqli_query($con, $official);
                                                                            if ($result->num_rows > 0) {
                                                                                while ($data = mysqli_fetch_assoc($result)) {
                                                                            ?> <img src="../img/<?php echo $data['image']; ?>">
        <?php
                                                                                }
                                                                            }
        ?>
        <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
        <div class="media-body">
            <h5 class="text-light">
                Hello,
                <?php
                $result = mysqli_query($con, $official);
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
                        <div class="float-right align-item-center mt-2">
                            <a href="../register-admin.html" class="btn btn-info px-4 align-self-center" style="background-color: #5766da; color: #fff; margin-right:5px;">Register Resident</a>
                            <a href="../pdf-residents.php" class="btn btn-info px-4 align-self-center report-btn">Create Report</a>
                        </div>
                        <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard mr-2"></i>Residents Management</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Total Residents</li>
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
                        <a href="admin.php"><i class="mdi mdi-monitor mdi-24px"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="residents.php"><i class="mdi mdi-folder-account mdi-24px"></i><span>Residents Management</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="mdi mdi-file-alert mdi-24px"></i><span>Requests Management</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="request-cert.php">Total Requests</a></li>
                            <li><a href="res-register.php">Request Form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="announcements.php"><i class="mdi mdi-label-variant mdi-rotate-90 mdi-24px"></i><span>Announcements</span></a>
                    </li>
                    <li>
                        <a href="officials.php"><i class="mdi mdi-home-account mdi-24px"></i><span>Officials</span></a>
                    </li>
                    <li>
                        <a href="records.php"><i class="mdi mdi-file-multiple"></i><span>Records</span></a>
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
                                <div class="card-body">
                                    <table id="footable-3" class="table mb-0" data-paging="true" data-filtering="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
                                                <th data-name="fullName">First Name</th>
                                                <th data-name="fullName">Last Name</th>
                                                <th data-name="fullName">Phone No.</th>
                                                <th data-name="fullName">House No.</th>
                                                <th data-name="fullName">Street/Purok</th>
                                                <th data-name="fullName">Valid ID</th>
                                                <th data-name="fullName">Email</th>
                                                <th data-name="dataSent" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Data Sent</th>
                                                <th data-name="jobTitle" data-breakpoints="xs">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //query to delete individual record
                                            if (isset($_GET['delete_id'])) {
                                                $query = "DELETE from register_tbl WHERE registerId=" . $_GET['delete_id'];
                                                mysqli_query($con, $query);
                                                //header('location:admin.php');
                                            }
                                            $retrieve = mysqli_query($con, "select * from register_tbl");
                                            $ctr = 1;
                                            while ($rows = mysqli_fetch_array($retrieve)) { ?>
                                                <tr registerId="<?php echo $rows['registerId']; ?>">
                                                    <td><?php echo $rows['registerId']; ?></td>
                                                    <td><?php echo $rows['firstname']; ?></td>
                                                    <td><?php echo $rows['lastname']; ?></td>
                                                    <td><?php echo $rows['phonenum']; ?></td>
                                                    <td><?php echo $rows['housenum']; ?></td>
                                                    <td><?php echo $rows['streetPurok']; ?></td>
                                                    <td><?php echo $rows['validIdType']; ?></td>
                                                    <td><?php echo $rows['email']; ?></td>
                                                    <td><?php echo $rows['regs_date']; ?></td>

                                                    <td>
                                                        <a href="../residents-edit.php?id=<?php echo $rows['registerId']; ?>">Edit</a>
                                                        <a href=javascript:delete_id(<?php echo $rows['registerId']; ?>)>Delete</a>

                                                    </td>
                                                </tr>
                                            <?php
                                                $ctr++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                    <!--Editor-->
                                    <!--
                                    <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content form-horizontal" id="editor">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editor-title">Add Row</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group required row">
                                                        <label for="firstName" class="col-sm-3 control-label">First
                                                            Name</label>
                                                        <div class="col-sm-9"><input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required></div>
                                                    </div>
                                                    <div class="form-group require row">
                                                        <label for="lastName" class="col-sm-3 control-label">Last
                                                            Name</label>
                                                        <div class="col-sm-9"><input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="jobTitle" class="col-sm-3 control-label">Job
                                                            Title</label>
                                                        <div class="col-sm-9"><input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group required row">
                                                        <label for="startedOn" class="col-sm-3 control-label">Started
                                                            On</label>
                                                        <div class="col-sm-9"><input type="text" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="dob" class="col-sm-3 control-label">Date of
                                                            Birth</label>
                                                        <div class="col-sm-9"><input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button type="submit" class="btn btn-light">Save changes</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>-->
                                    <!--end modal-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- End row -->
                </div>
                <!-- container -->
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
    <script src="assets/plugins/footable/js/footable.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="../../../apexcharts.com/samples/assets/series1000.js"></script>
    <script src="../../../apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="assets/pages/jquery.dashboard-3.init.js"></script><!-- App js -->
    <script src="assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="assets/pages/jquery.calendar.js"></script><!-- App js -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/pages/jquery.footable.init.js"></script><!-- App js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="assets/pages/jquery.datatable.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 12:29:51 GMT -->

</html>