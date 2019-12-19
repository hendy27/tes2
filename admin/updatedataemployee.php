<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
	$EmployeeNo         		= mysql_real_escape_string ($_POST['EmployeeNo']);
	$AbsenteeismNo       		= mysql_real_escape_string ($_POST['AbsenteeismNo']);			
	$JoinDate        			= mysql_real_escape_string ($_POST['JoinDate']);
		$phpdate = strtotime( $JoinDate );
		$JoinDate = date( 'Y-m-d H:i:s', $phpdate );
	$EmploymentStatus       	= mysql_real_escape_string ($_POST['EmploymentStatus']);
	$ProbationEndDate        	= mysql_real_escape_string ($_POST['ProbationEndDate']);
		$phpdate = strtotime( $ProbationEndDate );
		$ProbationEndDate = date( 'Y-m-d H:i:s', $phpdate );
	$StartContractDate        	= mysql_real_escape_string ($_POST['StartContractDate']);
		$phpdate = strtotime( $StartContractDate );
		$StartContractDate = date( 'Y-m-d H:i:s', $phpdate );
	$EndContractDate        	= mysql_real_escape_string ($_POST['EndContractDate']);
		$phpdate = strtotime( $EndContractDate );
		$EndContractDate = date( 'Y-m-d H:i:s', $phpdate );
	$ContractSequenceNo       	= mysql_real_escape_string ($_POST['ContractSequenceNo']);
	$FirstJoinEmployeeNo       	= mysql_real_escape_string ($_POST['FirstJoinEmployeeNo']);
	$ResignDate        			= mysql_real_escape_string ($_POST['ResignDate']);
		$phpdate = strtotime( $ResignDate );
		$ResignDate = date( 'Y-m-d H:i:s', $phpdate );
	$ResignCode       			= mysql_real_escape_string ($_POST['ResignCode']);
	$ResignRemark       		= mysql_real_escape_string ($_POST['ResignRemark']);
	$GradeCode       			= mysql_real_escape_string ($_POST['GradeCode']);
	$GradeCodeChangeDate        		= mysql_real_escape_string ($_POST['GradeCodeChangeDate']);
		$phpdate = strtotime( $GradeCodeChangeDate );
		$GradeCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$PositionCode       		= mysql_real_escape_string ($_POST['PositionCode']);
	$PositionCodeChangeDate     = mysql_real_escape_string ($_POST['PositionCodeChangeDate']);
		$phpdate = strtotime( $PositionCodeChangeDate );
		$PositionCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$RankCode       			= mysql_real_escape_string ($_POST['RankCode']);
	$RankCodeChangeDate         = mysql_real_escape_string ($_POST['RankCodeChangeDate']);
		$phpdate = strtotime( $RankCodeChangeDate );
		$RankCodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$Level1Code       			= mysql_real_escape_string ($_POST['Level1Code']);
	$Level2Code       			= mysql_real_escape_string ($_POST['Level2Code']);
	$Level3Code       			= mysql_real_escape_string ($_POST['Level3Code']);
	$Level4Code       			= mysql_real_escape_string ($_POST['Level4Code']);
	$Level5Code       			= mysql_real_escape_string ($_POST['Level5Code']);
	$Level1CodeChangeDate       = mysql_real_escape_string ($_POST['Level1CodeChangeDate']);
		$phpdate = strtotime( $Level1CodeChangeDate  );
		$Level1CodeChangeDate  = date( 'Y-m-d H:i:s', $phpdate );
	$Level2CodeChangeDate       = mysql_real_escape_string ($_POST['Level2CodeChangeDate']);
		$phpdate = strtotime( $Level2CodeChangeDate );
		$Level2CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$Level3CodeChangeDate       = mysql_real_escape_string ($_POST['Level3CodeChangeDate']);
		$phpdate = strtotime( $Level3CodeChangeDate );
		$Level3CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$Level4CodeChangeDate        		= mysql_real_escape_string ($_POST['Level4CodeChangeDate']);
		$phpdate = strtotime( $Level4CodeChangeDate );
		$Level4CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$Level5CodeChangeDate        		= mysql_real_escape_string ($_POST['Level5CodeChangeDate']);
		$phpdate = strtotime( $Level5CodeChangeDate );
		$Level5CodeChangeDate = date( 'Y-m-d H:i:s', $phpdate );
	$WorkNatureCode       		= mysql_real_escape_string ($_POST['WorkNatureCode']);
	$WorkGroupCode       		= mysql_real_escape_string ($_POST['WorkGroupCode']);
	$WorkGroupAuthorizeCode     = mysql_real_escape_string ($_POST['WorkGroupAuthorizeCode']);
	$Note       				= mysql_real_escape_string ($_POST['Note']);
	//$LastModifiedBy       		= mysql_real_escape_string ($_POST['LastModifiedBy']);
	$LastModifiedDate         	= mysql_real_escape_string ($_POST['LastModifiedDate']);
		$phpdate = strtotime( $LastModifiedDate  );
		$LastModifiedDate  = date( 'Y-m-d H:i:s', $phpdate );
	//$TimeStamp       			= mysql_real_escape_string ($_POST['TimeStamp']);

		$cekdata= "select * from employeeoccupation where EmployeeNo='$EmployeeNo'";
		$prosescek= mysql_query($cekdata);
	if (mysql_num_rows($prosescek)>0) {
		$query = "UPDATE employeeoccupation SET EmployeeNo='$EmployeeNo', AbsenteeismNo='$AbsenteeismNo', JoinDate='$JoinDate', EmploymentStatus='$EmploymentStatus', ProbationEndDate='$ProbationEndDate', StartContractDate='$StartContractDate', EndContractDate='$EndContractDate', ContractSequenceNo='$ContractSequenceNo', FirstJoinEmployeeNo='$FirstJoinEmployeeNo',ResignDate='$ResignDate', ResignCode='$ResignCode', ResignRemark='$ResignRemark', GradeCode='$GradeCode', GradeCodeChangeDate='$GradeCodeChangeDate', PositionCode='$PositionCode', PositionCodeChangeDate='$PositionCodeChangeDate', RankCode='$RankCode', RankCodeChangeDate='$RankCodeChangeDate', Level1Code='$Level1Code', Level2Code='$Level2Code', Level3Code='$Level3Code', Level4Code='$Level4Code', Level5Code='$Level5Code', Level1CodeChangeDate='$Level1CodeChangeDate', Level2CodeChangeDate='$Level2CodeChangeDate', Level3CodeChangeDate='$Level3CodeChangeDate', Level4CodeChangeDate='$Level4CodeChangeDate', Level5CodeChangeDate='$Level5CodeChangeDate', WorkNatureCode='$WorkNatureCode', WorkGroupCode='$WorkGroupCode', WorkGroupAuthorizeCode='$WorkGroupAuthorizeCode', Note='$Note', LastModifiedDate='$LastModifiedDate' where EmployeeNo='$EmployeeNo'";
		//echo $query;		
		mysql_query($query);
	}
		else {				 
	}

  header("location:blank.php?pesan=update"); 
?>