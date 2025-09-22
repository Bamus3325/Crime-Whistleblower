<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
}
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
<body >
    <div class="container">
        
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                          
                            <div class="panel-body" style="background-color: #E2E2E2; margin-top:50px; border:solid 3px #0e0e0e;">
							  <h3 class="myhead">Admin Login System</h3>
							  <!--------------------------- php code ---------------------------------->
<?php
if(isset($_POST['login']))
	{
				$appid= $_POST['username'];
				$sname= $_POST['password'];
				include("conn.php");
				$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$appid' AND password='$sname'");
				$que2 = mysqli_fetch_array($query);
			if (mysqli_num_rows($query) > 0)
				{
                echo "<script>window.location='dashboard.php';</script>";
				//header("location:dashboard.php");
				$_SESSION['username'] = $username;
				}
			else
				{
					echo "<div class=error-message><center>Username or Password is incorect</center></div>";
				}
	}
?>
<!--------------------------- end of php code ---------------------------------->
                                <form role="form" action="index.php" method="post">
                                    <hr />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="username" required />
                                        </div>
                                        
									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" required />
                                        </div>
										
                                    <div class="form-group">
                                     </div>
                                     
                                     <button class="btn btn-primary" type= "submit" name="login">Login Now</button>
                                    
                                   
                                    </form> 
                                    <a href="../index.php"><button class="btn btn-danger" type= "submit">Main Page</button></a>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
