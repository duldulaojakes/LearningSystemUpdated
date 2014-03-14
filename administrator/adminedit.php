<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple Table</title>

<link rel="stylesheet" href="../jsjqueryDatepicker/public/css/default.css" type="text/css" />
        <link type="text/css" rel="stylesheet" href="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/css/shCoreDefault.css" />
        <script type="text/javascript" src="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
        <script type="text/javascript" src="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
        <script type="text/javascript" src="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
        <script type="text/javascript" src="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
        <script type="text/javascript" src="../jsjqueryDatepicker/configurations/libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>
		
		<script src="../adminjs/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
        </script>
		
<link rel="stylesheet" href="../admincss/validationEngine.jquery.css" type="text/css"/>
	<script src="../adminjs/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="../adminjs/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
	    jQuery(document).ready(function () {
	        // binds form submission and fields to the validation engine
	        jQuery("#vrmainfrm").validationEngine();
	    });

	</script>

<script type="text/javascript" src="../jsjqueryDatepicker/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="../jsjqueryDatepicker/configurations/public/javascript/core.js"></script>

<script type="text/javascript">
 $(function() {
		/* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
		/* For cell text alignment */
		$("table td:first-child, table th:first-child").addClass("first");
		/* For removing the last border */
		$("table td:last-child, table th:last-child").addClass("last");
});
</script>

<style type="text/css">

	html, body, div, span, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	abbr, address, cite, code,
	del, dfn, em, img, ins, kbd, q, samp,
	small, strong, sub, sup, var,
	b, i,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td {
		margin:0;
		padding:0;
		border:0;
		outline:0;
		font-size:100%;
		vertical-align:baseline;
		background:transparent;
	}
	
	body {
		margin:0;
		padding:0;
		font:12px/15px "Helvetica Neue",Arial, Helvetica, sans-serif;
		color: #555;
		background:#f5f5f5 url(bg.jpg);
		
	}
	
	a {color:#666;}
	
	#content {auto 0;}
	
	/*
	Pretty Table Styling
	CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
	*/
	
	table {
		overflow:hidden;
		border:1px solid #d3d3d3;
		background:#fefefe;
		width:90%;
		margin:5% auto 0;
		-moz-border-radius:5px; /* FF1+ */
		-webkit-border-radius:5px; /* Saf3-4 */
		border-radius:5px;
		-moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
	}
	
	th, td {padding:18px 28px 18px; text-align:center; }
	
	th {padding-top:22px; text-shadow: 1px 1px 1px #fff; background:#e8eaeb;}
	
	td {border-top:1px solid #e0e0e0; border-right:1px solid #e0e0e0;}
	
	tr.odd-row td {background:#f6f6f6;}
	
	td.first, th.first {text-align:left}
	
	td.last {border-right:none;}
	
	/*
	Background gradients are completely unnecessary but a neat effect.
	*/
	
	td {
		background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
	}
	
	tr.odd-row td {
		background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
		background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
	}
	
	th {
		background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
		background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
	}
	
	/*
	I know this is annoying, but we need additional styling so webkit will recognize rounded corners on background elements.
	Nice write up of this issue: http://www.onenaught.com/posts/266/css-inner-elements-breaking-border-radius
	
	And, since we've applied the background colors to td/th element because of IE, Gecko browsers also need it.
	*/
	
	tr:first-child th.first {
		-moz-border-radius-topleft:5px;
		-webkit-border-top-left-radius:5px; /* Saf3-4 */
	}
	
	tr:first-child th.last {
		-moz-border-radius-topright:5px;
		-webkit-border-top-right-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.first {
		-moz-border-radius-bottomleft:5px;
		-webkit-border-bottom-left-radius:5px; /* Saf3-4 */
	}
	
	tr:last-child td.last {
		-moz-border-radius-bottomright:5px;
		-webkit-border-bottom-right-radius:5px; /* Saf3-4 */
	}

</style>

</head>
<body>
<form id="vrmainfrm" action="update-user-data-admin.php" name="vrmainfrm" method="POST">
<div align="center" id="content">
    <?php 
		$status = $_GET['status'];
		if($status=='usernameexists'){
			echo '<p style="background-color: rgb(199, 24, 0); color: white;font-size: 15px;padding: 10px; font-weight: bold;">Username Already Exist. Try onother username.</p>';
		}else if($status=='studentnumexists'){
			echo '<p style="background-color: rgb(199, 24, 0); color: white;font-size: 15px;padding: 10px; font-weight: bold;">Student Number Already Exist. Try onother number.</p>';
		}else if($status=='updated'){
			echo '<p style="background-color: rgb(64, 112, 74); color: white;font-size: 15px;padding: 10px; font-weight: bold;">Successfully updated!</p>';
		}else{
			echo '<p></p>';
		}
	?>
    <table cellspacing="0" style="width: 50%;">
    <tr><th><span><a href="index.php">[Back to Admin Page]</a></span></th><th>Value/Data</th></tr>
	<?php 
			$dbhost = 'sql304.hostwe.com';
			$dbuser = 'hostw_14484171';
			$dbpass = '123jakes';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) {
			  die('Could not connect: ' . mysql_error());
			}
			$id = $_GET['id'];
			$sql = "SELECT * FROM students WHERE studentid = '$id' ";

			mysql_select_db('hostw_14484171_learningsystem');
			$retval = mysql_query( $sql, $conn );
			if(! $retval ){
			  die('Could not get data: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
				echo '<input value="'.$row['studentid'].'" type="hidden" id="studentid" name="studentid">';
				echo '<input value="'.$row['studentnumber'].'" type="hidden" id="studentnumber1" name="studentnumber1">';
				echo '<input value="'.$row['username'].'" type="hidden" id="username1" name="username1">';
				echo '<tr><td>Last Name</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['lastname'].'" type="text" id="lastname" name="lastname"></td></tr>';
				echo '<tr><td>First Name</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['firstname'].'" type="text" id="firstname" name="firstname"></td></tr>';
				echo '<tr><td>Middle Name</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['middlename'].'" type="text" id="middlename" name="middlename"></td></tr>';
				echo '<tr><td>Address</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['address'].'" type="text" id="address" name="address"></td></tr>';
				echo '<tr><td>Age</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['age'].'" type="text" id="age" name="age"></td></tr>';
				echo '<tr><td>Birthday</td><td><input class="validate[required] datepickervalue" style="width: 350px; color: #555;" value="'.$row['birthday'].'" type="text" id="birthday" name="birthday"></td></tr>';
				echo '<tr><td>Student Number</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['studentnumber'].'" type="text" id="studentnumber" name="studentnumber"></td></tr>';
				echo '<tr><td>UserName</td><td><input class="validate[required]" style="width: 350px; color: #555;" value="'.$row['username'].'" type="text" id="username" name="username"></td></tr>';
				echo '<tr><td>Password</td><td><input class="validate[required]" style="width: 350px;color: #555;" value="'.$row['password'].'" type="text" id="password" name="password"></td></tr>';
				echo '<tr><td></td><td><input style="width: 350px;" type="submit" id="submit" name="submit" value="Update" name="password"></td></tr>';
			} 
			mysql_close($conn);
	?>
	
    </table>

</div>
</form>
</body>
</html>
