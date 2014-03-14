<?php
session_start();
?>

<HTML>
<HEAD>
<TITLE>homeinterface</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style title="cssmenu">
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
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (homeinterface.psd) -->
<TABLE align="center" WIDTH=1000 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=10>
			<IMG SRC="images/homeinterface_01.jpg" WIDTH=1000 HEIGHT=33 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3 ROWSPAN=2>
			<IMG SRC="images/homeinterface_02.jpg" WIDTH=238 HEIGHT=514 ALT=""></TD>
		<TD COLSPAN=4>
			<IMG SRC="images/homeinterface_03.jpg" WIDTH=512 HEIGHT=492 ALT=""></TD>
		<TD COLSPAN=3 ROWSPAN=2>
			<IMG SRC="images/homeinterface_04.jpg" WIDTH=250 HEIGHT=514 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=4>
			<IMG SRC="images/homeinterface_05.jpg" WIDTH=512 HEIGHT=22 ALT=""></TD>
	</TR>
	<TR>
		<TD ROWSPAN=2>
			<IMG SRC="images/homeinterface_06.jpg" WIDTH=61 HEIGHT=453 ALT=""></TD>
		<TD>
			<a href="homeinterface.php"><IMG SRC="images/homeinterface_07.jpg" ALT="" WIDTH=102 HEIGHT=44 border="0"></a></TD>
		<TD COLSPAN=2>
			<a href="subjects.php"><IMG SRC="images/homeinterface_08.jpg" ALT="" WIDTH=129 HEIGHT=44 border="0"></a></TD>
		<TD>
			<a href="#"><IMG SRC="images/homeinterface_09.jpg" ALT="" WIDTH=137 HEIGHT=44 border="0"></a></TD>
		<TD>
			<a href="#"><IMG SRC="images/homeinterface_10.jpg" ALT="" WIDTH=156 HEIGHT=44 border="0"></a></TD>
		<TD COLSPAN=2>
			<a href="scorecards.php"><IMG SRC="images/homeinterface_11.jpg" ALT="" WIDTH=232 HEIGHT=44 border="0"></a></TD>
		<TD>
			<a href="update-user.php?s=update"><IMG SRC="images/homeinterface_12.jpg" ALT="" WIDTH=126 HEIGHT=44 border="0"></a></TD>
		<TD ROWSPAN=2>
			<IMG SRC="images/homeinterface_13.jpg" WIDTH=57 HEIGHT=453 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=8>
			<IMG SRC="images/homeinterface_14.jpg" WIDTH=882 HEIGHT=409 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=61 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=102 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=75 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=54 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=137 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=156 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=165 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=67 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=126 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=57 HEIGHT=1 ALT=""></TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->
</BODY>
</HTML>