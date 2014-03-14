<?php
session_start();
?>

<HTML>
<HEAD>
<TITLE>homewelcome</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
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
<div align="center"><font color="#FF00FF" ><span id="spanDate"></span></font></div>
<script type="text/javascript">
           var months = ['January','February','March','April','May','June','July',
'August','September','October','November','December'];       
var tomorrow = new Date();
tomorrow.setTime(tomorrow.getTime() + (1000*3600*24));       
document.getElementById("spanDate").innerHTML = months[tomorrow.getMonth()] + " " + tomorrow.getDate()+ ", " + tomorrow.getFullYear();
              </script>
<!-- ImageReady Slices (homewelcome.psd) -->
<?php 

$_SESSION['animals-1-ans'] = 'none';
$_SESSION['animals-2-ans'] = 'none';
$_SESSION['animals-3-ans'] = 'none';

$_SESSION['eyes-1-ans'] =  'none';
$_SESSION['ears-1-ans'] =  'none';
$_SESSION['nose-1-ans'] =  'none';
$_SESSION['tongue-1-ans'] =  'none';
$_SESSION['hands-1-ans'] =  'none';

$_SESSION['color-1-ans'] =  'none';
$_SESSION['color-2-ans'] =  'none';

$_SESSION['letter-a-ans'] =  'none';
$_SESSION['letter-b-ans'] =  'none';
$_SESSION['letter-c-ans'] =  'none';
$_SESSION['letter-d-ans'] =  'none';
$_SESSION['letter-e-ans'] =  'none';
$_SESSION['letter-f-ans'] =  'none';
$_SESSION['letter-g-ans'] =  'none';
$_SESSION['letter-h-ans'] =  'none';
$_SESSION['letter-i-ans'] =  'none';
$_SESSION['letter-j-ans'] =  'none';
$_SESSION['letter-k-ans'] =  'none';
$_SESSION['letter-l-ans'] =  'none';
$_SESSION['letter-m-ans'] =  'none';
$_SESSION['letter-n-ans'] =  'none';
$_SESSION['letter-o-ans'] =  'none';
$_SESSION['letter-p-ans'] =  'none';
$_SESSION['letter-q-ans'] =  'none';
$_SESSION['letter-r-ans'] =  'none';
$_SESSION['letter-s-ans'] =  'none';
$_SESSION['letter-t-ans'] =  'none';
$_SESSION['letter-u-ans'] =  'none';
$_SESSION['letter-v-ans'] =  'none';
$_SESSION['letter-w-ans'] =  'none';
$_SESSION['letter-x-ans'] =  'none';
$_SESSION['letter-y-ans'] =  'none';
$_SESSION['letter-z-ans'] =  'none';

$_SESSION['number-one-ans'] =  'none'; 
$_SESSION['number-two-ans'] =  'none';
$_SESSION['number-three-ans'] =  'none';
$_SESSION['number-four-ans'] =  'none';
$_SESSION['number-five-ans'] =  'none';

$_SESSION['plant-test-1-ans'] =  'none'; 
$_SESSION['plant-size-1-ans'] =  'none'; 
$_SESSION['flowers-1-ans']=  'none'; 
$_SESSION['fruits-1-ans'] =  'none'; 
$_SESSION['vegetables-1-ans']=  'none'; 

$_SESSION['position-1-ans'] =  'none'; 
$_SESSION['position-4-ans'] =  'none'; 
$_SESSION['position-2-ans'] =  'none'; 
$_SESSION['position-3-ans'] =  'none'; 

$_SESSION['shape-1-ans'] =  'none'; 
$_SESSION['shape-2-ans'] =  'none'; 

$_SESSION['size-1-ans'] =  'none'; 
$_SESSION['size-2-ans'] =  'none'; 

$_SESSION['kindsofwater-ans'] =  'none'; 
$_SESSION['kindsoflight-ans'] =  'none'; 
$_SESSION['kindsofweather-ans'] =  'none'; 







?>
<TABLE WIDTH=1000 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/requirements.jpg" WIDTH=46 HEIGHT=1 ALT=""></TD>
		<TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY></center>
</HTML>