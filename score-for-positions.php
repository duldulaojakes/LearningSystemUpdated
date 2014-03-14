<?php

session_start(); 

$position1 = $_SESSION['position-1-ans'];
$position4 = $_SESSION['position-4-ans'];
$position2 = $_SESSION['position-2-ans'];
$position3 = $_SESSION['position-3-ans'];

$sum = $position1 + $position2 + $position3 + $position4;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Position Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Position 1 Exercise:</td><td>'.($_SESSION['position-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['position-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Position 2 Exercise:</td><td>'.($_SESSION['position-4-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['position-4-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Position 3 Exercise:</td><td>'.($_SESSION['position-2-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['position-2-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Position 4 Exercise:</td><td>'.($_SESSION['position-3-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['position-3-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>