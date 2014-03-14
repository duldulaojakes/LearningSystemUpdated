<HTML>
<HEAD>
<TITLE>homewelcome</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">


<link rel="stylesheet" href="jsjqueryDatepicker/public/css/default.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/css/shCoreDefault.css" />
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
        <script type="text/javascript" src="jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>
		
		<script src="adminjs/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
		
<script type="text/javascript" src="jsjqueryDatepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="jsjqueryDatepicker/configurations/public/javascript/core.js"></script>
<script>
			function IsValue_Register(){
			
				var  lastname = document.vrmainfrm.lastname.value;
				var  firstname = document.vrmainfrm.firstname.value;
				var  middlename = document.vrmainfrm.middlename.value;
				
				var  address = document.vrmainfrm.address.value;
				var  contact = document.vrmainfrm.contact.value;
				var  age = document.vrmainfrm.age.value;
				var  birth = document.vrmainfrm.birth.value;
				var studentnumber = document.vrmainfrm.studentnumber.value;
				
				window.location = "registerdata.php?"+"lastname=" + lastname + "&firstname=" + firstname 
				+ "&middlename="+middlename+"&address="+address+"&contact="+contact+"&age="+age+"&birth="+birth+"&studentnumber="+studentnumber;
			}
</script>
<style title="cssmenu"> accouts
import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@charset 'UTF-8';
/* Base Styles */
#cssmenu > ul,
#cssmenu > ul li,
#cssmenu > ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu > ul {
  position: relative;
  z-index: 597;
  float: left;
}
#cssmenu > ul li {
  float: left;
  min-height: 1px;
  line-height: 1.3em;
  vertical-align: middle;
  padding: 10px;
}
#cssmenu > ul li.hover,
#cssmenu > ul li:hover {
  z-index: 599;
  cursor: default;
}
#cssmenu > ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 598;
}
#cssmenu > ul ul li {
  float: none;
}
#cssmenu > ul li:hover > ul {
  visibility: visible;
}
/* Align last drop down RTL */
/* Theme Styles */
#cssmenu > ul a:link {
  text-decoration: none;
}
#cssmenu > ul a:active {
  color:#FFFF99;
}
#cssmenu li {
  padding: 0;
  color:#CCFFCC;
}
#cssmenu {
  font-family:"comic sans ms",bold;
  color:#0000FF;
  width:auto;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  background:#FF00CC;
  font-size: 20px;
  -moz-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
  -webkit-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
  box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.3);
}
#cssmenu > ul {
  padding: 0 5px;
  -moz-box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  display: block;
  float: none;
  zoom: 1;
  font-size:24px;
}
#cssmenu > ul:before {
  content: '';
  display: block;
}
#cssmenu > ul:after {
  content: '';
  display: table;
  clear: both;
}
#cssmenu > ul > li {
  padding: 8px 5px;
}
#cssmenu > ul > li > a,
#cssmenu > ul > li > a:link,
#cssmenu > ul > li > a:visited {
  text-shadow: 0 -1px 1px #004881;
  color:#FFFF99;
  padding: 7px 20px;
  display: block;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
}
#cssmenu > ul > li > a:hover,
#cssmenu > ul > li:hover > a {
  background-color: #0082e7;
}
#cssmenu li li a {
  color:#0000FF;
  font-size: 18px;
 
}
#cssmenu li li a:hover {
  color:#FF00FF;
  border-color: #5c5c5c;
}
#cssmenu ul ul {
  margin: 0 10px;
  padding: 0 10px;
  float: none;
  background:#00CC00;
  border: 2px solid #1b9bff;
  border-top: none;
  right: 0;
  left: 0;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -ms-border-radius: 0 0 3px 3px;
  -o-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
  -moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}
