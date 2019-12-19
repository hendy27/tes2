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
			// //$data    = new Spreadsheet_Excel_Reader($_FILES['namafile']['name'],false);
			$nobaris=0;
			// $baris = $Reader->rowcount($sheet_index=0);
            foreach ($Reader as $row){   
				echo json_encode($row);
				$id 		= $row [0];
				$nama 		= $row[1];
				$username 	= $row[2];
				$password	= $row[3];
				
				if ($nobaris > 0) {
					$query = "select * from user where nama = '$nama'";
					$result = mysql_query($query);										
					
					if($result === false) {
					   echo "error";
					}
					else{
						$rows = mysql_num_rows($result);
						if ($rows==0 ){
							$query = "INSERT INTO user (nama, username, password) VALUES('$nama','$username','$password')";
							$result = mysql_query($query);
						}
						else{
							$query = "UPDATE user SET nama='$nama',username='$username',password='$password' WHERE nama='$nama'";
							$result = mysql_query($query);
						}
					}
					if($result){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD FILE';
					}
				}
				$nobaris++;
			}
			
			// for ($i=2; $i<=$baris; $i++){  
				// $id 			= $data->val($i, 1);
				// $nama 		= $data->val($i, 2);
				// $username 	= $data->val($i, 3);
				// $password 	= $data->val($i, 4);
				// mysql_query("INSERT INTO user VALUES('id','$nama','$username','$password')");				
			// }   
			// unlink($_FILES['namafile']['name']);
		}
?>
