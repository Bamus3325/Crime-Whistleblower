<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Show ID</title>
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
include("cheader.php");
?>
</header>
<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
<?php
if (isset($_POST['submit']))
{
$appid=$_POST['appid'];
include("conn.php");
$row = mysqli_query($conn, "SELECT * FROM reg WHERE number='$appid'");
$getrow = mysqli_fetch_array($row);
if (mysqli_num_rows($row) > 0){
$surname=$getrow['surname'];
$fname=$getrow['fname'];
$other=$getrow['oname'];
$appidd=$getrow['appid'];
	echo "<div class=good>";
	echo "Dear";
	echo "&nbsp";
	echo "$surname";
	echo "&nbsp";
	echo "$fname";
	echo "&nbsp";
	echo "$other";
	echo "&nbsp";
	echo "your Application ID is $appidd.";
	echo "<br>";
	echo "Thanks for Patronage.";
	echo "</div>";
	}
			else
				{
	echo "<div class=error-message>Sorry, No result found for this Phone Number...</div>";
				

				}
}
?>
						<h2><b>Check Your Application ID</b></h2>
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="cid.php">
								<label>
									<span>Your Phone Number:</span>
									<input type="text" name="appid" required>
								</label>
								<left><input class="sendButton" type="submit" name="submit" value="Submit"></left>
							</form>
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