<?php
include 'conn.php';
session_start();
	if (isset($_POST['submit'])) {
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$email=$_POST['email'];
		if ($nama==""||$nim==""||$email=="") {
			 echo"<script>alert('Fiel tidak boleh kosong')</script>";
		}
		else
		{
	
			if (strlen(trim($nama," "))>20) {
				 echo"<script>alert('nama tidak boleh lebih 20 karakter')</script>";
			}
			if (strlen(trim($nim," "))>10) {
				 echo"<script>alert('nim tidak boleh lebih 10 karakter')</script>";
			}
			else{
				$_SESSION['nim']= $nim;
				$_SESSION['nama']= $nama;
				mysqli_query($conn,"INSERT INTO t_jurnal1(nama,nim,email) VALUES('$nama','$nim','$email')");
				echo"<script>alert('anda sudah terdaftar')</script>";
				header("location:soal2.php");
			}

			}
		


		}

	


?>


<!DOCTYPE html>
<html>
<head>
	<title>soal1</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr><td>Masukan nama </td><td><input type="text" name="nama"></td></tr>
			<tr><td>Masukan nim </td><td><input type="text" name="nim"></td></tr>
			<tr><td>Masukan email</td><td><input type="email" name="email"></td>
			<tr><td><input type="submit" name="submit" value="submit"> </td></tr>


		
		</table>


	</form>
	
</body>
</html>

