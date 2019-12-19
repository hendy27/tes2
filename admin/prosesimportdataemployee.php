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
                        <a href="blank.php"><i class="fa fa-edit "></i>Data Employee Occupation  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="proses.php"><i class="fa fa-qrcode "></i>Prosess</a>
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
                     <h2>Proses Import Data Employee</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">						
							<div style="border:1px solid #B0C4DE; padding:5px; overflow:auto; width:99%; height:50%;">								
<?php
	if ($_POST['upload'] == "upload") {
		
		$target = basename($_FILES['namafile']['name']) ;
		move_uploaded_file($_FILES['namafile']['tmp_name'], $target);
		
		$Reader = new SpreadsheetReader($target);
		
		$nobaris=0;
		
		foreach ($Reader as $row){   
			echo json_encode($row);
			$EmployeeNo 				= $row[0];
			$AbsenteeismNo 				= $row[1];
			$JoinDate 					= $row[2];
			$EmploymentStatus 			= $row[3];
			$ProbationEndDate 			= $row[4];
			$StartContractDate 			= $row[5];
			$EndContractDate 			= $row[6];
			$ContractSequenceNo 		= $row[7];
			$FirstJoinEmployeeNo 		= $row[8];
			$ResignDate 				= $row[9];
			$ResignCode 				= $row[10];
			$ResignRemark 				= $row[11];
			$GradeCode 					= $row[12];
			$GradeCodeChangeDate 		= $row[13];
			$PositionCode 				= $row[14];
			$PositionCodeChangeDate 	= $row[15];
			$RankCode 					= $row[16];
			$RankCodeChangeDate 		= $row[17];
			$Level1Code 				= $row[18];
			$Level2Code 				= $row[19];
			$Level3Code 				= $row[20];
			$Level4Code 				= $row[21];
			$Level5Code 				= $row[22];
			$Level1CodeChangeDate 		= $row[23];
			$Level2CodeChangeDate 		= $row[24];
			$Level3CodeChangeDate 		= $row[25];
			$Level4CodeChangeDate 		= $row[26];
			$Level5CodeChangeDate 		= $row[27];
			$WorkNatureCode 			= $row[28];
			$WorkGroupCode 				= $row[29];
			$WorkGroupAuthorizeCode 	= $row[30];
			$Note 						= $row[31];
			$LastModifiedBy 			= $row[32];
			$LastModifiedDate 			= $row[33];
			$TimeStamp 					= $row[34];
			
																		
	if ($nobaris > 0) {
		$query = "select * from employeeoccupation where EmployeeNo='$EmployeeNo'";
		$result = mysql_query($query);
												
		if($result === false) {
		   echo "error";
		}
		else{
			$rows = mysql_num_rows($result);
			
			if ($rows==0 ){				 
				$query = "INSERT INTO employeeoccupation (EmployeeNo, AbsenteeismNo, JoinDate, EmploymentStatus, ProbationEndDate, StartContractDate, EndContractDate, ContractSequenceNo, FirstJoinEmployeeNo, ResignDate, ResignCode, ResignRemark, GradeCode, GradeCodeChangeDate, PositionCode, PositionCodeChangeDate, RankCode, RankCodeChangeDate, Level1Code, Level2Code, Level3Code, Level4Code, Level5Code, Level1CodeChangeDate, Level2CodeChangeDate, Level3CodeChangeDate, Level4CodeChangeDate, Level5CodeChangeDate, WorkNatureCode, WorkGroupCode, WorkGroupAuthorizeCode, Note, LastModifiedBy, LastModifiedDate, TimeStamp VALUES('$EmployeeNo','$AbsenteeismNo','$JoinDate','$EmploymentStatus','$ProbationEndDate','$StartContractDate','$EndContractDate','$ContractSequenceNo','$FirstJoinEmployeeNo','$ResignDate','$ResignCode','$ResignRemark','$GradeCode','$GradeCodeChangeDate','$PositionCode','$PositionCodeChangeDate','$RankCode','$RankCodeChangeDate','$Level1Code','$Level2Code','$Level3Code','$Level4Code','$Level5Code','$Level1CodeChangeDate','$Level2CodeChangeDate','$Level3CodeChangeDate','$Level4CodeChangeDate','$Level5CodeChangeDate','$WorkNatureCode','$WorkGroupCode','$WorkGroupAuthorizeCode','$Note','$LastModifiedBy','$LastModifiedDate', '$TimeStamp')";
				$result = mysql_query($query);
			}
			else{				 
				$query = "UPDATE employeeoccupation SET EmployeeNo='$EmployeeNo', AbsenteeismNo='$AbsenteeismNo', JoinDate='$JoinDate', EmploymentStatus='$EmploymentStatus', ProbationEndDate='$ProbationEndDate', StartContractDate='$StartContractDate', EndContractDate='$EndContractDate', ContractSequenceNo='$ContractSequenceNo', FirstJoinEmployeeNo='$FirstJoinEmployeeNo',ResignDate='$ResignDate', ResignCode='$ResignCode', ResignRemark='$ResignRemark', GradeCode='$GradeCode', GradeCodeChangeDate='$GradeCodeChangeDate', PositionCode='$PositionCode', PositionCodeChangeDate='$PositionCodeChangeDate', RankCode='$RankCode', RankCodeChangeDate='$RankCodeChangeDate', Level1Code='$Level1Code', Level2Code='$Level2Code', Level3Code='$Level3Code', Level4Code='$Level4Code', Level5Code='$Level5Code', Level1CodeChangeDate='$Level1CodeChangeDate', Level2CodeChangeDate='$Level2CodeChangeDate', Level3CodeChangeDate='$Level3CodeChangeDate', Level4CodeChangeDate='$Level4CodeChangeDate', Level5CodeChangeDate='$Level5CodeChangeDate', WorkNatureCode='$WorkNatureCode', WorkGroupCode='$WorkGroupCode', WorkGroupAuthorizeCode='$WorkGroupAuthorizeCode', Note='$Note', LastModifiedBy='$LastModifiedBy', LastModifiedDate='$LastModifiedDate', TimeStamp='$TimeStamp' where EmployeeNo='$EmployeeNo'";
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
