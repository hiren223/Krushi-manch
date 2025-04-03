<?php

session_start();
session_unset();
session_destroy();

header("location: ../krushi-manch/login/login.php");
exit;

?>