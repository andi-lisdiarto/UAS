<?php

 if(isset($_POST['simpan'])){
     header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid bg-light" style="height:90vh">
  <div class="container">

    <h1 align="center"><b>FORM DATA PEMANTAUAN COVID-19</b></h1>
        <div class="content">
        <form method="post" action="simpan.php" >
        <table>
            <tr><td><b> Nama Wilayah </b></td><td>
                <select name="nama_wilayah">

                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="DIYogjakarta">DIYogyakarta</option>
                    <option value="Bali">Bali</option>
                    <option value="NTT">NTT</option>
                    <option value="NTB">NTB</option>
                    <option value="Irian Jaya">Irian Jaya</option>
                    <option value="Papua">Papua</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Maluku Barat">Maluku Barat</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sulawesi Barat">Selawesi Barat</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Aceh">Aceh</option>
                    <option value="Sumatra Utara">Sumatra Utara</option>
                    <option value="Riau">Riau</option>
                    <option value="Sumatra Selatan">Sumatra Selatan</option>
                    <option value="Lampung">Lampung</option>

                </select>
            </td></tr>
            <tr><td><b> Jumlah Positif </b></td><td><input type="text" name="jumlah_positif"></td></tr>
            <tr><td><b> Jumlah Dirawat </b></td><td><input type="text" name="jumlah_dirawat"></td></tr>
            <tr><td><b> Jumlah Sembuh  </b></td><td><input type="text" name="jumlah_sembuh"></td></tr>
            <tr><td><b> Jumlah Meninggal </b></td><td><input type="text" name="jumlah_meninggal"></td></tr>
            <tr><td><b> Nama Operator </b></td><td><input type="text" name="nama_operator"></td></tr>
            <tr><td><b> NIM Mahasiswa </b></td><td><input type="text" name="nim_mahasiswa"></td></tr>
            <tr><td colspan="5"><button type="submit" name="simpan" value="simpan" style="margin-left:2pc;">Simpan</button>
            <a href="index.php" style="margin-left:2pc;">Kembali</a></td></tr>

        </table>
    </div>
    </form>
  </div>
</div> 
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>
</html>
