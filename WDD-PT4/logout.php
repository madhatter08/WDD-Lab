<?php
    session_start();
    session_destroy();

    header("Location: index-2.html");
?>