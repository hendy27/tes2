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
				$cekdata= "select * from employeeoccupation where EmployeeNo='$_POST[EmployeeNo]'";
				$prosescek= mysql_query($cekdata);
				if (mysql_num_rows($prosescek)>0) {
					echo "<script>alert('EmployeeNo Sudah Digunakan');history.go(-1) </script>";
				}
					else {				 
				}
			$AbsenteeismNo       			= mysql_real_escape_string ($_POST['AbsenteeismNo']);			
			$JoinDate        				= mysql_real_escape_string ($_POST['JoinDate']);
				$phpdate = strtotime( $JoinDate );
				$JoinDate = date( 'Y-m-d H:i:s', $phpdate );
			$EmploymentStatus       		= mysql_real_escape_string ($_POST['EmploymentStatus']);
			$ProbationEndDate        		= mysql_real_escape_string ($_POST['ProbationEndDate']);
				$phpdate = strtotime( $ProbationEndDate );
				$ProbationEndDate = date( 'Y-m-d H:i:s', $phpdate );
			$StartContractDate        		= mysql_real_escape_string ($_POST['StartContractDate']);
				$phpdate = strtotime( $StartContractDate );
				$StartContractDate = date( 'Y-m-d H:i:s', $phpdate );
			$EndContractDate        		= mysql_real_escape_string ($_POST['EndContractDate']);
				$phpdate = strtotime( $EndContractDate );
				$EndContractDate = date( 'Y-m-d H:i:s', $phpdate );
			$ContractSequenceNo       		= mysql_real_escape_string ($_POST['ContractSequenceNo']);
			$FirstJoinEmployeeNo       		= mysql_real_escape_string ($_POST['FirstJoinEmployeeNo']);
			$ResignDate        		= mysql_real_escape_string ($_POST['ResignDate']);
				$phpdate = strtotime( $ResignDate );
				$ResignDate = date( 'Y-m-d H:i:s', $phpdate );
			$ResignCode       			= mysql_real_escape_string ($_POST['ResignCode']);
			$ResignRemark       		= mysql_real_escape_string ($_POST['ResignRemark']);
			$GradeCode       			= mysql_real_escape_string ($_POST['GradeCode']);
			$GradeCodeChangeDate        		= mysql_real_escape_string ($_POST['GradeCodeChangeDate']);
				$phpdate = strtotime( $GradeCodeChangeDate );
				$GradeCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$PositionCode       		= mysql_real_escape_string ($_POST['PositionCode']);
			$PositionCodeChangeDate        		= mysql_real_escape_string ($_POST['PositionCodeChangeDate']);
				$phpdate = strtotime( $PositionCodeChangeDate );
				$PositionCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$RankCode       			= mysql_real_escape_string ($_POST['RankCode']);
			$RankCodeChangeDate        		= mysql_real_escape_string ($_POST['RankCodeChangeDate']);
				$phpdate = strtotime( $RankCodeChangeDate );
				$RankCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$Level1Code       			= mysql_real_escape_string ($_POST['Level1Code']);
			$Level2Code       			= mysql_real_escape_string ($_POST['Level2Code']);
			$Level3Code       			= mysql_real_escape_string ($_POST['Level3Code']);
			$Level4Code       			= mysql_real_escape_string ($_POST['Level4Code']);
			$Level5Code       			= mysql_real_escape_string ($_POST['Level5Code']);
			$Level1CodeChangeDate         		= mysql_real_escape_string ($_POST['Level1CodeChangeDate']);
				$phpdate = strtotime( $Level1CodeChangeDate  );
				$Level1CodeChangeDate  = date( 'Y-m-d H:i:s', $phpdate );
			$Level2CodeChangeDate        		= mysql_real_escape_string ($_POST['Level2CodeChangeDate']);
				$phpdate = strtotime( $Level2CodeChangeDate );
				$Level2CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$Level3CodeChangeDate        		= mysql_real_escape_string ($_POST['Level3CodeChangeDate']);
				$phpdate = strtotime( $Level3CodeChangeDate );
				$Level3CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$Level4CodeChangeDate        		= mysql_real_escape_string ($_POST['Level4CodeChangeDate']);
				$phpdate = strtotime( $Level4CodeChangeDate );
				$Level4CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$Level5CodeChangeDate        		= mysql_real_escape_string ($_POST['Level5CodeChangeDate']);
				$phpdate = strtotime( $Level5CodeChangeDate );
				$Level5CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
			$WorkNatureCode       		= mysql_real_escape_string ($_POST['WorkNatureCode']);
			$WorkGroupCode       		= mysql_real_escape_string ($_POST['Level2Code']);
			$WorkGroupAuthorizeCode     = mysql_real_escape_string ($_POST['WorkGroupAuthorizeCode']);
			$Note       				= mysql_real_escape_string ($_POST['Note']);
			//$LastModifiedBy       		= mysql_real_escape_string ($_POST['LastModifiedBy']);
			$LastModifiedDate         	= mysql_real_escape_string ($_POST['LastModifiedDate']);
				$phpdate = strtotime( $LastModifiedDate  );
				$LastModifiedDate  = date( 'Y-m-d H:i:s', $phpdate );
			//$TimeStamp       			= mysql_real_escape_string ($_POST['TimeStamp']); 							
					 
		 		  
		 $input = mysql_query("INSERT INTO employeeoccupation VALUES('$EmployeeNo','$AbsenteeismNo','$JoinDate','$EmploymentStatus','$ProbationEndDate','$StartContractDate','$EndContractDate','$ContractSequenceNo','$FirstJoinEmployeeNo','$ResignDate','$ResignCode','$ResignRemark','$GradeCode','$GradeCodeChangeDate','$PositionCode','$PositionCodeChangeDate','$RankCode','$RankCodeChangeDate','$Level1Code','$Level2Code','$Level3Code','$Level4Code','$Level5Code','$Level1CodeChangeDate','$Level2CodeChangeDate','$Level3CodeChangeDate','$Level4CodeChangeDate','$Level5CodeChangeDate','$WorkNatureCode','$WorkGroupCode','$WorkGroupAuthorizeCode','$Note','','$LastModifiedDate','')") or die(mysql_error());
			if($input){
			  echo 'Data berhasil di tambahkan! '; 
			  echo '<a href="blank.php">Kembali</a>';		  
			}
		 else
			{		  
			  echo 'Gagal menambahkan data! '; 
			  echo '<a href="tambahprosesdataemployee.php">Kembali</a>';		  
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

