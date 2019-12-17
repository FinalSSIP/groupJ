<?php
session_start();
include 'cek.php';
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- (meta) agar halaman bisa responsive -->
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KIOS MASA DEPAN</title> 

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/css/admin.css">
</head>
<body>
<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">KIOS MASA DEPAN</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> 	
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hy , <?php echo $_SESSION['uname']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- untuk menampilkan pesan notifikasi untuk stok bbarang yang kurang -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>
				<div class="modal-body">
					<?php 
					$periksa=mysql_query("select * from barang where jumlah <=3");
					while($q=mysql_fetch_array($periksa)){	
						if($q['jumlah']<=3){			
							echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";	
						}
					}
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>

  		<aside class="sidebar sidebar-collapse ">
			<div class="menu">
				<ul class="menu-content">
					<li>
						<a href="Dashboard.php"><i class="fa fa-home"></i><span> Dashboard</span></a>

					<li>
						<a href="barang.php"><i class="fa fa-cubes" ></i><span> Barang</span></a>
					</li>
					<li>
						<a href="barang_laku.php"><i class="fa fa-shopping-cart"></i><span> Penjualan</span></a>
					</li>
					<li>
						<a href="logout.php" >	
						<i class="fa fa-sign-out" ></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</aside>
	
	<!-- jquary.min.js wajib ada ,agar bootrstrap.min.js bisa bekerja -->
	<script src="dist/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="dist/js/admin.js"></script>
</body>
</html>
