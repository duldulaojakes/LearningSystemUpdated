<?php
		session_start(); 
		$_SESSION['studentid'] = ''; 
        $_SESSION['lastname'] = ''; 
        $_SESSION['firstname'] = '';  
        $_SESSION['middlename'] = ''; 
		$_SESSION['address'] = ''; 
        $_SESSION['contactnumber'] = '';  
        $_SESSION['age'] = '';  
		$_SESSION['birthday'] = ''; 
		$_SESSION['studentnumber'] = '';  
        $_SESSION['username'] = ''; 
		$_SESSION['password'] = ''; 
        $_SESSION['logged'] = FALSE; 
		
		header("Location: login.php"); // Modify to go to the page you would like 
        exit; 
?>