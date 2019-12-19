<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

echo "Selamat datang ". $_SESSION['username'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Occupation</title>
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
				<li >
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>                   
                    <li>
                        <a href="ui.php"><i class="fa fa-table "></i>Data Master  <span class="badge"></span></a>
                    </li>
                   <li>
                        <a href="blank.php"><i class="fa fa-edit "></i>Data Employee Occupation <span class="badge"></span></a>
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
                     <h2>Data Employee Occupation </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       
                       <div class="input-group">
					   <a href='tambahdataemployee.php'> Tambah </a> | 
					   <a href='formimportemployee.php'> Import Data </a> 
						<table class="table table-striped table-bordered table-hover">     
						<tr>         
							<th> Employee No </th>        
							<th> Absenteeism No  </th>          
							<th> Join Date </th>
							<th> Employment Status </th>
							<th> Probation End Date  </th>
							<th> Start Contrac Date  </th>
							<th> End Contract Date </th>
							<th> Contract Sequence No </th>
							<th> First Join Employee No </th>
							<th> Resign Date  </th>
							<th> Resign Code </th>
							<th> Resign Remark </th>
							<th> Grade Code  </th>
							<th> Grade Code Change Date </th>
							<th> Position Code  </th>
							<th> Position Code Change Date </th>
							<th> Rank Code  </th>
							<th> Rank Code Change Date  </th>
							<th> Level 1 Code  </th>
							<th> Level 2 Code </th>
							<th> Level 3 Code </th>
							<th> Level 4 Code </th>
							<th> Level 5 Code </th>						
							<th> Level 1 Code Change Date </th>
							<th> Level 2 Code Change Date </th>
							<th> Level 3 Code Change Date </th>
							<th> Level 4 Code Change Date </th>
							<th> Level 5 Code Change Date </th>
							<th> Work Nature Code </th>
							<th> Work Group Code </th>
							<th> Work Group Authorize Code </th>
							<th> Note </th>
							
							<th> Action </th>
						
						</tr>      
					<?php  
						$select = "SELECT * FROM employeeoccupation";
						$query = mysql_query($select); 					   
						while ($data = mysql_fetch_array($query)) {
							$EmployeeNo         		= $data['EmployeeNo'];  
							$AbsenteeismNo      		= $data['AbsenteeismNo'];
							$JoinDate   				= $data['JoinDate'];
							$EmploymentStatus   		= $data['EmploymentStatus'];  
							$ProbationEndDate   		= $data['ProbationEndDate'];
							$StartContractDate  		= $data['StartContractDate'];
							$EndContractDate    		= $data['EndContractDate'];  
							$ContractSequenceNo 		= $data['ContractSequenceNo'];
							$FirstJoinEmployeeNo   		= $data['FirstJoinEmployeeNo'];
							$ResignDate     			= $data['ResignDate'];
							$ResignCode   				= $data['ResignCode'];
							$ResignRemark         		= $data['ResignRemark'];  
							$GradeCode       			= $data['GradeCode'];
							$GradeCodeChangeDate   		= $data['GradeCodeChangeDate'];
							$PositionCode        		= $data['PositionCode'];  
							$PositionCodeChangeDate     = $data['PositionCodeChangeDate'];							
							$RankCode    				= $data['RankCode'];  							
							$RankCodeChangeDate      	= $data['RankCodeChangeDate'];
							$Level1Code   				= $data['Level1Code'];
							$Level2Code     			= $data['Level2Code'];
							$Level3Code   				= $data['Level3Code'];
							$Level4Code      			= $data['Level4Code'];
							$Level5Code   				= $data['Level5Code'];
							$Level1CodeChangeDate     	= $data['Level1CodeChangeDate'];
							$Level2CodeChangeDate   	= $data['Level2CodeChangeDate'];	
							$Level3CodeChangeDate   	= $data['Level3CodeChangeDate'];
							$Level4CodeChangeDate     	= $data['Level4CodeChangeDate'];
							$Level5CodeChangeDate   	= $data['Level5CodeChangeDate'];
							$WorkNatureCode   			= $data['WorkNatureCode'];								
							$WorkGroupCode     			= $data['WorkGroupCode'];
							$WorkGroupAuthorizeCode   	= $data['WorkGroupAuthorizeCode'];
							$Note     					= $data['Note'];
							
							
							echo "                
						<tr>                     
						<td> $EmployeeNo </td>                     
						<td> $AbsenteeismNo  </td>                     
						<td> $JoinDate </td>
						<td> $EmploymentStatus</td> 
						<td> $ProbationEndDate </td> 
						<td> $StartContractDate </td> 
						<td> $EndContractDate</td> 
						<td> $ContractSequenceNo </td> 
						<td> $FirstJoinEmployeeNo </td> 
						<td> $ResignDate </td> 
						<td> $ResignCode</td>
						<td> $ResignRemark </td>                     
						<td> $GradeCode </td>                     
						<td> $GradeCodeChangeDate </td>
						<td> $PositionCode</td> 
						<td> $PositionCodeChangeDate </td> 
						<td> $RankCode </td> 
						<td> $RankCodeChangeDate</td> 
						<td> $Level1Code </td> 
						<td> $Level2Code </td> 
						<td> $Level3Code </td> 
						<td> $Level4Code</td>
						<td> $Level5Code </td>                     
						<td> $Level1CodeChangeDate </td>                     
						<td> $Level2CodeChangeDate </td>
						<td> $Level3CodeChangeDate</td> 
						<td> $Level4CodeChangeDate </td> 
						<td> $Level5CodeChangeDate </td> 
						<td> $WorkNatureCode</td> 
						<td> $WorkGroupCode </td> 
						<td> $WorkGroupAuthorizeCode </td> 
						<td> $Note </td> 
						
						<td> <a href='editdataemployee.php?EmployeeNo=$EmployeeNo'> Edit </a> | 
							 <a href='hapusdataoccupation.php?EmployeeNo=$EmployeeNo'onClick=\"return confirm('Are you sure want to delete ?')\">Delete</a>
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
                 <!-- /. ROW  -->           
			</div>			
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">          
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  ## | Design by: <a href="##" style="color:#fff;"  target="_blank">##</a>
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
