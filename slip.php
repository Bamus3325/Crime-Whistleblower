<?php

session_start();//session starts here
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slip Print</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" href="images/log.png" type="images/log">
<script type="text/javascript">
function printme(){
window.print();
}
</script>
<style type="text/css">
.btn-login{
height: 40px;
width: 140px;
cursor: pointer;
color: #fff;
border-radius: 30px;
border: none;
background-color: #2ECC71; 
border-bottom: 4px solid #27AE60;
margin-bottom: 20px;
}
</style>
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</head>
<body>
<h2>
<script language="JavaScript" type="text/javascript">
 document.write(TODAY);
</script>
<a href="dashboard.php"><---Back</a>
</h2>
<?php
$appid = $_SESSION['appid'];

include("conn.php");
$row = mysqli_query($conn, "SELECT * FROM reg where appid='$appid'");
$getrow = mysqli_fetch_array($row);
$appid=$getrow['appid'];
$fname=$getrow['fname'];
$surname=strtoupper($getrow['surname']);
$other=$getrow['oname'];
$gender=$getrow['gender'];
$dob=$getrow['dob'];
$nationality=$getrow['nation'];
$nok=$getrow['nphone'];
$address=$getrow['address'];
$city=$getrow['city'];
$state=$getrow['state'];
$mobile=$getrow['number'];
$des=$getrow['des'];
$times=$getrow['times'];
$image=$getrow['image'];
	echo "<table border=1 cellpadding=10>";
	echo "<tr><td>APPLICATION ID:</td><td>$appid</td></tr>";
	echo "<tr><td>FIRST NAME:</td><td>$fname</td></tr>";
	echo "<tr><td>SURNAME:</td><td>$surname</td></tr>";
	echo "<tr><td>OTHER NAME:</td><td>$other</td></tr>";
	echo "<tr><td>GENDER:</td><td>$gender</td></tr>";
	echo "<tr><td>DATE OF BIRTH:</td><td>$dob</td></tr>";
	echo "<tr><td>NATIONALITY:</td><td>$nationality</td></tr>";
	echo "<tr><td>NEXT OF KIN PHONE NO:</td><td>$nok</td></tr>";
	echo "<tr><td>ADDRESS:</td><td>$address</td></tr>";
	echo "<tr><td>CITY:</td><td>$city</td></tr>";
	echo "<tr><td>STATE:</td><td>$state</td></tr>";
	echo "<tr><td>MOBILE NUMBER:</td><td>$mobile</td></tr>";
	echo "<tr><td>DESTINATION:</td><td>$des</td></tr>";
	echo "<tr><td>TIME:</td><td>$times</td></tr>";
	echo "<tr><td><p>I $surname $fname $other Certify that the above information belong to me, <br>and that i have read and agreed to the
	Transport Center<br>
	Terms And Agreement</p>
	<br>
	<center>_______________________</center>
	<center>Signature</center>
	</td><td><img src=uploadimage/$image width=200 height=200 align=right align=left></td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<input type=submit name=submit value=PRINT class=btn-login onclick=printme()>";
?>
</body>
</html>
