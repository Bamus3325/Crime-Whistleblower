<?php

session_start();//session starts here
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Client Login</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
<style type="text/css">
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.good {
	padding: 7px 10px;
	background: green;
	border: #ffd5da 3px solid;
	color: #fff1f2;
	border-radius: 5px;
}
</style>    
</head>

<body id="archive">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<?php
include("header.php");
?>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
						<h2><b>Time Schedule Table</b></h2>
						<div id="contact_form">
					<center>
					<img src="images/time.jpg" width="700px" height="150px" alt="time schedule">
					</center>
					</div>
					</div>
				</div>
			</div>
	</section>
<!--////////////////////////////////////Footer-->
<footer>
		<?php
include("footer.php");
?>
</footer>


</div>
</body></html>