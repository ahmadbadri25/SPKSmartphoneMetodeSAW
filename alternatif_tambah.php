<!-- <?php  
// session_start();
//     if ($_SESSION['username'] == null || $_SESSION['password'] == null) {
//         echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
//         exit;
//     }
    // include "koneksi.php";
?> -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sistem Pendukung Keputusan SAW</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">SPK SMARTPHONE 

                </a>
            </div>

            <div class="notifications-wrapper">
              
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/adam.jpg" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> SPK TUGAS </strong></a>
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="alternatif.php"><i class="fa fa-venus "></i>Alternatif</a>
                        
                    </li>
                    
                    <li>
                        <a href="kriteria.php"><i class="fa fa-bolt "></i>Kriteria</a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="subkriteria.php"><i class="fa fa-code "></i>Sub Kriteria</a>
                    </li>
                   
                    <li>
                        <a href="normalisasi.php"><i class="fa fa-dashcube "></i>Normalisasi</a>
                    </li>
                    <li>
                        <a href="perhitungan.php"><i class="fa fa-dashcube "></i>Perhitungan</a>
                    </li>
                    <li>
                        <a href="kesimpulan.php"><i class="fa fa-dashcube "></i>Kesimpulan</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Tambah Alternatif</h1>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Tambah Alternatif
                        </div>
                        <div class="panel-body">
                       <form action="alternatif_tambah.php" method="post" name="form1">
                        <fieldset>
                        <div class="form-group">
                        <label for="">Id</label>
                        <input type="text" class="form-control" name="id_hp" placeholder="Id" />
                      </div>
                      <div class="form-group">
                        <label for="">Merek Smartphone</label>
                        <input type="text" class="form-control" name="merk_hp" placeholder="Merek Smartphone" />
                      </div>
                      <div class="form-group">
                        <label for="">Tahun Keluaran</label>
                        <input type="text" class="form-control" name="thn_hp" placeholder="Tahun Keluaran" />
                      </div>
            </fieldset>
                      <input type="submit" name="input" value="Submit" class="btn btn-primary btn-sm">
                      
                               
                           </form>
                            </div>
                            </div>
                            
                    </div> -->
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
                           Form Tambah Alternatif
                        </div>
                        <div class="panel-body">
                    <form action="alternatif_tambah.php" method="post" name="form1">
                        <table width="25%" border="0">
                            <div class="form-group">
                                <label>Id</label>
                                <input type="text" class="form-control" name="idhp" placeholder="Id" />
                            </div>
                            <div class="form-group">
                                <label>Merek Smartphone</label>
                                <input type="text" class="form-control" name="merk_hp" placeholder="Merek Smartphone" />
                            </div>
                            <div class="form-group">
                                <label>Tahun Keluaran</label>
                                <input type="text" class="form-control" name="thn_hp" placeholder="Tahun Keluaran" />
                            </div>
                            <!-- <tr> 
                                <td>Id</td>
                                <td><input type="text" name="id_hp"></td>
                            </tr> -->
                            <!-- <tr> 
                                <td>Merek Smartphone</td>
                                <td><input type="text" name="merk_hp"></td>
                            </tr>
                            <tr> 
                                <td>Tahun Keluaran</td>
                                <td><input type="text" name="thn_hp"></td>
                            </tr> -->
                            <tr> 
                                <td></td>
                                <td><input type="submit" name="Submit" value="Add" class="btn btn-primary btn-sm"></td>
                            </tr>
                        </table>
                    </form>
    </div>
                    <?php
                 
                    // Check If form submitted, insert form data into users table.
                    if(isset($_POST['Submit'])) {
                        $ids = $_POST['idhp'];
                        $merek = $_POST['merk_hp'];
                        $thn = $_POST['thn_hp'];
                        
                        // include database connection file
                        include_once("koneksi.php");
                                
                        // Insert user data into table
                        $result = mysqli_query($conn, "INSERT INTO alternatifhp(idhp,merk_hp,thn_hp) VALUES('$ids','$merek','$thn')");
                        
                        // Show message when user added
                        echo "Data added successfully. <a href='alternatif.php'>View Alternatif</a>";
                    }
                    ?>
            <!-- /. PAGE INNER  -->
        </div>
    </div>
        </div>
    </div>
<footer>
	&copy; 2023 Universitas Indraprasta PGRI | By : <a href="#" target="_blank">SPK TUGAS Pemrogaman Web Lanjut</a>
</footer>
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>