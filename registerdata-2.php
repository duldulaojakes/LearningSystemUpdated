<?php 
if(isset($_POST['submit'])){ 
    $dbHost = "sql304.hostwe.com";        //Location Of Database usually its localhost 
    $dbUser = "hostw_14484171";            //Database User Name 
    $dbPass = "123jakes";            //Database Password 
    $dbDatabase = "hostw_14484171_learningsystem";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $lastname = mysql_real_escape_string($_POST['lastname']); 
    $firstname = mysql_real_escape_string($_POST['firstname']); 
	$middlename = mysql_real_escape_string($_POST['middlename']); 
    $address = mysql_real_escape_string($_POST['address']); 
	$contact = mysql_real_escape_string($_POST['contact']); 
    $age = mysql_real_escape_string($_POST['age']); 
	$birth = mysql_real_escape_string($_POST['birth']); 
    $studentnumber = mysql_real_escape_string($_POST['studentnumber']); 
	$username = mysql_real_escape_string($_POST['username']); 
    $password = mysql_real_escape_string($_POST['password']); 
	
    $sql = mysql_query("SELECT * FROM students  
        WHERE username='$username' 
        LIMIT 1"); 
		
		$sql2 = mysql_query("SELECT * FROM students  
        WHERE studentnumber='$studentnumber' 
        LIMIT 1"); 
		
	if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
		$_SESSION['lastname'] = $lastname; 
        $_SESSION['firstname'] = $firstname; 
        $_SESSION['middlename'] = $middlename; 
		$_SESSION['address'] = $address; 
        $_SESSION['contact'] = $contact; 
        $_SESSION['age'] = $age; 
		$_SESSION['birth'] = $birth;
		$_SESSION['studentnumber'] = $studentnumber; 		
        $_SESSION['username'] = ''; 
        $_SESSION['password'] = $password; 
        header("Location: register-user.php?s=3"); // Modify to go to the page you would like 
        exit; 
    }
	
	if(mysql_num_rows($sql2) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        header("Location: register-user.php?s=2"); // Modify to go to the page you would like 
        exit; 
    }
	
    if($studentnumber != ''){ 
        session_start(); 
        mysql_query("INSERT IGNORE INTO students (lastname,firstname,middlename,address,contactnumber,age,birthday,studentnumber,username,password)"
	     ." VALUES('$lastname','$firstname','$middlename','$address','$contact','$age','$birth','$studentnumber','$username','$password') ")
		or die(mysql_error()); 
        header("Location: register-user.php?s=1"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: login.php?s=1"); 
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php");     
    exit; 
} 
?>