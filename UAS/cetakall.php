<?php 
	require 'koneksi.php';
?>
<html>
	<head>
		<title>print</title>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
		<?php 
		
		$sql = mysqli_query($con,"SELECT * FROM data ");
		while($data = mysqli_fetch_array($sql)){
		?>
					<center>
						<p>Data Pemantauan Covid19 wilayah <?php echo $data['nama_wilayah'];?></p>
						<p>per <?php  echo date('d F Y, h:i:s A');?></p>
						<p><?php  echo $data['nama_operator'];?> / <?php echo $data['nim_mahasiswa'];?></p>
					</center>
					<table  border="1" style="width:100%;">
						<tr>
							<td><center><b>Positif</b></center></td>
							<td><center><b>Dirawat</b></center></td>
							<td><center><b>Sembuh</b></center></td>
							<td><Center><b>Meninggal</b></Center></td>
						</tr>
						
							<td><center><?php echo $data['jumlah_positif'];?></center></td>
							<td><center><?php echo $data['jumlah_dirawat'];?></center></td>
							<td><center><?php echo $data['jumlah_sembuh'];?></center></td>
							<td><center><?php echo $data['jumlah_meninggal'];?></center></td>
						</tr>
					</table>
				<?php
			}
			?>
		</div>
	</body>
</html>
