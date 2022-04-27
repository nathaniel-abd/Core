<?php
session_start();
    require "dbInclude.php";

    session_unset();
    session_destroy();
?>

<meta http-equiv="Refresh" content="0; url='../cart.php'" />