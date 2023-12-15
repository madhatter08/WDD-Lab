<?php
require_once('connect.php');
if (isset($_POST['submit'])) {
    if ($con) {
        $fullname = $_POST['fullname'];
        $certType = $_POST['certType'];
        $purpose = $_POST['purpose'];
        $requester = $_POST['requester'];
        $position = $_POST['position'];

        $query = "insert into request_tbl(fullname,certType,purpose,status,requestDate,requester,position) 
                  values('$fullname','$certType','$purpose','Pending',NOW(),'$requester','$position')";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script type="text/JavaScript">';
            echo 'alert("Successful submission of request!")';
            echo '</script>'; ?>
            <script type="text/Javascript">
                window.location='dashboard/res-register.php';
                </script>
<?php
        } else {
            $err[] = 'Registration failed...' . mysqli_error($con);
        }
        mysqli_close($con);
    } else {
        die('Connection Failed: ' . mysqli_connect_error());
    }
}
?>