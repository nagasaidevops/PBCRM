<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('includes/header_links.php');
?>
</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper boxed-wrapper">
<?php
include('includes/header.php');
include('includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
<!-- Content Header (Page header) -->
<div class="content-header sty-one">
  <h1>Create Contact </h1>
  <ol class="breadcrumb">
	<li><a href="index.php">Dashboard</a></li>
	<li><i class="fa fa-angle-right"></i> Create Contact</li>
  </ol>
</div>

<!-- Main content -->
<div class="content"> 
  
  <!-- Main row -->
<div class="content">
  <div class="info-box">
	<!-- <h4 class="text-black">Add Accounts</h4> -->
	<div class="row">
		
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Full Name</label>
			  <input id="full_name" class="form-control" placeholder="Full Name" type="text">
			</fieldset>
		</div>
		
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Email Address</label>
			  <input id="email" class="form-control" placeholder="Email Address" type="email">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Alternate Email</label>
			  <input id="a_email" class="form-control" placeholder="Alternate Email" type="text">
			</fieldset>
		</div>
		
		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Mobile Number</label>
			  <input id="number" class="form-control" placeholder="Mobile Number" type="number">
			</fieldset>
		</div>
			
		<div class="col-lg-4">
			<label>Account Name</label>
			<select class="form-control" id="acconts">
				<option>Select Account Name</option>
				<option>Company name</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Work</label>
			  <input id="work" class="form-control" placeholder="Work" type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<label>Sales Owner</label>
			<select class="form-control" id="sales_owner">
				<option>Select</option>
				<option>Sahith</option>
				<option>Chetan</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>Contact Stage</label>
			<select class="form-control" id="sales_owner">
				<option>Select </option>
				<option>Lead</option>
				<option>Sales Qualified Lead</option>
				<option>Customer</option>
				<option>Market Qualified Lead</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>Status</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>New</option>
				<option>Contactes</option>
				<option>Interested</option>
				<option>Unqualified</option>
				<option>No Longer in Company</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Direct Number</label>
				<input id="d_number" class="form-control" placeholder="Direct Number" type="number">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
			  <label>Board Number</label>
			  <input id="b_phone" class="form-control" placeholder="Board Number" type="number">
			</fieldset>
		</div>
		
		<div class="col-lg-4">
			<label> Campaign</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>m65</option>
				<option>ITSM Services</option>
				<option>RWaaS</option>
				<option>AWS</option>
				<option>Offshore</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<label>GTM_Contacts</label>
			<select class="form-control" id="business">
				<option>Select </option>
				<option>m65</option>
				<option>ITSM Services</option>
				<option>RWaaS</option>
				<option>AWS</option>
				<option>Offshore</option>
			</select>
	    </div>

		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Job Tiltle</label>
				<input id="job_title" class="form-control" placeholder="Job Tiltle" type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Address</label>
				<input id="address" class="form-control" placeholder="Address" type="text">
			</fieldset>
		</div>

		<div class="col-lg-4">
			<fieldset class="form-group">
				<label>Notes</label>
				<textarea id="notes" class="form-control" placeholder="Notes"></textarea>
			</fieldset>
		</div>

	</div>
	<div class="row" style="padding-top:10px;">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<fieldset class="form-group">
				<input id="btn btn-primary" class="form-control label-primary" placeholder="Annual Revenue" type="button" value="SAVE">
			</fieldset>
		</div>
	</div>
	
	
	
	<!-- <hr class="m-t-3 m-b-3"> -->
	
  </div>
  <!-- Main row --> 
</div>

</div>
<!-- /.content --> 
</div>
<!-- /.content-wrapper -->
<?php
include('includes/footer.php'); 
?>
</div>
<!-- ./wrapper --> 

<?php
include('includes/footer_links.php'); 
?>
</body>
</html>
