<?php
//mysql_select_db('db_whisle',  mysql_connect('localhost','root',''))or die(mysql_error());
?>

<?php 
$conn = mysqli_connect("localhost","root","","db_whisle");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>