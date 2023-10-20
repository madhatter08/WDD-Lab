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
                                <h1 class="h4 text-gray-900 mb-4">Salary Details</h1>
                            </div>
                            <!-- PHP Code -->
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $employee_id = $_POST["employee_id"];
                                    $employee_name = $_POST["employee_name"];
                                    $date_of_payroll = $_POST["date_of_payroll"];
                                    $hours_worked = $_POST["hours_worked"];
                                    $rate_per_hour = $_POST["rate_per_hour"];

                                    // Calculate gross pay
                                    $gross_pay = $hours_worked * $rate_per_hour;

                                    // Calculate VAT based on gross pay
                                    if ($gross_pay > 25000) {
                                        $vat = $gross_pay * 0.12;
                                        $tax = "(12%)";
                                    } elseif ($gross_pay >= 15000 && $gross_pay <= 25000) {
                                        $vat = $gross_pay * 0.10;
                                        $tax = "(10%)";
                                    } else {
                                        $vat = $gross_pay * 0.08;
                                        $tax = "(8%)";
                                    }

                                    // Deductions (SSS and Philhealth)
                                    $sss_deduction = $gross_pay * 0.045; //4.5% of gross pay
                                    $philhealth_deduction = $gross_pay * 0.04; //4% of gross pay

                                    // Calculate total deductions
                                    $total_deductions = $vat + $sss_deduction + $philhealth_deduction;

                                    // Calculate net pay
                                    $net_pay = $gross_pay - $total_deductions;

                                    // Display results
                                    echo "<p><b>Employee Information</b></p>";
                                    echo "<p>Employee ID: $employee_id</p>";
                                    echo "<p>Employee Name: $employee_name</p>";
                                    echo "<p>Date of Payroll: $date_of_payroll</p>";
                                    echo "<p>Gross Pay: $gross_pay</p><br>";

                                    echo "<p><b>Deductions Breakdown</b></p>";
                                    echo "<p>VAT $tax: $vat</p>";
                                    echo "<p>SSS (4.5%): $sss_deduction</p>";
                                    echo "<p>PhilHealth (4%): $philhealth_deduction</p>";
                                    echo "<p>Total Deductions: $total_deductions</p><br>";

                                    echo "<p><b>Net Pay: $net_pay</b></p>";
                                }
                            ?>

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