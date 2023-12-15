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

    <title>Request Update </title>
    <link href="img/logo.png" rel="shortcut icon">
</head>


<body style="background-image: url(img/arc.jpg); background-size: cover;">
    <div class="container">
        <header>Update Request</header>
        <form action="" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Request Details</span>
                    <?php
                    require_once('connect.php');
                    if (isset($_POST['submit'])) {
                        $fullname = $_POST['fullname'];
                        $certType = $_POST['certType'];
                        $purpose = $_POST['purpose'];
                        $requester = $_POST['requester'];
                        $position = $_POST['position'];
                        $requestId = $_POST['id'];

                        $query = "update request_tbl set fullname='$fullname',certType='$certType',purpose='$purpose',requester='$requester',position='$position' WHERE requestId='$requestId'";
                        //$result = $con->query($query);
                        $result = mysqli_query($con, $query);

                        if ($result == TRUE) {
                            echo '<script type="text/JavaScript">';
                            echo 'alert("Record successfully updated!")';
                            echo '</script>'; ?>
                            <script type="text/Javascript">
                                window.location='dashboard/request-cert.php';
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
                        $requestId = $_GET['id'];
                        $sql = "SELECT * FROM request_tbl WHERE requestId = '$requestId'";
                        $result = mysqli_query($con, $sql);

                        if ($result->num_rows) {
                            while ($row = $result->fetch_assoc()) {
                                $fullname = $row['fullname'];
                                $certType = $row['certType'];
                                $purpose = $row['purpose'];
                                $requester = $row['requester'];
                                $position = $row['position'];
                            }
                        }
                    }
                    ?>
                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fullname" value="<?php echo $fullname; ?>" placeholder="i.e. Juan C. Dela Cruz" required>
                            <input type="hidden" name="id" value="<?php echo $requestId; ?>">
                        </div>

                        <div class="input-field">
                            <label>Certificate Type</label>
                            <select name="certType" required>
                                <option disabled>Select option</option>
                                <option <?php echo $certType == 'Barangay Clearance' ? 'selected' : ''; ?>>Barangay Clearance</option>
                                <option <?php echo $certType == 'Business Clearance' ? 'selected' : ''; ?>>Business Clearance</option>
                                <option <?php echo $certType == 'Certificate of Indigency' ? 'selected' : ''; ?>>Certificate of Indigency</option>
                                <option <?php echo $certType == 'Certificate of Residency' ? 'selected' : ''; ?>>Certificate of Residency</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Purpose</label>
                            <input type="text" name="purpose" value="<?php echo $purpose; ?>" placeholder="i.e. Application" required>
                        </div>

                        <div class="input-field">
                            <label>Requester</label>
                            <input type="text" name="requester" value="<?php echo $requester; ?>" placeholder="Enter requester name" required>
                        </div>

                        <div class="input-field">
                            <label>Position</label>
                            <input type="text" name="position" value="<?php echo $position; ?>" placeholder="Enter requester position" required>
                        </div>

                        <div class="input-field">

                        </div>

                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText"><a href="dashboard/request-cert.php" style="color: #fff;">Cancel</a></span>
                        </div>

                        <button class="submit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="register/script.js"></script>
</body>

</html>