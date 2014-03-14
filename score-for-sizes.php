<?php

session_start(); 

$size1 = $_SESSION['size-1-ans'];
$size2 = $_SESSION['size-2-ans'];

$sum = $size1 + $size2;


echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Size Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Size 1 Exercise:</td><td>'.($_SESSION['size-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['size-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Size 2 Exercise:</td><td>'.($_SESSION['size-2-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['size-2-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>