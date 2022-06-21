<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Nilai Redunsi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];

		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'reducing':
				$hasil = 2*$bil1*$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul"><u>Reducing Balance</u></h2>

		<form method="post" action="reducing.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Persentase Metode Garis Lurus">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Nilai Buku">
			<select class="opt" name="operasi">
				<option value="reducing">Reducing</option>
				<!-- <option value="sum">Sum</a></option>
				<option value="activity">Unit Of Activity</option>
				<option value="reducing">Reducing Balance</option> -->
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>