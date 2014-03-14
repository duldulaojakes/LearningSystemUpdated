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
    $usr = mysql_real_escape_string($_POST['username']); 
    $pas = mysql_real_escape_string($_POST['password']); 
    $sql = mysql_query("SELECT * FROM students  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
		$_SESSION['studentid'] = $row['studentid']; 
        $_SESSION['lastname'] = $row['lastname']; 
        $_SESSION['firstname'] = $row['firstname']; 
        $_SESSION['middlename'] = $row['middlename']; 
		$_SESSION['address'] = $row['lastname']; 
        $_SESSION['contactnumber'] = $row['contactnumber']; 
        $_SESSION['age'] = $row['age']; 
		$_SESSION['birthday'] = $row['birthday']; 
		$_SESSION['studentnumber'] = $row['studentnumber']; 
        $_SESSION['username'] = $row['username']; 
		$_SESSION['password'] = $row['password']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: homeinterface.php"); // Modify to go to the page you would like 
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