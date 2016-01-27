<?php 

session_start();
unset($SESSION['user_id']);
unset($SESSION['user_name']);
session_destroy();

header("Location: ../../index.php");

?>