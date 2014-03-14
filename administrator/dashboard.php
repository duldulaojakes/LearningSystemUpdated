<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrator</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
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

<div align="center" id="content">
 <?php 
		$status = (($_GET['status']));
		$id = ($_GET['id']);
		
		if($status=='delete'){
			echo '<p style="background-color: rgb(199, 24, 0); color: white;font-size: 15px;padding: 10px; font-weight: bold;"><span>Are you sure you want to delete this User?</span><span><a style="color: white;" href="validate-yes.php?id='.$id.'"> >>>>>YES </a> | <a style="color: white;" href="validate-no.php">>>>>>>NO</a></span></p>';
		}else{
			echo '<p></p>';
		}
	?>
	<table cellspacing="0" style="width: 92%;">
	<tr><th><a href="../homeinterface.php">Back To Main Page [Home]</a></th></tr>
	</table>
	
    <table cellspacing="0" style="margin: 0%;">
    <tr><th>ID</th><th>CodeNumber</th><th>Lastname</th><th>Firstname</th><th>Middlename</th><th>Address</th><th>Age</th><th>Username</th><th>Password</th><th>Results</th><th>Edit</th><th>Delete</th></tr>	
		<?php
			$dbhost = 'sql304.hostwe.com';
			$dbuser = 'hostw_14484171';
			$dbpass = '123jakes';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) {
			  die('Could not connect: ' . mysql_error());
			}
			$sql = 'SELECT * FROM students';

			mysql_select_db('hostw_14484171_learningsystem');
			$retval = mysql_query( $sql, $conn );
			if(! $retval ){
			  die('Could not get data: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
				echo '<tr><td>'.$row['studentid'].'</td><td style="text-align: left;">'
				.$row['studentnumber'].'</td><td style="text-align: left;">'
				.$row['lastname'].'</td><td style="text-align: left;">'
				.$row['firstname'].'</td><td style="text-align: left;">'
				.$row['middlename'].'</td><td style="text-align: left;">'
				.$row['address'].'</td><td style="text-align: left;">'
				.$row['age'].'</td><td style="text-align: left;">'
				.$row['username'].'</td><td style="text-align: left;">'.$row['password'].'</td><td><a href="view-results-2.php?studentid='.$row['studentid'].'"><img src="../images/view-icon.png"></a></td><td><a href="adminedit.php?id='.$row['studentid'].'&status=edit'.'"><img src="../images/edit.png"></a></td><td><a href="admindelete.php?id='.$row['studentid'].'"><img src="../images/delete.png"></a></td></tr>';
			} 
			mysql_close($conn);
		?>
    </table>
</div>

</body>
</html>
