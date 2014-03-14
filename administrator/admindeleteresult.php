<?php 
session_start(); 
$s = $_GET['id'];
$id= $_GET['studentid'];

header("Location: view-results-2.php?id=$s&status=delete&studentid=$id"); // Modify to go to the page you would like 
exit; 
?>