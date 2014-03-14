<?php 
session_start(); 
	
if(isset($_POST['submit'])){ 

	$color = mysql_real_escape_string($_POST['color']); 
    $shapes = mysql_real_escape_string($_POST['shapes']); 
	$sizes = mysql_real_escape_string($_POST['sizes']); 
    $positions = mysql_real_escape_string($_POST['positions']); 
	$numbers = mysql_real_escape_string($_POST['numbers']); 
    $alphabets = mysql_real_escape_string($_POST['alphabets']); 
	$bodyparts = mysql_real_escape_string($_POST['bodyparts']); 
    $plants = mysql_real_escape_string($_POST['plants']); 
	$animals = mysql_real_escape_string($_POST['animals']); 
    $objects = mysql_real_escape_string($_POST['objects']); 
	
	$_SESSION['session_color'] = $color;
	$_SESSION['session_shapes'] = $shapes;
	$_SESSION['session_sizes'] = $sizes;
	$_SESSION['session_positions'] = $positions;
	$_SESSION['session_numbers'] = $numbers;
	$_SESSION['session_alphabets'] = $alphabets;
	$_SESSION['session_bodyparts'] = $bodyparts;
	$_SESSION['session_plants'] = $plants;
	$_SESSION['asession_nimals'] = $animals;
	$_SESSION['session_objects'] = $objects;
	
  	header("Location: save-results-2.php?s=1"); 
        exit; 	

}else{    //If the form button wasn't submitted go to the index page, or login page 
		header("Location: view-results-2.php?s=1"); 
        exit; 
} 
?>