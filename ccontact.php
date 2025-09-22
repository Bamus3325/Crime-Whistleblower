<?php
$text = "<span style='color:green; font-size: 35px; line-height: 40px; magin: 10px;'>Message Us Here.</span>";
?>
<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact</title>
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
</head>
<body id="single">
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
					
						<h2>Contact</h2>
						<!--Warning-->
						<center><?php echo $text;?></center>
						<?php
if (isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
include("conn.php");
mysqli_query($conn, "INSERT INTO contact (name,email,message) VALUES('$name','$email','$message')");
echo "<center><span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span></center>";
}
?>
						<!---->
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label>
								<span>Enter your name:</span>
								<input type="text"  name="name" id="name" required>
								</label>
								<label>
								<span>Enter your email:</span>
								<input type="email"  name="email" id="email" required>
								</label>
								<label>
								<span>Your message here:</span>
								<textarea name="message" id="message"></textarea>
								</label>
								<center><input class="sendButton" type="submit" name="submit" value="Submit"></center>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-sidebar">
					<!---- Start Widget ---->
					<div class="widget wid-about">
						<div class="wid-header">
							<h5>About Us</h5>
						</div>
						<div class="wid-content">
							<img src="images/5.png"/>
							<p>We transport you to any were in Nigeria.</p>
						</div>
					</div>
					<div class="widget wid-archive">
						<div class="wid-header">
							<h5>Archives</h5>
						</div>
						<div class="wid-content">
							<select>
							    <option value="audi" selected>Select Month</option>
								<option value="volvo">March 2022</option>
								<option value="saab">Febuary 2023</option>
								<option value="vw">VW</option>
							</select>
						</div>
					</div>
					<!---- Start Widget ---->
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