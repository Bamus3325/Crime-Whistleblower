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
	
	<link href="css/ui.css" rel="stylesheet" />
	<link href="css/datepicker.css" rel="stylesheet" />	
	
    <script src="js/jquery-1.10.2.js"></script>
	
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   
	
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tips Record 
						</h1>
                    </div>
                </div>		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-10 col-sm-offset-1">
               
                            </div>
            
			
                </div>
		 <link href="css/datatable/datatable.css" rel="stylesheet" />		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Tips
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tips ID</th>
                                            <th>Name</th>
                                            <th>Type of Tip</th> 
											<th>Date of Concerned Transaction</th>			
                                            <th>Description of Tip</th>
                                            <th>Amount</th>
                                            <th>Company</th>
                                            <th>Feedback</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
									<?php
									$serial=0;
include("conn.php");
$row = mysqli_query($conn, "SELECT * FROM tips");
while($getrow = mysqli_fetch_array($row)){;
$serial=$serial + 1;
$id=$getrow['id'];
$appid=$getrow['tipid'];
$sname=strtoupper($getrow['sname']);
$fname=$getrow['fname'];
$tot=$getrow['tot'];
$dct=$getrow['dct'];
$dot=$getrow['dot'];
$amount=$getrow['amount'];
$company=$getrow['company'];
$mobile=$getrow['feedback'];

										echo '<tr class="danger">
										<td>'.$serial.'</td>
											<td>'.$appid.'</td>
                                            <td>'.$sname.'&nbsp;'.$fname.'</td>
											<td>'.$tot.'</td>
											<td>'.$dct.'</td>
											<td>'.$dot.'</td>
											<td>'.$amount.'</td>
											<td>'.$company.'</td>
											<td>'.$mobile.'</td>
											<td>';
											?>
											<a href=sendfeedback.php?id=<?php echo $id ?> class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit">Send Feedback</span></a>
											</td>
                                        </tr>';
                                        <?php
		}
			?>
			<?php
			if(isset($_REQUEST['act']) &&  @$_REQUEST['act']=='1')
{
echo '<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Feedback Send Successful.
</div>';
}?>
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                     
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
    
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
		
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
       <?php include('footer.php'); ?>
    </div>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
</body>
</html>