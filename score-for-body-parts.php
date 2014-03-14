<?php
session_start(); 

$eyes = $_SESSION['eyes-1-ans'];
$ears = $_SESSION['ears-1-ans'];
$nose = $_SESSION['nose-1-ans'];
$tongue = $_SESSION['tongue-1-ans'];
$hands = $_SESSION['hands-1-ans'];

$sum = $eyes + $nose + $ears + $tongue + $hands;


echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Body Parts Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Find Eyes Exercise:</td><td>'.($_SESSION['eyes-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['eyes-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Find Ears Exercise:</td><td>'.($_SESSION['ears-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['ears-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Find Nose Exercise:</td><td>'.($_SESSION['nose-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['nose-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Find Tongue Exercise:</td><td>'.($_SESSION['tongue-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['tongue-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Find Hands Exercise:</td><td>'.($_SESSION['hands-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['hands-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>