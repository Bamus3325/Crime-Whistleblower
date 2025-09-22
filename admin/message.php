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
                        <h1 class="page-head-line">Message Record 
						</h1>
                    </div>
                </div>		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-10 col-sm-offset-1">
               
                            </div>
            
			
                </div>
               

			   
			   
		<script type="text/javascript">
		

		$( document ).ready( function () {			
			
		$( "#joindate" ).datepicker({
dateFormat:"yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: "1970:<?php echo date('Y');?>"
});	
		

		
		if($("#signupForm1").length > 0)
         {
		 
		 
		 
			$( "#signupForm1" ).validate( {
				rules: {
					sname: "required",
					joindate: "required",
					emailid: "email",
					branch: "required",
					
					
					contact: {
						required: true,
						digits: true
					},
					
					fees: {
						required: true,
						digits: true
					},
					
					
					advancefees: {
						required: true,
						digits: true
					},
				
					
				},
			
			
			$( "#signupForm1" ).validate( {
				rules: {
					sname: "required",
					joindate: "required",
					emailid: "email",
					branch: "required",
					
					
					contact: {
						required: true,
						digits: true
					}
					
				},
			
			
			
				
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-10" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );
			
			}
			
		} );
		
		
		
		$("#fees").keyup( function(){
		$("#advancefees").val("");
		$("#balance").val(0);
		var fee = $.trim($(this).val());
		if( fee!='' && !isNaN(fee))
		{
		$("#advancefees").removeAttr("readonly");
		$("#balance").val(fee);
		$('#advancefees').rules("add", {
            max: parseInt(fee)
        });
		
		}
		else{
		$("#advancefees").attr("readonly","readonly");
		}
		
		});
		
		
		
		
		$("#advancefees").keyup( function(){
		
		var advancefees = parseInt($.trim($(this).val()));
		var totalfee = parseInt($("#fees").val());
		if( advancefees!='' && !isNaN(advancefees) && advancefees<=totalfee)
		{
		var balance = totalfee-advancefees;
		$("#balance").val(balance);
		
		}
		else{
		$("#balance").val(totalfee);
		}
		
		});
		
		
	</script>


			   
		
		
		 <link href="css/datatable/datatable.css" rel="stylesheet" />		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Student  
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th> 
											<th>Message</th> 											
                                        </tr>
                                    </thead>
                                     <tbody>
									<?php
									$serial=0;
include("conn.php");
$row = mysqli_query($conn, "SELECT * FROM contact");
while($getrow = mysqli_fetch_array($row)){;
$serial=$serial + 1;
$name=strtoupper($getrow['name']);
$email=$getrow['email'];
$message=$getrow['message'];
										echo ' <tr class="danger">
										<td>'.$serial.'</td>
                                            <td>'.$name.'</td>
											<td>'.$email.'</td>
											<td>'.$message.'</td>
                                        </tr>';
		}

			?>
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