<?php

session_start(); 

$animal1 = $_SESSION['animals-1-ans'];
$animal2 = $_SESSION['animals-2-ans'];
$animal3 = $_SESSION['animals-3-ans'];
$sum1 = $animal1 + $animal2 + $animal3;

$eyes = $_SESSION['eyes-1-ans'];
$ears = $_SESSION['ears-1-ans'];
$nose = $_SESSION['nose-1-ans'];
$tongue = $_SESSION['tongue-1-ans'];
$hands = $_SESSION['hands-1-ans'];
$sum2 = $eyes + $nose + $ears + $tongue + $hands;

$color1 = $_SESSION['color-1-ans'];
$color2 = $_SESSION['color-2-ans'];
$sum3 = $color1 + $color2;

$a =  $_SESSION['letter-a-ans'];
$b =  $_SESSION['letter-b-ans'];
$c =  $_SESSION['letter-c-ans'];
$d =  $_SESSION['letter-d-ans'];
$e =  $_SESSION['letter-e-ans'];
$f =  $_SESSION['letter-f-ans'];
$g =  $_SESSION['letter-g-ans'];
$h =  $_SESSION['letter-h-ans'];
$i =  $_SESSION['letter-i-ans'];
$j =  $_SESSION['letter-j-ans'];
$k =  $_SESSION['letter-k-ans'];
$l =  $_SESSION['letter-l-ans'];
$m =  $_SESSION['letter-m-ans'];
$n =  $_SESSION['letter-n-ans'];
$o =  $_SESSION['letter-o-ans'];
$p =  $_SESSION['letter-p-ans'];
$q =  $_SESSION['letter-q-ans'];
$r =  $_SESSION['letter-r-ans'];
$s =  $_SESSION['letter-s-ans'];
$t =  $_SESSION['letter-t-ans'];
$u =  $_SESSION['letter-u-ans'];
$v =  $_SESSION['letter-v-ans'];
$w =  $_SESSION['letter-w-ans'];
$x =  $_SESSION['letter-x-ans'];
$y =  $_SESSION['letter-y-ans'];
$z =  $_SESSION['letter-z-ans'];
$sum4 = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t + $u + $v + $w + $x + $y + $z;

$one = $_SESSION['number-one-ans'];
$two = $_SESSION['number-two-ans'];
$three = $_SESSION['number-three-ans'];
$four = $_SESSION['number-four-ans'];
$five = $_SESSION['number-five-ans'];
$sum5 = $one + $two +$three +$four +$five;


$test = $_SESSION['plant-test-1-ans'];
$size = $_SESSION['plant-size-1-ans'];
$flowers = $_SESSION['flowers-1-ans'];
$fruits = $_SESSION['fruits-1-ans'];
$vegetables = $_SESSION['vegetables-1-ans'];
$sum6 = $test + $size + $flowers + $fruits + $vegetables;

$position1 = $_SESSION['position-1-ans'];
$position4 = $_SESSION['position-4-ans'];
$position2 = $_SESSION['position-2-ans'];
$position3 = $_SESSION['position-3-ans'];
$sum7 = $position1 + $position2 + $position3 + $position4;

$shape1 = $_SESSION['shape-1-ans'];
$shape2 = $_SESSION['shape-2-ans'];
$sum8 = $shape1 + $shape2;

$size1 = $_SESSION['size-1-ans'];
$size2 = $_SESSION['size-2-ans'];
$sum9 = $size1 + $size2;

$water = $_SESSION['kindsofwater-ans'];
$light = $_SESSION['kindsoflight-ans'];
$weather = $_SESSION['kindsofweather-ans'];
$sum10 = $water + $light + $weather;

$studid = $_SESSION['studentid'];

$dbhost = 'sql304.hostwe.com';
			$dbuser = 'hostw_14484171';
			$dbpass = '123jakes';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) {
			  die('Could not connect: ' . mysql_error());
			}
			$sql = "SELECT * FROM results where studentid=$studid ORDER BY resultid DESC";

			mysql_select_db('hostw_14484171_learningsystem');
			$retval = mysql_query( $sql, $conn );
			if(! $retval ){
			  die('Could not get data: ' . mysql_error());
			}
			
		echo '<p style=" background-color: rgb(128, 72, 0); color: white; padding: 10px; "><a href="save-results.php" style="color: white; ">Back To Previous Page</a></p>';
	echo '<form id="vrmainfrm" action="saveresults-2.php" name="vrmainfrm" method="POST"><div align="center"><table style="font-family: arial; font-size: 15px;" border=1>';		
		echo '<tr style="background-color: rgb(21, 136, 48); color: white;"><td style="width: 180px; text-align: center;">Date</td><td style="padding: 10px; text-align: center;">Score For Colors</td><td style="text-align: center;">Score For Shapes</td><td style="text-align: center;">Score For Sizes</td><td style="text-align: center;">Score For Positions</td><td style="text-align: center;">Score For Numbers</td><td style="text-align: center;">Score For Alphabets</td ><td style="text-align: center;">Score For Body parts</td><td style="text-align: center;">Score For Plants</td><td style="text-align: center;">Score For Animals</td><td style="text-align: center;">Score For Objects</td><tr>';
		
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
				echo '<tr>';
				echo '<td style="text-align: center;">'.$row['date'].'</td>';
				echo '<td style="text-align: center;">'.$row['color'].'</td>';
				echo '<td style="text-align: center;">'.$row['shape'].'</td>';
				echo '<td style="text-align: center;">'.$row['size'].'</td>';
				echo '<td style="text-align: center;">'.$row['position'].'</td>';
				echo '<td style="text-align: center;">'.$row['number'].'</td>';
				echo '<td style="text-align: center;">'.$row['alphabet'].'</td>';
				echo '<td style="text-align: center;">'.$row['bodypart'].'</td>';
				echo '<td style="text-align: center;">'.$row['plant'].'</td>';
				echo '<td style="text-align: center;">'.$row['animal'].'</td>';
				echo '<td style="text-align: center;">'.$row['object'].'</td>';
				echo '</tr>';
			} 	
	echo '</table>';
	echo '</div></form>';
	
	mysql_close($conn);
	
?>