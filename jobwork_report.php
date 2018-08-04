<!DOCTYPE html>
<?php
  include('config.php');
  include('checksession.php');
	$fy=$_SESSION['fy'];
	$company=$_SESSION['cname'];
	$cId=$_SESSION['cId'];
	$fyId=$_SESSION['fyId'];
  
?>

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Inventory Management</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<script src="assets/js/ace-extra.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	

	</head>

	<body class="no-skin">
		<?php include('navbar.php') ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php include('menubar.php') ?>


			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">

					
						<div class="page-header">
							<h1>
						Jobwork  Report
							</h1>
							
						</div><!-- /.page-header -->
						<h5 class="header blue lighter bigger" align="center">
												<b>Company:&nbsp; <?php echo $company ?>  &nbsp;
												Financial Year:&nbsp; <?php echo $fy ?> </b>
								
							</h5>


						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
										<script>
											$(document).ready(function(){
											    $('[data-toggle="tooltip"]').tooltip();  
											    document.getElementById("Report").className = "active open";
											    document.getElementById("jobwork_report").className = "active"; 
											});
											</script>
								<form class="form-horizontal" method="POST" action="jobwork_mw_report.php" class="pull-right">

									<h5 class="header blue lighter bigger"><b>
												<?php if(@isset($_GET['error'])){echo $_GET['error'];} else{echo 'Monthly Report';} ?></b> 
											</h5>

									<div class="form-group">

										<label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="width: 112px;"> Month <span style="color:red">*</span> </label>

										<div class="col-sm-9">
											<select required id="month"  name="month" style="width: 230px;height: 32px;" >
													<option value="">Select Month</option>
													<option value="04">April</option>
													<option value="05">May</option>
													<option value="06">June</option>
													<option value="07">July</option>
													<option value="08">August</option>
													<option value="09">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
													<option value="01">January</option>
													<option value="02">February</option>
													<option value="03">March</option>
								
											</select>

											
										</div>
									</div>


									<div class="form-group">
									<div class="col-md-offset-2 col-md-9">
										<input type="Submit" class="btn btn-bg btn-success" type="button" name="btnsubmit" value="View"/>
												
									</div>
								</div>

								</form>


								<form class="form-horizontal" method="POST" action="jobwork_s_report.php" class="pull-right">

									<h5 class="header blue lighter bigger"><b>
												<?php if(@isset($_GET['error'])){echo $_GET['error'];} else{echo 'Monthwise Summary';} ?></b> 
											</h5>



									<div class="form-group">
									<div class="col-md-offset-2 col-md-9">
										<input type="Submit" class="btn btn-bg btn-success" type="button" name="btnsubmit" value="View"/>
												
									</div>
								</div>

								</form>
						
					</div>
				</div>
			</div>
				
			

			 

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
</div>
</div>

		
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
	
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

	
	</body>
</html>

