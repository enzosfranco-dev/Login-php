<?php
seesion_start();
session_destroy();
header("Location: login.php");
exit;
?>