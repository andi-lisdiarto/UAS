# UAS

Repository Jawaban UAS Mata Kuliah Pemrogramman Web 2 kelas 06TPLM001
APLIKASI DATA PASIEN COVID-19
Disusun oleh kelompok 1 :
1.	181011402436	ADITYA TRI HERDIANSYAH
2.	181011402236	AENUN NISA
3.	171011402192	AHMAD AHSAM ROZAQ
4.	161021450504	AHMAD MULYADI
5.	171011401151	AKBAR PRIANTO
6.	181011402263	ANDI LISDIARTO
7.	181011402365	ANGGIT PRASTIKA SETIANY
8.	171011401801	ARDIAN RIZKY RAMADHANI

Berikut link website Aplikasi Data Pasien Covid-19 : https://uaspemrogramanwebkelompok1.000webhostapp.com/
Username	: kelompok_1
Password	: admin

Pembuatan Aplikasi Data Pasien Covid-19 ini bertujuan untuk memenuhi UAS kami pada mata kuliah Pemrograman Web 2 , dan dosen pengampu yaitu Bapak Sonasa Rinusantoro S.Kom., M.A., terimakasih kami ucapkan kepada bapak dosen, karena atas bimbingan nya selama perkuliahan online di semester 6 ini kami dapat membuat aplikasi yang bermanfaat seperti ini dengan menggunakan bahasa pemrograman PHP dan basis data menggunakan MySql. Semoga kami dapat mengembangkan aplikasi sederhana ini nanti nya.

Aplikasi Data Pasien Covid-19 ini untuk menangani data-data pasien covid -19 di 34 Provinsi di Indonesia. Sistem aplikasi ini adalah web base yang dikembangkan dengan menggunakan bahasa pemrograman PHP, HTML,CSS, JavaScript , ditambahkan framework Bootstrap dan basis data dengaan MySQL. Aplikasi ini menerapkan operasi operasi CRUD (Create, Read, Update, dan Delete) dengan bahasa PHP dan menyimpan database di MySQL.

Berikut fungsi PHP dari setiap fitur Aplikasi Data Data Pasien Covid-19 :
1.	Index.php
Index.php ini merupakan tampilan halaman website setelah user berhasil login. Pada halamain ini menampilkan data pasien covid-19 dari setiap provinsi di Indonesia, data nya meliputi Nama Wilayah, Jumlah Postif, Jumlah  Dirawat, Jumlah Sembuh, Jumlah Meninggal, dengan keterangan Nama Operator dan Nim Mahasiswa sebagai operator.
Pada halaman ini juga, kita dapat melakukan entri data pasien, edit data , menghapus data dan mencetak data pasien dari masing-masing provinsi. Serta kolom pencarian untuk memudahkan user mencari data.

2.	koneksi.php
koneksi.php berfungsi untuk mengkoneksikan atau mengubungkan form dengan database MySQL, sehingga user dapat melakukan operasi CRUD. Dengan menggunakan fugsi mysqli_connect(), yang didalamnya terdapat komponen host, nama database, username dan password.

3.	login.php
login.php merupakan tampilan halaman login. Dimana terdapat 2 field yaitu Username dan Password. Fungsinya yaitu untuk masuk kedalam halaman index.php. Dimana padahalaman ini, terdapat hak akses user, dapat dikatakan bahwa hanya member yang terdaftar pada table users saja yang dapat meng akses halaman ini. Pada menu ini terdapat sebuah menu Link Regidter , dimana user baru yang belum terdaftar dapat mendaftar di website ini.

4.	register.php
register.php merupakan tampilan halaman yang berfungsi untuk para user baru mendaftar pada website ini. Sebelum para user baru melakukan login, para user baru harus membuat akun dahulu, dengan memasukan data mereka di menu register ini.

5.	style.css
pada file ini berisi tentang kode untuk membuat tampilan halaman website menjadi lebih menarik.

6.	tambah.php
tambah.php ini berfungsi untuk menambahkan data jumlah pasien covid-19. Didalam nya terdapat tampilan form data pemantauan covid-19 berupa Nama Wilayah, Jumlah Postif, Jumlah  Dirawat, Jumlah Sembuh, Jumlah Meninggal, dengan keterangan Nama Operator dan Nim Mahasiswa sebagai operator. Dan terdapat  <form method="post" action="simpan.php" > untuk menghubungkan ke fungsi simpan , dengan tujuan menyimpan data yang ingin ditambahkan ke dalam database MySQL.
 
7.	simpan.php
simpan.php ini berfungsi untuk menyimpan data, terdapat fungsi $input = "INSERT INTO data VALUES(NULL, '$nama_wilayah', '$jumlah_positif', '$jumlah_dirawat', '$jumlah_sembuh', '$jumlah_meninggal', '$nama_operator', '$nim_mahasiswa')";
dimana fungsi tersebut untuk menyompdat data ke dalam database ditambah dengan fungsi  include('koneksi.php');, yang menghubungkan ke database MySQL.

8.	editform.php
editform.php ini berfungsi untuk menampilkan form ubah data, yang bertujuan untuk mengubah data yang sudah diinput  sebelumnya dan memperbaharui data. Terdapat sintax <form method="get" action="edit.php"> yang menghubungkan fungsi ke edit.php

9.	edit.php
edit.php ini berfungsi untuk mengubah data pasien covid-19 yang sudah diinput dan memperbaharui data yang terdapat didalam database MySQL dengan data yang diinput pada formedit. Didalam nya terdapat fungsi php $query = "UPDATE data SET nama_wilayah='$nama_wilayah' , jumlah_positif='$jumlah_positif' , jumlah_dirawat='$jumlah_dirawat' , jumlah_sembuh='$jumlah_sembuh', jumlah_meninggal='$jumlah_meninggal', nama_operator='$nama_operator', nim_mahasiswa='$nim_mahasiswa' WHERE id='$id' ";

10.	delete.php
hapus.php berfunsgi untuk menghapus data covid-19 yang terdapat pada tampilan data. Terdapat sintax $query = "DELETE FROM data WHERE id = '$id' "; yang berfungsi untuk mengkoneksikan ke database MySQL bahwa data tersebut dihapus.

11.	cetak.php
cetak.php adalah file yang digunakan untuk mencetak data pasien covid-19 pada masing-masing provinsi. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website. File dokemen hasil cetak dalam format PDF.

12.	cetakall.php
cetakall.php adalah file yang digunakan untuk mencetak semua data pasien covid-19 yang terdapat di dalam database. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website. File dokemen hasil cetak dalam format PDF.

13.	logout.php
Logout.php adalah file yang digunakan untuk proses keluar dari program aplikasi. Logout ini untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Terdapat sintax session_destroy(); yang berfungsi untuk  menghapus semua session data di server. Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.

