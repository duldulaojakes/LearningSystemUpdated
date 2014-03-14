<?php

session_start(); 

$shape1 = $_SESSION['shape-1-ans'];
$shape2 = $_SESSION['shape-2-ans'];
$sum = $shape1 + $shape2;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Shape Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Shape 1 Exercise:</td><td>'.($_SESSION['shape-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['shape-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Shape 2 Exercise:</td><td>'.($_SESSION['shape-2-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['shape-2-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>