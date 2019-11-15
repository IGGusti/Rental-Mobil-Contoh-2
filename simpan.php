<?php
	require_once("connectionbasdat.php"); //input koneksi dari file connection.php
	$nama = $_POST['nama'];
	$tanaman = $_POST['tanaman'];
	$email = $_POST['email'];
	$donasi = $_POST['donasi'];


	//buat variabel baru $simpan untuk menyimpan (INSERT INTO)
	$nyimpan = mysqli_query($connect, "INSERT INTO formdonatur(nama,email,besardonasi,jenistanaman) VALUES ('$nama','$email','$donasi','$tanaman')");
	
	if ($nyimpan){
		echo "<script> alert ('data telah dimasukkan'); location='index.php'</script>";
	}else{
		echo "<script> alert ('proses gagal'); location ='index.php'</script>";
	}

?>