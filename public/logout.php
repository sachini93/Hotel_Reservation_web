<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['usertype']);
session_destroy();

header("Location: system_user/login.php");


?>
