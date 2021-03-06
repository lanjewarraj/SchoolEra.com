<?php
error_reporting(E_PARSE | E_ERROR);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SchoolEra</title>
      <link rel="icon" href="logo1.png">
  <!--////////->
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!--HHH-->
 <style>
 ul a:hover
 { 
   background-color:#;
 }
 
 </style>

  <!--HHH-->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav style="background-color:black;" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><h4><i><strong>SchoolEra</strong></i></h4></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul  style="background-color:black;" class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i  class="fa fa-fw fa-dashboard"></i>
            <span  class="nav-link-text">DASHBOARD</span>
          </a>
        </li>
      
 
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">STUDENTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="AdmisionForm.php">Admit Student</a>
            </li>
            <li>
              <a href="tables.php">View Students</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">TEACHERS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="ManageStaff.php">View Teachers</a>
            </li>
            <li>
              <a href="staffform.php">Admit Teacher</a>
            </li>
           
          </ul>
        </li>
		      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">CLASSES & SUBJECTS</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
           <li>
              <a href="subjecttable.php">View Subjects</a>
            </li>
            <li>
              <a href="classtable.php">View Classes</a>
            </li>
            <li>
              <a href="insertclass.php">Add New Class</a>
            </li>
            <li>
              <a href="insertsubject.php">Add New Subject</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">RESULT</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
            <li>
              <a href="AddResult.php">Add Result</a>
            </li>
            <li>
              <a href="ManageResult.php">ManageResult</a>
            </li>
          </ul>
        </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="feedbacktable.php">
            <i  class="fa fa-fw fa-envelope"></i>
            <span  class="nav-link-text">FEEDBACK</span>
          </a>
        </li>
      </ul>
      <ul  style="background-color:black;"class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
	  
      <ul class="navbar-nav ml-auto">
	    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>name</strong>
              <span class="small float-right text-muted">Messages</span>
              <div class="dropdown-message small"></div>
            </a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
	   <li class="nav-item">
          <a href="cal.html" class="nav-link" data-toggle=""  data-target="#">
            <i class="fa fa-fw fa-calendar-o"></i>Calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal"  data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    
	  <div class="content-wrapper">
    <div class="container-fluid">
	<div class="card card-register mx-auto mt-10">
      <div class="card-header">Add Result</div>
      <div class="card-body">
	  <form action="controlresult.php" method="post">
	  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
	  <label>Class</label>
	  <select class="form-control" name="class">
	  <option>Fifth</option>
	    <option>sixth</option>
		  <option>seventh</option>
		    <option>eighth</option>
			  <option>nineth</option>
			    <option>tenth</option>
				</select>
				</div><div class="col-md-6">
				<label>Roll</label>
	   <input class="form-control" type="text" name="roll" required>
	   </div>
	   </div>
	   </div>
	   <label>Subjects</label>
	    <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
      <input class="form-control" type="text" name="english" placeholder="Enter english marks out of the 100" required><br>	
             </div>
             <div class="col-md-6">			 
      <input class="form-control" type="text" name="hindi" placeholder="Enter hindi marks out of the 100" required><br>	
          </div>		  
          </div>		  
          </div>	
 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">		  
      <input class="form-control" type="text" name="marathi"placeholder="Enter marathi marks out of the 100"required><br>	
             </div> 
		<div class="col-md-6">	  
      <input class="form-control"type="text" name="maths" placeholder="Enter maths marks out of the 100"required><br>	  
         </div>
		   </div>		  
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">	
      <input class="form-control"type="text" name="science" placeholder="Enter science marks out of the 100"required><br>
              </div>
          		 <div class="col-md-6">	  
      <input class="form-control"type="text" name="SocialScience"placeholder="Enter socialscience marks out of the 100"required><br>
               </div>	  
               </div>	  
               </div>	  
		<input type="submit" class="btn btn-primary btn-block">	    
     
      </form>
        </div>
        </div>
        </div>
      </div>

	
      
	
   <footer style="background-color:black;color:white;" class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright©SchoolEra@2k18</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
	
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
