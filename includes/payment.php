<?php
session_start();
    include "dbInclude.php";

    session_unset();
    session_destroy();
?>

<meta http-equiv="Refresh" content="0; url='checkout.php'" />