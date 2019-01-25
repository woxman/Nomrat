<?php
session_start();
unset($_SESSION['sess_user_id'],$_SESSION['sess_username'],$_SESSION['sess_name']);
header("location: index.php");
?>
