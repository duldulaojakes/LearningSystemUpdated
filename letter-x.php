<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Simple Multi-Item Slider with CSS Animations and jQuery</title>
		<meta name="description" content="Simple Multi-Item Slider: Category slider with CSS animations" />
		<meta name="keywords" content="jquery plugin, item slider, categories, apple slider, css animation" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
	</head>
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a style="display: none;" href="alphabets.php"><strong>&laquo; Back to main page: </strong>English/Letters Category</a>
				<span class="right"><a href="letter-y.php?ans=none"><strong>Done>>>>>>>>>>></strong></a></span>
				
				<?php 
					session_start(); 
					if(($_GET['ans'] != "a")){
						$_SESSION['letter-x-ans'] = '0'; 
					}else{
						$_SESSION['letter-x-ans'] = '1'; 
					}
				?>
				
				
			</div><!--/ Codrops top bar -->
			<header class="clearfix">
				<h1>Which object name that starts with letter X?.<span>Select from the choices below:</span></h1>
			</header>
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
					
					<?php 			
								$active = 'style="color: green; font-size: 20px;"';
								
								if(($_GET['ans'] == "a")){
									echo '<li><a href="letter-x.php?ans=a"><img style="max-width: 150%;" src="images/ltr-x.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (A)</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=b"><img style="max-width: 140%;" src="images/ltr-h.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=c"><img style="max-width: 124%;" src="images/ltr-r.jpg" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=d"><img style="max-width: 100%;" src="images/ltr-p.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "b")){
									echo '<li><a href="letter-x.php?ans=a"><img style="max-width: 150%;" src="images/ltr-x.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=b"><img style="max-width: 140%;" src="images/ltr-h.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (B)</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=c"><img style="max-width: 124%;" src="images/ltr-r.jpg" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=d"><img style="max-width: 100%;" src="images/ltr-p.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "c")){
									echo '<li><a href="letter-x.php?ans=a"><img style="max-width: 150%;" src="images/ltr-x.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=b"><img style="max-width: 140%;" src="images/ltr-h.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=c"><img style="max-width: 124%;" src="images/ltr-r.jpg" alt="img02"><span '.$active.'><h4>Your Answer is: (C)</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=d"><img style="max-width: 100%;" src="images/ltr-p.jpg" alt="img01"><span><h4>D</h4></span></a></li>';

								}else if(($_GET['ans'] == "d")){
									echo '<li><a href="letter-x.php?ans=a"><img style="max-width: 150%;" src="images/ltr-x.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=b"><img style="max-width: 140%;" src="images/ltr-h.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=c"><img style="max-width: 124%;" src="images/ltr-r.jpg" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=d"><img style="max-width: 100%;" src="images/ltr-p.jpg" alt="img01"><span '.$active.'><h4>Your Answer is: (D)</h4></span></a></li>';

								}	
								else{
									echo '<li><a href="letter-x.php?ans=a"><img style="max-width: 150%;" src="images/ltr-x.jpg" alt="img01"><span><h4>A</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=b"><img style="max-width: 140%;" src="images/ltr-h.jpg" alt="img01"><span><h4>B</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=c"><img style="max-width: 124%;" src="images/ltr-r.jpg" alt="img02"><span><h4>C</h4></span></a></li>';
									echo '<li><a href="letter-x.php?ans=d"><img style="max-width: 100%;" src="images/ltr-p.jpg" alt="img01"><span><h4>D</h4></span></a></li>';
								}								
						?>
						
					</ul>
					<nav>
						<a href="#">Number 24.)</a>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.catslider.js"></script>
		<script>
			$(function() {
				$( '#mi-slider' ).catslider();
			});
		</script>
	</body>
</html>