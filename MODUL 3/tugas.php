<html>
<head>
<title>Program Penjumlahan</title>
</head>
<body>
<form method='POST' action='tugas.php'>
Nilai A adalah <input type='number' name='nilai1' size='20' value="<?php echo $_POST['nilai']?>"required></br>
Nilai B adalah <input type='number' name='nilai2' size='20' value="<?php echo $_POST["nilai2"]?>"required></br>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$a= $_POST['nilai1'];
$b=$_POST['nilai2'];
$submit=$_POST['jalankan'];
$penjumlahan=$a+$b;
	echo "</br>Nilai A adalah $a";
	echo "</br>Nilai B adalah $b";
	echo "</br>Jadi Nilai A ditambah Nilai B adalah $penjumlahan";
?>
<br><input type='submit' name='jumlakan' value='Jumlahkan'>
</form>
</body>
</html>
