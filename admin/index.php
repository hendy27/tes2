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
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                    </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
						<?php
						echo "Selamat datang ". $_SESSION['username'];
						?>
                        </div>                    
                    </div>
                </div>					 
                <div class="row">
                <div class="col-lg-6 col-md-6=6">
                    <a href='tambah.php'> Tambah </a> | 
                    <a href='formimport.php'> Import Data </a> 
                    <table class="table table-striped table-bordered table-hover">     
                    <tr>         
                        <th> ID </th>        
                        <th> Nama </th>          
                        <th> Username </th>
                        <th> Action </th>		
                    </tr>      
                    <?php  
                        $select = "SELECT * FROM user";
                        $query = mysql_query($select); 					   
                        while ($data = mysql_fetch_array($query)) {
                            $id         = $data['id'];  
                            $nama       = $data['nama'];
                            $username   = $data['username'];            
                            echo "                
                        <tr>                     
                        <td> $id </td>                     
                        <td> $nama </td>                     
                        <td> $username </td>                                         						
                        <td> <a href='edit.php?id=$id'> Edit </a> | 																						
                            <a href='hapus.php?id=$id' onClick=\"return confirm('Are you sure want to delete ?')\">Delete</a>
                            </td>							
                        </tr> 
                            ";
                        }				 
                    ?>
                    </table>           
                </div>
                </div>
                <div class="row">
                </div>
                <div class="footer">          
                <div class="row">
                <div class="col-lg-12" >
                    &copy; | Design by: <a href="#" style="color:#fff;" target="_blank">##</a>
                </div>
                </div>
                </div>          
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>      
</body>
</html>
