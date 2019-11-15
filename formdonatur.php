<?php
	require_once("connectionbasdat.php"); //input koneksi dari file connection.php
	$nama = $_POST['nama'];
	$tanaman = $_POST['tanaman'];
	$email = $_POST['email'];
	$donasi = $_POST['donasi'];
	$lokasi = $_POST['lokasi'];

	//buat variabel baru $simpan untuk menyimpan (INSERT INTO)
	$nyimpan = mysqli_query($connect, "INSERT INTO formdonatur(nama,email,besardonasi,lokasitanam,jenistanaman) VALUES ('$nama','$email','$donasi','$lokasi','$tanaman')");
	
	if ($nyimpan){
		echo "<script> alert ('terima Kasih atas donasi anda :)');  location='index.php#rekening' </script>";
	}else{
		echo "<script> alert ('harap input kembali data anda'); location ='index.php'</script>";
	}

?>