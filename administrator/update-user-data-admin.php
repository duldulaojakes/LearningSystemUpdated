<?php 

session_start(); 


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
	
	$studentid = mysql_real_escape_string($_POST['studentid']); 
    $lastname = mysql_real_escape_string($_POST['lastname']); 
    $firstname = mysql_real_escape_string($_POST['firstname']); 
	$middlename = mysql_real_escape_string($_POST['middlename']); 
    $address = mysql_real_escape_string($_POST['address']); 
	$contact = mysql_real_escape_string($_POST['contactnumber']); 
    $age = mysql_real_escape_string($_POST['age']); 
	$birth = mysql_real_escape_string($_POST['birthday']); 
    $studentnumber = mysql_real_escape_string($_POST['studentnumber']); 
	$username = mysql_real_escape_string($_POST['username']); 
    $password = mysql_real_escape_string($_POST['password']); 
	
	$sessionusername = mysql_real_escape_string($_POST['username1']); 
	$sessionstudentnumber = mysql_real_escape_string($_POST['studentnumber1']); 
	
    $sql = mysql_query("SELECT * FROM students  
        WHERE username='$username' AND username!='$sessionusername'
        LIMIT 1"); 
		
	$sql2 = mysql_query("SELECT * FROM students  
    WHERE studentnumber='$studentnumber' AND studentnumber != '$sessionstudentnumber'
    LIMIT 1"); 
		
	if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        header("Location: adminedit.php?id=$studentid&status=usernameexists"); // Modify to go to the page you would like 
        exit; 
    }
	
	if(mysql_num_rows($sql2) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        header("Location: adminedit.php?id=$studentid&status=studentnumexists"); // Modify to go to the page you would like 
        exit; 
    }
	
    if($studentid != ''){ 
        session_start(); 
        mysql_query("UPDATE students SET lastname = '$lastname',firstname = '$firstname',middlename = '$middlename',address = '$address',contactnumber = '$contact',age = '$age',birthday = '$birth',studentnumber = '$studentnumber',username = '$username',password = '$password' WHERE studentid='$studentid'")
		or die(mysql_error()); 

        header("Location: adminedit.php?id=$studentid&status=updated"); // Modify to go to the page you would like 
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