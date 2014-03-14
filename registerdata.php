<?php
ob_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'learningsystem';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$lastname = $_GET['lastname'];
$firstname = $_GET['firstname'];
$middlename = $_GET['middlename'];
$address = $_GET['address'];
$contact = $_GET['contact'];
$age = $_GET['age'];
$birth = $_GET['birth'];
$studentnumber = $_GET['studentnumber'];
$username = $_GET['username'];
$password = $_GET['password'];

$_SESSION['slastname']=$_GET['lastname'];
$_SESSION['sfirstname']=$_GET['firstname'];
$_SESSION['smiddlename']=$_GET['middlename'];
$_SESSION['saddress']=$_GET['address'];
$_SESSION['scontact']=$_GET['contact'];
$_SESSION['sage']=$_GET['age'];
$_SESSION['sbirth']=$_GET['birth'];
$_SESSION['sstudentnumber']=$_GET['studentnumber'];
$_SESSION['susername']=$_GET['username'];
$_SESSION['spassword']=$_GET['password'];


if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM students WHERE studentnumber = '" . $studentnumber . "'";

mysql_select_db('learningsystem');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
if(mysql_num_rows($retval)) {
     while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
     {
      header("Location: register.php?s=2");
     }
   } else {
     mysql_query("INSERT IGNORE INTO students (lastname,firstname,middlename,address,contactnumber,age,birthday,studentnumber,username,password)"
	 ." VALUES('$lastname','$firstname','$middlename','$address','$contact','$age','$birth','$studentnumber','$username','$password') ")
     or die(mysql_error()); 
	 
	/* Redirect browser */
	header("Location: register.php?s=1");
	/* Make sure that code below does not get executed when we redirect. */
	exit;
	 
}

mysql_close($conn);


?>
