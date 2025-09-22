<?php
$id = $_GET['id'];
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
	
	<script src="js/jquery-1.10.2.js"></script>
	
	<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
	
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Send Feedback</h1>
<?php
include("conn.php");
$sql = mysqli_query($conn, "select * from tips where id = '$id'");
$getrow = mysqli_fetch_array($sql);
$tipid = $getrow['tipid'];
?>
<?php
if(isset($_POST['save'])){
	$tipid = $_POST['tipid'];
	$feedback = $_POST['feedback'];
include("conn.php");
mysqli_query($conn, "UPDATE tips SET feedback='$feedback' WHERE tipid='$tipid'");
echo '<script type="text/javascript">window.location="tips.php?act=1"; </script>';
}
?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
                    <div class="col-sm-8 col-sm-offset-2">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                         Send Feedback
                        </div>
						<form action="sendfeedback.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						<div class="form-group">
								<label class="col-sm-4 control-label" for="Old">Tips ID</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" value="<?php echo $tipid; ?>" id="oldpassword" name="tipid" readonly/>
								</div>
							</div>						
							<div class="form-group">
								<label class="col-sm-4 control-label" for="Password">Feedback</label>
								<div class="col-sm-5">
									 <!-- <input class="form-control" name="newpassword" id="newpassword" type="password"> -->
									 <textarea class="form-control" cols="4" name="feedback">
									 </textarea>
								</div>
							</div>		
						<div class="form-group">
								<div class="col-sm-9 col-sm-offset-4">
									<button type="submit" name="save" class="btn btn-primary">Send Feedback </button>
								</div>
							</div> 
                         </div>
							</form>
							
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
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    
		<script type="text/javascript">
		

		$( document ).ready( function () {			
			
			$( "#signupForm1" ).validate( {
				rules: {
					oldpassword: "required",
				
					newpassword: {
						required: true,
						minlength: 6
					},
					
					confirmpassword: {
						required: true,
						minlength: 6,
						equalTo: "#newpassword"
					}
				},
				messages: {
					oldpassword: "Please enter your old password",
					
					newpassword: {
						required: "Please provide a password",
						minlength: "Your password must be at least 6 characters long"
					},
					confirmpassword: {
						required: "Please provide a password",
						minlength: "Your password must be at least 6 characters long",
						equalTo: "Please enter the same password as above"
					}
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-5" ).addClass( "has-feedback" );

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
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );
		} );
	</script>


</body>
</html>
