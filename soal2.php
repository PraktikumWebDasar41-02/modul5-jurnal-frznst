<?php
include 'conn.php';
session_start();
$nama= $_SESSION['nama'];
$nim= $_SESSION['nim'];
if (isset($_POST['submit'])) {
	$komen=$_POST['komen'];
	mysqli_query($conn,"UPDATE t_jurnal1 SET komentar='$komen'  WHERE `nim` = '$nim' ");;
	echo"<script>alert('komentar anda ditambahkan')</script>";
	header("location:soal3.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<table>
		<tr><td><?php echo $nama." (".$nim.")" ?></td></tr>
		<tr><td><textarea cols="30" rows="10" placeholder="masukan komentar" name="komen"></textarea></td></tr>
		<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
</form>


</body>
</html>