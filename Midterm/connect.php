<?php
    $SERVER_NAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "users_db";

    //connection - string
    $con = new mysqli($SERVER_NAME,$USERNAME,$PASSWORD,$DB_NAME);

    if($con->connect_error){
        die("Connection failed: ".$con->connect_error);
    }
    //echo "Connection successful...";
    //$con->close();
?>