#cssmenu ul > li > ul > li {
  margin: 0 10px 0 0;
  position: relative;
  padding: 0;
  float: left;
}
#cssmenu ul > li > ul > li > a {
  padding: 10px 20px 10px 10px;
  display: block;
}
#cssmenu ul > li > ul > li.has-sub > a:before {
  content: '';
  position: absolute;
  top: 18px;
  right: 6px;
  border: 5px solid transparent;
  border-top: 5px solid #8b8b8b;
}
#cssmenu ul > li > ul > li.has-sub > a:hover:before {
  border-top: 5px solid #5c5c5c;
}
#cssmenu ul ul ul {
  width: 200px;
  top: 100%;
  border: 2px solid #1b9bff;
}
#cssmenu ul ul ul li {
  float: none;
}
</style>
</HEAD>
<center><BODY background="back copy.jpg" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<form id="vrmainfrm" name="vrmainfrm" method="POST">
<div align="center"><font color="#FF00FF" ><span id="spanDate"></span></font></div>

<!-- ImageReady Slices (homewelcome.psd) -->

<TABLE WIDTH=1000 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=9>
			<IMG SRC="images/homewelcome_01.jpg" WIDTH=1000 HEIGHT=178 ALT=""></TD>
			
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=178 ALT=""></TD>
			
	</TR>
	<TR>
		<TD COLSPAN=9>
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='homewelcome.php'><span>Home</span></a></li>
			   <li class='has-sub'><a href='subjects.php'><span>Subject</span></a>
				  <ul>
					 <li class='last'><a href='Math.php'><span>Math</span></a></li>
					 <li class='last'><a href='English.php'><span>English</span></a></li>
					  <li class='last'><a href='sciencehome.php'><span>Science</span></a></li>
				  </ul>
			   </li>
			   <li class="has-sub"><a href='#'><span>Exercises</span></a>
				<ul>
					 <li class='last'><a href='#'><span>Math Exercises</span></a></li>
					 <li class='last'><a href='#'><span>English Exercises</span></a></li>
					  <li class='last'><a href='#'><span>Science Exercises</span></a></li>
				  </ul>
			   </li>
			   
			   <li class='last'><a href='#'><span>Contact us</span></a></li>
				<li class='last'><a href='#'><span>Student Progress</span></a></li>
					<li class='last'><a href='#'><span>Login</span></a></li>
			</ul>
         </div>
</TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD>
	</TR>
	

<tr>
<td>
<table style="padding-left: 30px; padding-top: 85px;">
<tr>
<td></td><td style="color: rgb(196, 52, 121); font-family: arial; "><h2>
<?php
echo "You can update your account here."
?>
</h2></td>
</tr>
<tr>
	<td>Last Name: </td><td><input style="width: 200px;" type="text" id="lastname"></td>
</tr>
<tr>
	<td>First Name: </td><td><input style="width: 200px;" type="text" id="firstname"></td>
</tr>
<tr>
	<td>Middle Name: </td><td><input style="width: 200px;" type="text" id="middlename"></td>
</tr>
<tr>
	<td>Address: </td><td><input style="width: 200px;" type="text" id="address"></td>
</tr>
<tr>
	<td>Contact Number: </td><td><input style="width: 200px;" type="text" id="contact"></td>
</tr>
<tr>
	<td>Age: </td><td><input style="width: 200px;" type="text" id="age"></td>
</tr>

<tr>
	<td>Birthday: </td><td><input type="text" style="width: 200px;" id="birth" class="datepickervalue"></td>
</tr>

<tr>
	<td>Student Number: </td><td><input type="text" style="width: 200px;" id="studentnumber"></td>
</tr>

<tr><td>&nbsp</td><td>&nbsp</td></tr>
<tr>
	<td></td><td><a style="color: white; padding-top: 0px; background-color: rgb(101, 175, 101); padding-left: 55px;padding-bottom: 12px;padding-right: 63px;padding-top: 10px;" href="javascript:IsValue_Update();">Update</a></td>
</tr>
</table>
</td>
</tr>



</TABLE>
<!-- End ImageReady Slices -->
</form></BODY></center>
</HTML>