<?php 
session_start(); 
$s = $_GET['id'];
header("Location: dashboard.php?id=$s&status=delete"); // Modify to go to the page you would like 
exit; 
?>