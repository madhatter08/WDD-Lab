<?php
    require_once('connect.php');
    session_start();

    $id = $_SESSION["id"];
    $fullname = $_SESSION["fullname"];

    //$session = $_ SESSION['logged_in'];
    $query = mysqli_query($con, "select id, count(id) as user_count from users");
    $view = mysqli_fetch_array($query);
    $user_count = $view['user_count'];
    
    //sql query for image
    $image_query = "SELECT * FROM users WHERE id='$id'";
    //$image _query = Scon-›query("select * from users where id='$id'");
?>