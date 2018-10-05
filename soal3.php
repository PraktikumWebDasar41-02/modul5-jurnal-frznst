<?php
include("conn.php");
session_start();

$nim= $_SESSION['nim'];
echo $nim;
$data=mysqli_query($conn,"SELECT * from t_jurnal1 where nim='$nim'");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$no=1;
    while($hasil=mysqli_fetch_array($data)){ 
        $no++;
        echo $hasil['nim']."<br>";
        echo $hasil['nama']."<br>";
        echo $hasil['email']."<br>";
        echo $hasil['komentar']."<br>";
    }
    session_destroy();
    ?>


</body>
</html>