<?php

session_start(); 

$color1 = $_SESSION['color-1-ans'];
$color2 = $_SESSION['color-2-ans'];
$sum = $color1 + $color2;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Color Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Color 1 Exercise:</td><td>'.($_SESSION['color-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['color-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Color 2 Exercise:</td><td>'.($_SESSION['color-2-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['color-2-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
		'</table></div>';
?>