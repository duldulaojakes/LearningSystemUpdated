<?php

session_start();
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

$sum = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t + $u + $v + $w + $x + $y + $z;

echo '<div align="center"><table border=1>'.
		'<tr style="background-color: rgb(21, 136, 48); color: white;"><td>Examination Test results for "Letters Test"</td><td>Score Cards(1 is correct then 0 is wrong).</td></tr>'.
		'<tr><td>Letter A Exercise:</td><td>'.($_SESSION['letter-a-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-a-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter B Exercise:</td><td>'.($_SESSION['letter-b-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-b-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter C Exercise:</td><td>'.($_SESSION['letter-c-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-c-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter D Exercise:</td><td>'.($_SESSION['letter-d-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-d-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter E Exercise:</td><td>'.($_SESSION['letter-e-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-e-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter F Exercise:</td><td>'.($_SESSION['letter-f-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-f-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter G Exercise:</td><td>'.($_SESSION['letter-g-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-g-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter H Exercise:</td><td>'.($_SESSION['letter-h-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-h-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter I Exercise:</td><td>'.($_SESSION['letter-i-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-i-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter J Exercise:</td><td>'.($_SESSION['letter-j-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-j-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter K Exercise:</td><td>'.($_SESSION['letter-k-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-k-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter L Exercise:</td><td>'.($_SESSION['letter-l-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-l-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter M Exercise:</td><td>'.($_SESSION['letter-m-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-m-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter N Exercise:</td><td>'.($_SESSION['letter-n-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-n-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter O Exercise:</td><td>'.($_SESSION['letter-o-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-o-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter P Exercise:</td><td>'.($_SESSION['letter-p-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-p-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter Q Exercise:</td><td>'.($_SESSION['letter-q-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-q-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter R Exercise:</td><td>'.($_SESSION['letter-r-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-r-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter S Exercise:</td><td>'.($_SESSION['letter-s-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-s-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter T Exercise:</td><td>'.($_SESSION['letter-t-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-t-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter U Exercise:</td><td>'.($_SESSION['letter-u-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-u-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter V Exercise:</td><td>'.($_SESSION['letter-v-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-v-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter W Exercise:</td><td>'.($_SESSION['letter-w-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-w-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter X Exercise:</td><td>'.($_SESSION['letter-x-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-x-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter Y Exercise:</td><td>'.($_SESSION['letter-y-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-y-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Letter Z Exercise:</td><td>'.($_SESSION['letter-z-ans'] == '1' ? "<img src='images/green_check.png' alt=''>" : "") .($_SESSION['letter-z-ans'] == '0' ? "<img src='images/x-small.png' alt=''>" : "").'</td></tr>'.
		'<tr><td>Final Score: </td><td>'.$sum.'</td></td>'.
	'</table></div>';
?>