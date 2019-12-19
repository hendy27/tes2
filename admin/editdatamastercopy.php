<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

echo "Selamat datang ". $_SESSION['username'];
?>
<head>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	  $( function() {
		$( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +15D" });
	  } );
	  $( function() {
		$( "#datepicker" ).datepicker({ minDate: -20, maxDate: "+1M +15D" });
	  } );
	  </script>
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
		 <form action="tambahprosesdataemployee.php" method="post">
		  <table cellpadding="3" cellspacing="0">		   
		   <tr>
				<td>Employee No</td>
				<td>: </td>
			<td><input type="text" name="EmployeeNo" size="30" required></td>
		   </tr>
		   <tr>
				<td>Absenteeism No </td>
				<td>:</td>
			<td><input type="text" name="AbsenteeismNo" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Join Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="JoinDate"></p>
		   </tr>
		   <tr>
				<td>Employment Status </td>
				<td>:</td>			
				<td>
				<input type="text" name="EmploymentStatus" size="30" required>
				</td>
			</td>
		   </tr>		  		   
		   <tr>
				<td>Probation End Date</td>
				<td>:</td>
			<td><p><input type="text" id="datepicker"  name="ProbationEndDate"></p></td>    
			</td>
		   </tr>
		  <tr>
				<td>Start Contract Date</td>
				<td>:</td>
			<td>
			<p><input type="text" id="datepicker"  name="StartContractDate"></p>
			</td>    
			</td>
		   </tr>
		   <tr>
				<td>End Contract Date</td>
				<td>:</td>
			<td><p><input type="text" id="datepicker"  name="EndContractDate"></p></td>    
			</td>
		   </tr>
		    <tr>
				<td>Contract Sequence No </td>
				<td>:</td>
			<td><input type="text" name="ContractSequenceNo" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>First Join Employee No </td>
				<td>:</td>
			<td><input type="text" name="FirstJoinEmployeeNo" size="30" required></td>
			</td>
		   </tr>
		    <tr>
				<td>Resign Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="ResignDate"></p>
		   </tr>
			 <tr>
				<td>Resign Code </td>
				<td>:</td>
			<td><input type="text" name="ResignCode" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Resign Remark </td>
				<td>:</td>
			<td><input type="text" name="ResignRemark" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Grade Code</td>
				<td>:</td>
			<td><input type="text" name="GradeCode" size="30" required></td>
			</td>
		   </tr>
	   	   <tr>
				<td>Grade Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="GradeCodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Position Code</td>
				<td>:</td>
			<td><input type="text" name="PositionCode" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Position Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="PositionCodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Rank Code</td>
				<td>:</td>
			<td><input type="text" name="RankCode" size="30" required></td>
			</td>
		   </tr>
		    <tr>
				<td>Rank Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="RankCodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Level 1 Code</td>
				<td>:</td>
			<td><input type="text" name="Level1Code" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Level 2 Code</td>
				<td>:</td>
			<td><input type="text" name="Level2Code" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Level 3 Code</td>
				<td>:</td>
			<td><input type="text" name="Level3Code" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Level 4 Code</td>
				<td>:</td>
			<td><input type="text" name="Level4Code" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Level 5 Code</td>
				<td>:</td>
			<td><input type="text" name="Level5Code" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Level 1 Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="Level1CodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Level 2 Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="Level2CodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Level 3 Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="Level3CodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Level 4 Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="Level4CodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Level 5 Code Change Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="Level5CodeChangeDate"></p>
		   </tr>
		   <tr>
				<td>Work Nature Code</td>
				<td>:</td>
			<td><input type="text" name="WorkNatureCode" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Work Group Code</td>
				<td>:</td>
			<td><input type="text" name="WorkGroupCode" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Work Group Authorize Code</td>
				<td>:</td>
			<td><input type="text" name="WorkGroupAuthorizeCode" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Note</td>
				<td>:</td><br>
				<td><textarea name="Note" cols="45" rows="4"> </textarea></td>			
		   </tr>
		   <tr>
				<td>Last Modified By</td>
				<td>:</td>
			<td><input type="text" name="LastModifiedBy" size="30" required></td>
			</td>
		   </tr>
		   <tr>
				<td>Last Modified Date</td>
				<td>:</td>
			<td>
				<p><input type="text" id="datepicker"  name="LastModifiedDate"></p>
		   </tr>
		   <tr>
				<td>Time Stamp</td>
				<td>:</td>
			<td><input type="text" name="TimeStamp" size="30" required></td>
			</td>
		   </tr>
		   
		   <tr>
				<td>&nbsp;</td>
				<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		   </tr>
		  </table>
		 </form>			
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
   <!-- <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <!--<script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <!--<script src="assets/js/custom.js"></script>   
</body>
</html>

