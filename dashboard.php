<?php

session_start();//session starts here
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Dashboard</title>
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

<body id="archive">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
	<?php
include("cheader.php");
?>
</header>

<?php include('conn.php');?>		
<?php
$profile = $_SESSION['appid'];

$row = mysqli_query($conn, "SELECT * FROM reg where appid='$profile'");
$getrow = mysqli_fetch_array($row);
if (mysqli_num_rows($row) > 0){
$sname= strtoupper($getrow['surname']);
$fname=$getrow['fname'];
$oname=$getrow['oname'];
$image=$getrow['image'];
$number=$getrow['number'];
$gender=$getrow['gender'];
$address=$getrow['address'];
$des=$getrow['des'];
$times=$getrow['times'];
}
?>
<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
						<h2><b><?php echo "Welcome &nbsp; $sname &nbsp; $fname!" ;?></b></h2>
						<div id="contact_form">	
				

<table style="width:100%">
				  <tr>
				    <th>Name:</th>
				    <td><?php echo $sname.","." ".$fname; ?>&nbsp;<?php echo $oname; ?></td>
				  </tr>
				  <tr>
				    <th>Application No.:</th>
				    <td><b><?php echo "".$_SESSION['appid']."!" ;?></b></td>
				  </tr>
				  <tr>
				    <th>Phone No.:</th>
				    <td><?php echo $number; ?></td>
				  </tr>
				  <tr>
				    <th>Gender:</th>
				    <td><?php echo $gender; ?></td>
				  </tr>
				  <tr>
				    <th>Address:</th>
				    <td><?php echo $address; ?></td>
				  </tr>
				  <tr>
				    <th>Destination:</th>
				    <td><?php echo $des; ?></td>
				  </tr>
				   <tr>
				    <th>Time:</th>
				    <td><?php echo $times; ?></td>
				  </tr>
				</table> 				
							
						</div>
					</div>
				</div>
			</div>
			<?php echo "<img src=uploadimage/$image width=200 height=200 align=right align=left>"; ?>
	</section>
<!--////////////////////////////////////Footer-->
<footer>
		<?php
include("footer.php");
?>
</footer>


</div>
</body></html>