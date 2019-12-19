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
    <title>Data Master</title>
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
                     <li> 
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>                 
                    <li class="active-link">
                        <a href="ui.php"><i class="fa fa-table "></i>Data Master  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="blank.php"><i class="fa fa-edit "></i>Data Employee Occupation  <span class="badge"></span></a>
                    </li>
					<li>
                        <a href="prosess.php"><i class="fa fa-qrcode "></i>Prosess</a>
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
                    <div class="col-md-12">
                        <h2>Data Master</h2>
                    </div>
                </div>
              
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       
                       <div class="input-group">
					   <a href='tambahdatamaster.php'> Tambah </a> | 
					   <a href='formimportdatamaster.php'> Import Data </a> 
						<table class="table table-striped table-bordered table-hover">     
						<tr>         
							<th> Employee No </th>        
							<th> Full Name </th>          
							<th> Birht Place </th>
							<th> Birth Date </th>
							<th> Gender </th>
							<th> Marital Status </th>
							<th> Nationality Code </th>
							<th> Personal Email </th>
							<th> Note </th>
							<th> Last Modified By </th>							
							<th> Action </th>						
						</tr>      
					<?php  
						$select = "SELECT * FROM employeemaster";
						$query = mysql_query($select); 					   
						while ($data = mysql_fetch_array($query)) {
							$EmployeeNo         = $data['EmployeeNo'];  
							$FullName       	= $data['FullName'];
							$BirhtPlace   		= $data['BirhtPlace'];
							$BirthDate        	= $data['BirthDate'];  
							$Gender       		= $data['Gender'];
							$MaritalStatus   	= $data['MaritalStatus'];
							$NationalityCode    = $data['NationalityCode'];  
							$PersonalEmail      = $data['PersonalEmail'];
							$Note   			= $data['Note'];
							$LastModifiedBy     = $_SESSION['username'];						
							echo "                
						<tr>                     
						<td> $EmployeeNo </td>                     
						<td> $FullName </td>                     
						<td> $BirhtPlace </td>
						<td> $BirthDate</td> 
						<td> $Gender </td> 
						<td> $MaritalStatus </td> 
						<td> $NationalityCode</td> 
						<td> $PersonalEmail </td> 
						<td> $Note </td> 
						<td> $LastModifiedBy </td> 					 
						<td> <a href='editdatamaster.php?EmployeeNo=$EmployeeNo'> Edit </a> | 
							 <a href='hapusdatamaster.php?EmployeeNo=$EmployeeNo'onClick=\"return confirm('Are you sure want to delete ?')\">Delete</a>
							</td>    
									</td> 
								</tr> 
							";
						}				 
					?>
				</table>   					   					   
        </div>
        </div>
        </div>
        </div>
		</div>				
            <hr>
        <div class="row">
        </div>            
        <div class="footer">   
        <div class="row">
        <div class="col-lg-12" >
            &copy;  2014 # | Design by: <a href="" style="color:#fff;"  target="_blank">$</a>
        </div>
        </div>
        </div>     
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
