<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

echo "Selamat datang ". $_SESSION['username'];
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
                        <a href="blank.php"><i class="fa fa-edit "></i>Data Employee Occupation  <span class="badge"></span></a>
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
                     <h2>Tambah Data</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">                       
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 					 								
		<?php
		if(isset( $_POST['tambah'])){		 	 		 
			$EmployeeNo         = mysql_real_escape_string ($_POST['EmployeeNo']);
				$cekdata= "select * from employeemaster where EmployeeNo='$_POST[EmployeeNo]'";
				$prosescek= mysql_query($cekdata);
				if (mysql_num_rows($prosescek)>0) {
					echo "<script>alert('EmployeeNo Sudah Digunakan');history.go(-1) </script>";
				}
					else {				 
				}
			$FullName       	= mysql_real_escape_string ($_POST['FullName']);
			$BirhtPlace   		= mysql_real_escape_string ($_POST['BirhtPlace']);
			$BirthDate        	= mysql_real_escape_string ($_POST['BirthDate']);
				$phpdate = strtotime( $BirthDate );
				$BirthDate = date( 'Y-m-d', $phpdate );
			$Gender       		= mysql_real_escape_string ($_POST['Gender']);
			$MaritalStatus   	= mysql_real_escape_string ($_POST['MaritalStatus']);
			$NationalityCode    = mysql_real_escape_string ($_POST['NationalityCode']);  
			$PersonalEmail      = mysql_real_escape_string ($_POST['PersonalEmail']);
			$Note   			= mysql_real_escape_string ($_POST['Note']);
					 
		 $input = mysql_query("INSERT INTO employeemaster VALUES('$EmployeeNo','$FullName','$BirhtPlace','$BirthDate','$Gender','$MaritalStatus','$NationalityCode','$PersonalEmail','$Note','','')") or die(mysql_error());
		 if($input){		  
			  echo 'Data berhasil di tambahkan! '; 
			  echo '<a href="ui.php">Kembali</a>';		  
			}
		 else
			{		  
			  echo 'Gagal menambahkan data! '; 
			  echo '<a href="tambahprosesdata.php">Kembali</a>';		  
			}
			}
		else
			{
		 echo '<script>window.history.back()</script>';
			}
		?>
			
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

