<?php

session_start(); 

$one = $_SESSION['number-one-ans'];
$two = $_SESSION['number-two-ans'];
$three = $_SESSION['number-three-ans'];
$four = $_SESSION['number-four-ans'];
$five = $_SESSION['number-five-ans'];

$sum = $one + $two +$three +$four +$five;


echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Number Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Number 1 Exercise:</td><td>'.($_SESSION['number-one-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['number-one-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Number 2 Exercise:</td><td>'.($_SESSION['number-two-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['number-two-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Number 3 Exercise:</td><td>'.($_SESSION['number-three-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['number-three-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Number 4 Exercise:</td><td>'.($_SESSION['number-four-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['number-four-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Number 5 Exercise:</td><td>'.($_SESSION['number-five-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['number-five-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>