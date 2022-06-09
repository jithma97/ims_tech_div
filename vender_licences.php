<!DOCTYPE html>
<html lang="en">
     <?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "techdiv";

// Create connection
$con =  mysqli_connect($host, $username, $password,$dbName);

if($con  -> connect_error){
die("Connection error");

}
$sql = "SELECT * From vender_license";
$result = $con -> query($sql);

if (!$result){
 die ("Invalid query:". $con-> error);
}
?>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>::IMS - Technical Division::</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Switchery css -->
		<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css"/>	
		<style>	
		td.details-control {
		background: url('assets/plugins/datatables/img/details_open.png') no-repeat center center;
		cursor: pointer;
		}
		tr.shown td.details-control {
		background: url('assets/plugins/datatables/img/details_close.png') no-repeat center center;
		}
		</style>		
		<!-- END CSS for this page -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="logo" src="assets/images/logo.png" /> <span>IMS - Tech Div</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
				<?php include("nav.php"); ?>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

					
							
			<div class="row">
					<div class="col-xl-12">
							<div class="breadcrumb-holder">
                                    <h1 class="main-title float-left">Vendor License</h1>
                                    <ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Vendor License</li>
                                    </ol>
                                    <div class="clearfix"></div>
                            </div>
					</div>
			</div>
            <!-- end row -->

            
			<!--<div class="alert alert-success" role="alert">
					  <h4 class="alert-heading">Documentation</h4>
			</div>-->
			

			
			<div class="row">
			
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
						<div class="card mb-3">
							
								
							
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Vendor License
                                    </a>
                                  </h5>
                                </div>
                                
                                  <div class="card-body">
                                  <form method="POST" action="vender_licences_dbcon.php">
                                  <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" autocomplete="off">
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="trcsl_letter_reference">TRCSL Letter Reference</label>
                                                <input type="text" class="form-control" id="trcsl_letter_reference" name="trcsl_letter_reference" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="trcsl_letter_date">TRCSL Letter Date</label>
                                                <input type="date" class="form-control" id="trcsl_letter_date" name="trcsl_letter_date"  autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="mod_clearence_requested_reference">MOD clearence requested Reference</label>
                                                <input type="text" class="form-control" id="mod_clearence_requested_reference" name="mod_clearence_requested_reference" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="clearance_requested_reference_date">Clearance requested Reference Date</label>
                                                <input type="date" class="form-control" id="clearance_requested_reference_date" name="clearance_requested_reference_date" autocomplete="off">
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="sy_clearance_received_letter_reference">SY Clearance received letter reference</label>
                                                <input type="text" class="form-control" id="sy_clearance_received_letter_reference" name="sy_clearance_received_letter_reference" autocomplete="off">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="sy_clearance_received_letter_date">Sy Clearance received date</label>
                                                <input type="date" class="form-control" id="sy_clearance_received_letter_date" name="sy_clearance_received_letter_date" autocomplete="off">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="mod_approval_letter_reference">MOD Approval Letter Reference</label>
                                                <input type="text" class="form-control" id="mod_approval_letter_reference" name="mod_approval_letter_reference" autocomplete="off">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="mod_approval_letter_date">MOD Approval Letter Date</label>
                                                <input type="date" class="form-control" id="mod_approval_letter_date" name="mod_approval_letter_date" autocomplete="off">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="remarks_on_reject">Remarks on Reject</label>
                                                <input type="text" class="form-control" id="remarks_on_reject" name="remarks_on_reject"  autocomplete="off">
                                        </div>

                                    </div>
										
										<input type="submit" name="submit" class="btn btn-primary"value="Submit Vendor License Details">
										
									  </div>
									
								
								
							</div>							
						</div><!-- end card-->					
                    </div>

			</div>
			
    </form>
			
			<div class="row">
				
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
							<div class="card mb-3">
								
									
								<div class="card-body">
									<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
											<tr>
												<th>SN</th>
												<th>Company Name</th>
												<th>TRCSL Letter Reference</th>
												<th>MOD Clearence Requested Reference </th>
												<th>SY Clearence Received Letter</th>
												<th>MOD Approval Letter Reference</th>
												<th>Remarks on Reject</th>
												<th>Update</th>
												<th>Delete</th>
											</tr>
										</thead>										
										<tbody>
                                        <?php


while ($row = $result-> fetch_assoc())
{
   if($row["status"]==0){

?>
 <tr>
	 <td><?php echo $row["serial_number"];?></td>
	 <td><?php echo $row["company_name"] ;?></td>
	 <td><?php echo$row["trcsl_letter_reference"] ;?></td>
	 <td><?php echo $row["mod_clearence_requested_reference"];?></td>
	 <td><?php echo $row["sy_clearance_received_letter_reference"] ;?></td>
     <td><?php echo $row["mod_approval_letter_reference"] ;?></td>
     <td><?php echo $row["remarks_on_reject"] ;?></td>
    
      <td>
	 <a class='btn btn-primary btn-sm' href="update_vl.php?serial_number=<?php echo $row["serial_number"];?>">Update </a> </td>
	 <td>
	 <a class='btn btn-danger btn-sm'href="delete_vl.php?serial_number=<?php echo $row["serial_number"];?>">Delete </a> </td>
 </tr>
 </tr>
 <?php
   }
}
?>
										</tbody>
									</table>
									</div>
									
								</div>														
							</div><!-- end card-->					
						</div>

				</div>
	
			



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include("footer.php"); ?>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>

	<script>
	// START CODE FOR BASIC DATA TABLE 
	$(document).ready(function() {
		$('#example1').DataTable();
	} );
	// END CODE FOR BASIC DATA TABLE 
			 	
	</script>	
<!-- END Java Script for this page -->

</body>
</html>