<?php
	require_once("connectionbasdat.php"); //input koneksi dari file connection.php
	$nama = $_POST['InputName'];
	$email = $_POST['InputEmail'];
	$saran = $_POST['InputMessage'];


	//buat variabel baru $simpan untuk menyimpan (INSERT INTO)
	$nyimpan = mysqli_query($connect, "INSERT INTO formfeedback(nama,email,feedback) VALUES ('$nama','$email','$saran')");
	
	if ($nyimpan){
		echo "<script> alert ('feedback telah terkirim');  location='index.php#feedback' </script>";
	}else{
		echo "<script> alert ('maaf, anda belum pernah berdonasi :)'); location ='index.php'</script>";
	}

?>