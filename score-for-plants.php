<?php
session_start(); 

$test = $_SESSION['plant-test-1-ans'];
$size = $_SESSION['plant-size-1-ans'];
$flowers = $_SESSION['flowers-1-ans'];
$fruits = $_SESSION['fruits-1-ans'];
$vegetables = $_SESSION['vegetables-1-ans'];

$sum = $test + $size + $flowers + $fruits + $vegetables;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Plants Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Plant Determine Exercise:</td><td>'.($_SESSION['plant-test-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['plant-test-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Plant Size Exercise:</td><td>'.($_SESSION['plant-size-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['plant-size-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Flowers Determine Exercise:</td><td>'.($_SESSION['flowers-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['flowers-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Fruits Determine Exercise:</td><td>'.($_SESSION['fruits-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['fruits-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Vegetable Determine Exercise:</td><td>'.($_SESSION['vegetables-1-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['vegetables-1-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
	'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	
	'</table></div>';
?>