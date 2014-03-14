<?php 
session_start(); 
$studid = $_GET['id'];

header("Location: view-results-2.php?studentid=$studid"); // Modify to go to the page you would like 
exit; 
?>