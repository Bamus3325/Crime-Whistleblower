<?php

session_start();//session starts here
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Whisleblower</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADMIN DASHBOARD</h1>
                        <h1 class="page-subhead-line">Welcome to <strong>Whisleblower</strong>. "To manage the Nation's finances in an open, transparent, accountable and efficient manner that delivers on the country's development priorities." </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				<div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="dashboard.php">
                                <i class="fa fa-inr fa-5x"></i>
                                <h5>Dashboard</h5>
                            </a>
                        </div>
                    </div>
				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="bookingl.php">
                                <i class="fa fa-table fa-5x"></i>
                                <h5>Tips List</h5>
                            </a>
                        </div>
                    </div>
				
         
					
					 <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="setting.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Settings</h5>
                            </a>
                        </div>
                    </div>
                    </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
       <?php include('footer.php'); ?>
    </div>
   
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    


</body>
</html>
