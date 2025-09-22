
<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Submit Your Tips</title>
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
	background: green;
	border: #ffd5da 1px solid;
	color: #000000;
	border-radius: 4px;
}
#select {
	display:block;
	width:90%;
	border-radius:4px;
	-webkit-border-radius:4px;
	-moz-border-radius:4px; 
	color:#000;	
	border:1px solid #5f5f5f;
	padding:10px;margin: 5px 0 25px 0;
}
</style>
</head>

<body id="archive">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header>
<?php
include("header.php");
?>
</header>


<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="zerogrid">
			<div id="main-content" class="col-2-3">
				<div class="wrap-content">
					<div class="contact">
<!--////////////////////////////////////MySql Query-->
<?php
if (isset($_POST['submit'])){
	$rand = rand(100000,999999);
	$country = "TIP";
	$tipid = $country.$rand;

$orgcom=$_POST['orgcom'];
$orgname=$_POST['orgname'];
$tot=$_POST['tot'];
$addorg=$_POST['addorg'];
$dct=$_POST['dct'];
$dot=$_POST['dot'];
$aco=$_POST['aco'];
$amount=$_POST['amount'];
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$number=$_POST['number'];
$email=$_POST['email'];
$company=$_POST['company'];
$address=$_POST['address'];

$imagenam=$_FILES['document']['name'];
$ran = rand(100000,999999);
	$img = "TIP";
	$imagename = $country.$ran.$imagenam;

$imagesync=$_FILES['document']['tmp_name'];
$imagetype=$_FILES['document']['type'];
$targetdir="upload/";
if (($imagetype=="document/jpeg") OR ($imagetype="document/png") OR ($imagetype="document/jpg")){
if (move_uploaded_file($imagesync,$targetdir.$imagename)){
	include("conn.php");
mysqli_query($conn, "INSERT INTO tips (tipid,orgcom,orgname,tot,addorg,dct,dot,aco,amount,document,sname,fname,tnumber,email,company,address) 
VALUES('$tipid','$orgcom','$orgname','$tot','$addorg','$dct','$dot','$aco','$amount','$imagename','$sname','$fname','$number','$email','$company','$address')");
echo "<div class=error-message>Tips Add successfully...</div>";
}
}
}
?>
<!--////////////////////////////////////End of MySql Query-->
						<h2><b>Fill Your Tips Details</b></h2>
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="addtips.php" enctype="multipart/form-data">
									<div class="widget wid-archive">
									</div>
								<label>
									<span>Type of Organisation Concerned:</span>
									<select type="select" name="orgcom" id="select" required>
							    			<option selected>---Select---</option>
											<option>Ministry</option>
											<option>Department</option>
											<option>Agency</option>
									</select>
								</label>
								<label>
									<span>Organisation Name:</span>
									<select type="select" id="select" name="orgname" required>
							    	<option selected>---Select---</option>
	<option value="AFRICAN REGIONAL CENTER FOR SPACE">AFRICAN REGIONAL CENTER FOR SPACE</option>
	<option value="BUDGET OFFICE">BUDGET OFFICE</option>
	<option value="BUREAU OF PUBLIC PROCUMENT">BUREAU OF PUBLIC PROCUMENT</option>
	<option value="CENTRE FOR SATELITE TECH">CENTRE FOR SATELITE TECH</option>
	<option value="CIPPO">CIPPO</option>
	<option value="COURT OF APPEAL">COURT OF APPEAL</option>
	<option value="CUSTOMARY COURT OF APPEAL">CUSTOMARY COURT OF APPEAL</option>
	<option value="DEBT MANAGEMENT OFFICE">DEBT MANAGEMENT OFFICE</option>
	<option value="EDUCATION TRUST FUND">EDUCATION TRUST FUND</option>
	<option value="EFCC">EFCC</option>
	<option value="ENERGY COMM. OF NIG">ENERGY COMM. OF NIG</option>
	<option value="ENVIRONMENTAL HEALTH">ENVIRONMENTAL HEALTH</option>
	<option value="F. I. R. S.">F. I. R. S.</option>
	<option value="FCDA">FCDA</option>
	<option value="FCT. HIGH COURT">FCT. HIGH COURT</option>
	<option value="FED, JUDICIAL SERV. COMMISSION">FED, JUDICIAL SERV. COMMISSION</option>
	<option value="FED, OFFICE OF STATISTICS">FED, OFFICE OF STATISTICS</option>
	<option value="FED. STAFF HOSPITAL">FED. STAFF HOSPITAL</option>
	<option value="FED. STAFF HOUSING LOANS BOARD">FED. STAFF HOUSING LOANS BOARD</option>
	<option value="FEDERAL COOP COLLEGE KADUNA">FEDERAL COOP COLLEGE KADUNA</option>
	<option value="FEDERAL FIRE SERVICE">FEDERAL FIRE SERVICE</option>
	<option value="FEDERAL HIGH COURT ABUJA">FEDERAL HIGH COURT ABUJA</option>
	<option value="FISCAL RESPONSIBILITY COMMISSION">FISCAL RESPONSIBILITY COMMISSION</option>
	<option value="FRSC">FRSC</option>
	<option value="GEOLOGICAL SURVEY OF NIG.">GEOLOGICAL SURVEY OF NIG.</option>
	<option value="INDUSTRIAL ARBRITATION PANEL">INDUSTRIAL ARBRITATION PANEL</option>
	<option value="INST. FOR PEACE &amp; CONFLICT RES.">INST. FOR PEACE &amp; CONFLICT RES.</option>
	<option value="JAMB">JAMB</option>
	<option value="LEGAL AIDS COUNCIL">LEGAL AIDS COUNCIL</option>
	<option value="MILITARY PENSION BOARD">MILITARY PENSION BOARD</option>
	<option value="MUSEUM AND MONUMENT">MUSEUM AND MONUMENT</option>
	<option value="NAPTIP">NAPTIP</option>
	<option value="NASENI">NASENI</option>
	<option value="NAT AGENCY FOR SCIENCE AUTO ENG. IFORM.">NAT AGENCY FOR SCIENCE AUTO ENG. IFORM.</option>
	<option value="NAT INST OF CULTURAL ORIENTATION">NAT INST OF CULTURAL ORIENTATION</option>
	<option value="NAT LIBRARY OF NIGERIA">NAT LIBRARY OF NIGERIA</option>
	<option value="NAT LOTTERY REGULATORY COMMISSION">NAT LOTTERY REGULATORY COMMISSION</option>
	<option value="NAT. BOARD FOR TECH INC (NBTI)">NAT. BOARD FOR TECH INC (NBTI)</option>
	<option value="NAT. CENTRE FOR AGRIC MECHANISATION">NAT. CENTRE FOR AGRIC MECHANISATION</option>
	<option value="NAT. CENTRE FOR MASS LITERACY EDU">NAT. CENTRE FOR MASS LITERACY EDU</option>
	<option value="NAT. CENTRE FOR WOMEN DEVELOP">NAT. CENTRE FOR WOMEN DEVELOP</option>
	<option value="NAT. COMM FOR COLLEGES OF EDUC.">NAT. COMM FOR COLLEGES OF EDUC.</option>
	<option value="NAT. COUNCIL FOR ARTS &amp; CULT.">NAT. COUNCIL FOR ARTS &amp; CULT.</option>
	<option value="NAT. EAR CARE CENTER">NAT. EAR CARE CENTER</option>
	<option value="NAT. FILM &amp; VIDEO CENSOR BOARD">NAT. FILM &amp; VIDEO CENSOR BOARD</option>
	<option value="NAT. GALLERY OF ARTS">NAT. GALLERY OF ARTS</option>
	<option value="NAT. INST. FOR HOSPITALITY &amp; TOURISM">NAT. INST. FOR HOSPITALITY &amp; TOURISM</option>
	<option value="NAT. INST. FOR PHARM RES &amp; DEV.">NAT. INST. FOR PHARM RES &amp; DEV.</option>
	<option value="NAT. JUDICIAL COUNCIL">NAT. JUDICIAL COUNCIL</option>
	<option value="NAT. MALERIA &amp; VET CONTROL DEVELOPMENT">NAT. MALERIA &amp; VET CONTROL DEVELOPMENT</option>
	<option value="NAT. OFFICE FOR TECHN. AQUISIT.">NAT. OFFICE FOR TECHN. AQUISIT.</option>
	<option value="NAT. PRI. HEALTH CARE DEV">NAT. PRI. HEALTH CARE DEV</option>
	<option value="NAT. PRODUCTIVITY CENTRE">NAT. PRODUCTIVITY CENTRE</option>
	<option value="NAT. SPACE RES. &amp; DEV. COUNCIL">NAT. SPACE RES. &amp; DEV. COUNCIL</option>
	<option value="NATIONAL HOSPITAL">NATIONAL HOSPITAL</option>
	<option value="NATIONAL JUDICIAL INSTITUTE">NATIONAL JUDICIAL INSTITUTE</option>
	<option value="NATIONAL MATHEMATICAL CENTRE">NATIONAL MATHEMATICAL CENTRE</option>
	<option value="NATIONAL SPORT COMMISSION">NATIONAL SPORT COMMISSION</option>
	<option value="NBBRI">NBBRI</option>
	<option value="NDE">NDE</option>
	<option value="NDIC">NDIC</option>
	<option value="NEMA">NEMA</option>
	<option value="NEWS AGENCY OF NIGERIA">NEWS AGENCY OF NIGERIA</option>
	<option value="NIG. ATOMIC ENERGY COMM">NIG. ATOMIC ENERGY COMM</option>
	<option value="NIG. CIVIL AVIATION AUTHORITY">NIG. CIVIL AVIATION AUTHORITY</option>
	<option value="NIG. COMM. COMMISSION">NIG. COMM. COMMISSION</option>
	<option value="NIG. CUSTOM SERVICE">NIG. CUSTOM SERVICE</option>
	<option value="NIG. EDUCATION &amp; RES. DEV">NIG. EDUCATION &amp; RES. DEV</option>
	<option value="NIG. EXPORT PROCESS ZONE">NIG. EXPORT PROCESS ZONE</option>
	<option value="NIG. EXTRACTIVE INDUSTRIES &amp; TRAS (NEITI)">NIG. EXTRACTIVE INDUSTRIES &amp; TRAS (NEITI)</option>
	<option value="NIG. FOOTBALL ASSOCIATION">NIG. FOOTBALL ASSOCIATION</option>
	<option value="NIG. IMMIGRATION SERVICE">NIG. IMMIGRATION SERVICE</option>
	<option value="NIG. INST. OF INTERNATINAL AFFAIRS">NIG. INST. OF INTERNATINAL AFFAIRS</option>
	<option value="NIG. INST. OF LEGAL ADV. STUDIES">NIG. INST. OF LEGAL ADV. STUDIES</option>
	<option value="NIG. LAW REFORM COMMISSION">NIG. LAW REFORM COMMISSION</option>
	<option value="NIG. NATIONAL PARK SERVICE">NIG. NATIONAL PARK SERVICE</option>
	<option value="NIG. NUCLEAR REGU. AUTHORITY">NIG. NUCLEAR REGU. AUTHORITY</option>
	<option value="NIG. POSTAL SERVICES">NIG. POSTAL SERVICES</option>
	<option value="NIG. PRESS COUNCIL">NIG. PRESS COUNCIL</option>
	<option value="NIG. PRISON SERVICE">NIG. PRISON SERVICE</option>
	<option value="NIG. SHIPPERS COUNCIL">NIG. SHIPPERS COUNCIL</option>
	<option value="NIG. TOURISM DEV. CORP">NIG. TOURISM DEV. CORP</option>
	<option value="NIGERIA ARMY">NIGERIA ARMY</option>
	<option value="NIGERIA COMM. SATELITE">NIGERIA COMM. SATELITE</option>
	<option value="NYSC">NYSC</option>
	<option value="OAGF">OAGF</option>
	<option value="OFFICE OF PILG. AFFARIAS">OFFICE OF PILG. AFFARIAS</option>
	<option value="POLICE SERVICE COMMISSION">POLICE SERVICE COMMISSION</option>
	<option value="POWER HOLDING">POWER HOLDING</option>
	<option value="PRESIDENTIAL COMM ON BARRACK REFORM">PRESIDENTIAL COMM ON BARRACK REFORM</option>
	<option value="PUBLIC COMPLAIN COMMISSION">PUBLIC COMPLAIN COMMISSION</option>
	<option value="PUBLIC SERVICE INSTITUTE OF NIGERIA">PUBLIC SERVICE INSTITUTE OF NIGERIA</option>
	<option value="RAW MATERIAL RES/DEV COUNCIL">RAW MATERIAL RES/DEV COUNCIL</option>
	<option value="REVENUE MOBILISATION ALLC. &amp; FIS. COMM">REVENUE MOBILISATION ALLC. &amp; FIS. COMM</option>
	<option value="S. T. F">S. T. F</option>
	<option value="SECURITY &amp; EXCHANGE COMM">SECURITY &amp; EXCHANGE COMM</option>
	<option value="SHARIA COURT OF APPEAL">SHARIA COURT OF APPEAL</option>
	<option value="SHEDA SCIENCE &amp; TECHNOLOGY">SHEDA SCIENCE &amp; TECHNOLOGY</option>
	<option value="STATE HOUSE">STATE HOUSE</option>
	<option value="SUPREME COURT">SUPREME COURT</option>
	<option value="SURVEYOR GENERAL OF FED.">SURVEYOR GENERAL OF FED.</option>
	<option value="VOICE OF NIGERIA">VOICE OF NIGERIA</option>
</select>
								</label>
								<label>
									<span>Type of Tips:</span>
									<select type="select" id="select" name="tot" required>
							<option>Diversion of revenues</option>
	                        <option>Violation of TSA guidelines (e.g. multiple revenue accounts)</option>
	                        <option>Underreporting of revenues</option>
	                        <option>Non-remittance or late remittance of revenues</option>
	                        <option>Manipulation of revenue collection receipts</option>
	                        <option>Conversion of funds to personal use</option>
	                        <option>Mismanagement of revenues</option>
	                        <option>Others</option>
	                    </select>
								</label>
								<label><p></p></br>
									<span>Branch/Address of the Organisation:</span>
									<input placeholder="Address" type="text" name="addorg" required>
								</label>
								<label><p></p></br>
									<span>Date of Concerned Transaction:</span>
									<input type="date" name="dct" required>
								</label>
								<label><p></p></br> 
									<span>Description of Tip:</span>
									<input placeholder="Description of Tip" type="text"  name="dot" required>
								</label>
								<label>
									<span>Is the Alleged Conduct Ongoing:</span>
									<select type="select" id="select" name="aco" required>
							<option>---Select---</option>
	                        <option>Yes</option>
	                        <option>No</option>
	                        <option>Unknown</option>
	                    </select>
								</label>
								<label><p></p></br> 
									<span>Amount(₦) Concerned:</span>
									<input placeholder="Amount(₦) Concerned" type="text"  name="amount" required>
								</label>
								<label>
									<span>Supporting Documents:</span>
									<input placeholder="Supporting Documents" type="file" name="document" required>
								</label>
								<h2><b>Reporter Details</b></h2>
								<div class="widget wid-archive">
									</div>
								<label><p></p></br> 
									<span>Surname:</span>
									<input placeholder="Surname" type="text" name="sname" required>
								</label>
								<label>
									<span>First Name:</span>
									<input placeholder="First Name" type="text" name="fname" required>
								</label>
								<label>
									<span>Mobile Number:</span>
									<input placeholder="Mobile Number" type="text" name="number" required>
								</label>
								<label><p></p></br> 
									<span>Email:</span>
									<input placeholder="Email" type="email" name="email" required>
								</label>
								<label>
									<span>Company: if No  E.G NILL</span>
									<input placeholder="Company" type="text" name="company" required>
								</label>
								<label>
									<span>Address:</span>
									<input placeholder="Address" type="text" name="address" required>
								</label>								
									<table>
								<tr>
									<td><input class="sendButton" type="submit" name="submit" value="Submit"></td>
									<td><input class="sendButton" type="submit" name="Reset" value="Reset"></td>
								</tr>
							</table>
							</form>
						</div>
					</div>
				</div>
			</div>
	</section>
<footer>
<?php
include("footer.php");
?>
</footer>
</div>
</body>
</html>
