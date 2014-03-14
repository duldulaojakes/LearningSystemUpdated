<?php
session_start(); 
$animal1 = $_SESSION['animals-1-ans'];
$animal2 = $_SESSION['animals-2-ans'];
$animal3 = $_SESSION['animals-3-ans'];
$sum = $animal1 + $animal2 + $animal3;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Animals Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Animals in Land Exercise:</td><td>'.($_SESSION['animals-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['animals-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Animals in Water Exercise:</td><td>'.($_SESSION['animals-2-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['animals-2-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Animals in Air Exercise:</td><td>'.($_SESSION['animals-3-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['animals-3-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>