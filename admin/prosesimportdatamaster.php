<?php
		include '../config.php';
		require ("../library/php-excel-reader/excel_reader2.php");
		require ("../library/SpreadsheetReader.php");

		session_start();

		if($_SESSION['status'] !="login"){
			header("location:../index.php");
		}				
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>         
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>                   
                </div>             
                <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;"><h5>LOGOUT</h5></a>  
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>                  
                    <li>
                        <a href="ui.php"><i class="fa fa-table "></i>Data Master  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Blank Page  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>                    
                </ul>
             </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Proses Import Data</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">						
							<div style="border:1px solid #B0C4DE; padding:5px; overflow:auto; width:99%; height:7%;">								
<?php
	if ($_POST['upload'] == "upload") {
		
		$target = basename($_FILES['namafile']['name']) ;
		move_uploaded_file($_FILES['namafile']['tmp_name'], $target);
		
		$Reader = new SpreadsheetReader($target);
		
		$nobaris=0;
		
		foreach ($Reader as $row){   
			//echo json_encode($row);
			$EmployeeNo 		= $row[0];
			$FullName 			= $row[1];
			$BirhtPlace 		= $row[2];
			$BirthDate 			= $row[3];
			$Gender 			= $row[4];
			$MaritalStatus 		= $row[5];
			$NationalityCode 	= $row[6];
			$PersonalEmail 		= $row[7];
			$Note 				= $row[8];
			$LastModifiedBy 	= $row[9];
			$LastModifiedDate 	= $row[10];
																		
			if ($nobaris > 0) {
				$query = "select * from employeemaster where EmployeeNo='$EmployeeNo'";
				$result = mysql_query($query);
														
				if($result === false) {
				   echo "error";
				}
				else{
					$rows = mysql_num_rows($result);
					
					if ($rows==0 ){
						$query = "INSERT INTO employeemaster (EmployeeNo, FullName, BirhtPlace, BirthDate, Gender, MaritalStatus, NationalityCode, PersonalEmail, Note, LastModifiedBy, LastModifiedDate) VALUES('$EmployeeNo','$FullName','$BirhtPlace','$BirthDate','$Gender','$MaritalStatus','$NationalityCode','$PersonalEmail','$Note','$LastModifiedBy','$LastModifiedDate')";
						$result = mysql_query($query);
					}
					else{
						$query = "UPDATE employeemaster SET EmployeeNo='$EmployeeNo', FullName='$FullName', BirhtPlace='$BirhtPlace' ,BirthDate='$BirthDate', Gender='$Gender', MaritalStatus='$MaritalStatus', NationalityCode='$NationalityCode', PersonalEmail='$PersonalEmail', Note='$Note' where EmployeeNo='$EmployeeNo'";
						$result = mysql_query($query);
					}
				
					if($result){
						
						echo 'FILE BERHASIL DI IMPORT';
					}else{
						echo 'GAGAL MENGIMPORT FILE<br>';
					}
				}
			}
			$nobaris++;
		}						
	}																				
?>									
							</div>
                        </div>                    
                    </div>
                </div>
                  <!-- /. ROW  --> 					 
					 <div class="row">
                    <div class="col-lg-6 col-md-6">						 						           
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">          
            <div class="row">
                <div class="col-lg-12" >
                    &copy; | Design by: <a href="#" style="color:#fff;" target="_blank">##</a>
                </div>
            </div>
        </div>          
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>      
</body>
</html>
