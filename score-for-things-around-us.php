<?php
session_start(); 

$water = $_SESSION['kindsofwater-ans'];
$light = $_SESSION['kindsoflight-ans'];
$weather = $_SESSION['kindsofweather-ans'];
$sum = $water + $light + $weather;


echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Objects Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Source of Water Exercise:</td><td>'.($_SESSION['kindsofwater-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['kindsofwater-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Source of Light Exercise:</td><td>'.($_SESSION['kindsoflight-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['kindsoflight-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Source of Weather Exercise:</td><td>'.($_SESSION['kindsofweather-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['kindsofweather-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>

 