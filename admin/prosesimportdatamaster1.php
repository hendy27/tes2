<?php
        include '../config.php';
		require ("../library/php-excel-reader/excel_reader2.php");
		require ("../library/SpreadsheetReader.php");

		session_start();

		if($_SESSION['status'] !="login"){
			header("location:../index.php");
		}
		
		if ($_POST['upload'] == "upload") {
			
			$target = basename($_FILES['namafile']['name']) ;
			move_uploaded_file($_FILES['namafile']['tmp_name'], $target);
			
			$Reader = new SpreadsheetReader($target);
			
			$nobaris=0;
			
            foreach ($Reader as $row){   
				echo json_encode($row);
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
					$query = "select * from employeemaster where FullName = '$FullName'";
					$result = mysql_query($query);
					
					if($result){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD FILE';
					}
					
					if($result === false) {
					   echo "error";
					}
					else{
						$rows = mysql_num_rows($result);
						if ($rows==0 ){
							$query = "INSERT INTO employeemaster (FullName, BirhtPlace, BirthDate, Gender, MaritalStatus, NationalityCode, PersonalEmail, Note, LastModifiedBy, $LastModifiedDate) VALUES('$FullName','$BirhtPlace','$BirthDate','$Gender','$MaritalStatus','$NationalityCode','$PersonalEmail','$Note','$LastModifiedBy','$LastModifiedDate')";
							$result = mysql_query($query);
						}
						else{
							$query = "UPDATE employeemaster SET FullName='$FullName',BirhtPlace='$BirhtPlace',BirthDate='$BirthDate',Gender='$Gender',MaritalStatus='$MaritalStatus',NationalityCode='$NationalityCode',PersonalEmail='$PersonalEmail',Note='$Note',LastModifiedBy='$LastModifiedBy',LastModifiedDate='$LastModifiedDate' WHERE FullName='$FullName'";
							$result = mysql_query($query);
						}
					}
				}
				$nobaris++;
			}						
		}
?>
