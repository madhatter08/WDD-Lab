<?php
    require_once('connect.php');
    session_start();

    $registerId = $_SESSION["registerId"];
    $officialId = $_SESSION["officialId"];
    //$requestId = $_SESSION["requestId"];
    //$firstname = $_SESSION["firstname"];
    //$lastname = $_SESSION['lastname'];

    //$session = $_ SESSION['logged_in'];
    $query = mysqli_query($con, "select registerId, count(registerId) as user_count from register_tbl");
    $view = mysqli_fetch_array($query);
    $user_count = $view['user_count'];

    //sql query for image
    $image_query = "SELECT * FROM register_tbl WHERE registerId='$registerId'";
    //$request = "SELECT * FROM request_tbl WHERE requestId='$requestId'";
    $official = "SELECT * FROM official_tbl WHERE officialId='$officialId'";
    //$image _query = Scon-›query("select * from register_tbl where id='$id'");
?>