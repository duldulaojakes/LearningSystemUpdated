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
				<a href="overandunder.php"><strong>&laquo; Back to main page: </strong>Math Category</a>
				<span class="right"><a href="overandunder.php"><strong>Done>>>>>>></strong></a></span>
				
				<?php 
					session_start(); 
					if(($_GET['ans'] != "a")){
						$_SESSION['position-2-ans'] = '0'; 
					}else{
						$_SESSION['position-2-ans'] = '1'; 
					}
				?>
				
				
			</div><!--/ Codrops top bar -->
			<header class="clearfix">
				<h1>Which of the following dog is going under the table?<span>Select from the choices below:</span></h1>
			</header>
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
					
					<?php 			
								$active = 'style="color: green; font-size: 20px;"';
								
								if(($_GET['ans'] == "a")){
									echo '<li><a href="position-2.php?ans=a"><img style="max-width: 130%;" src="images/position-under.jpg" alt="img01"><span '.$active .'><h4>Your Answer is: (A)</h4></span></a></li>';
									echo '<li></li>';
									echo '<li><a href="position-2.php?ans=b"><img style="max-width: 130%;" src="images/position-above.jpg" alt="img02"><h4>B</h4></a></li>';

								}else if(($_GET['ans'] == "b")){
									echo '<li><a href="position-2.php?ans=a"><img style="max-width: 130%;" src="images/position-under.jpg" alt="img01"><h4>A</h4></a></li>';
									echo '<li></li>';
									echo '<li><a href="position-2.php?ans=b"><img style="max-width: 130%;" src="images/position-above.jpg" alt="img02"><span '.$active .'><h4>Your Answer is: (B)</h4></span></a></li>';

								}	
								else{
									echo '<li><a href="position-2.php?ans=a"><img style="max-width: 130%;" src="images/position-under.jpg" alt="img01"><h4>A</h4></a></li>';
									echo '<li></li>';
									echo '<li><a href="position-2.php?ans=b"><img style="max-width: 130%;" src="images/position-above.jpg" alt="img02"><h4>B</h4></a></li>';
								}								
						?>
						
						
					</ul>
					<nav>
						<a href="#">Number 2.)</a>
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