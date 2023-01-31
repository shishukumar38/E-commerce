<?php
session_start();
session_unset($_SESSION['user_name']);
header('location:index.php');
 ?>
