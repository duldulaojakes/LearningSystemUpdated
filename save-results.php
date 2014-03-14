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

echo '<form id="vrmainfrm" action="saveresults-2.php" name="vrmainfrm" method="POST"><div align="center"><table border=1>'.

		'<input type="hidden" id="color" name="color" value="'.$sum3.'">'.
		'<input type="hidden" id="shapes" name="shapes" value="'.$sum8.'">'.
		'<input type="hidden" id="sizes" name="sizes" value="'.$sum9.'">'.
		'<input type="hidden" id="positions" name="positions" value="'.$sum7.'">'.
		'<input type="hidden" id="numbers" name="numbers" value="'.$sum5.'">'.
		'<input type="hidden" id="alphabets" name="alphabets" value="'.$sum4.'">'.
		'<input type="hidden" id="bodyparts" name="bodyparts" value="'.$sum2.'">'.
		'<input type="hidden" id="plants" name="plants" value="'.$sum6.'">'.
		'<input type="hidden" id="animals" name="animals" value="'.$sum1.'">'.
		'<input type="hidden" id="objects" name="objects" value="'.$sum10.'">'.
		
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Over All Result</td><td>Score</td></tr>'.
		'<tr><td>Score for Colors: </td><td>'.$sum3.'</td></tr>'.
		'<tr><td>Score for Shapes: </td><td>'.$sum8 .'</td></tr>'.
		'<tr><td>Score for Sizes: </td><td>'.$sum9 .'</td></tr>'.
		'<tr><td>Score for Positions: </td><td>'.$sum7 .'</td></tr>'.
		'<tr><td>Score for Numbers(Numerals): </td><td>'.$sum5 .'</td></tr>'.
		'<tr><td>Score for Alphabets: </td><td>'.$sum4 .'</td></tr>'.
		'<tr><td>Score for Body Parts: </td><td>'.$sum2 .'</td></tr>'.
		'<tr><td>Score for Plants: </td><td>'.$sum6 .'</td></tr>'.
		'<tr><td>Score for Animals: </td><td>'.$sum1 .'</td></tr>'.
		'<tr><td>Score for Objects: </td><td>'.$sum10 .'</td></tr>'.
		'<tr><td></td><td><table><tr><td><input type="submit" id="submit" name="submit" value="Save/Submit Results"></td><td><input type="submit" id="submitview" name="submitview" value="View Previous Results"></td></tr></table></td></tr>'.
		
	'</table>';
	
	if(isset($_GET['status'])){
		if($_GET['status']=='1'){
			echo "<p style='background-color: green; color: white;padding: 20px;'>Successfully Saved! <a style='color: white;' href='view-results-2.php'>Click here </a> to view All Scores Saved.</p>";
		}
	}
	
	echo '</div></form>';
?>