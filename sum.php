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
		$bil3 = $_POST['bil3'];
		$bil4 = $_POST['bil4'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'sum':
			$hasil = ($bil1/$bil2)*($bil3-$bil4);
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul"><u>Sum Of The Year</u></h2>
		<form method="post" action="sum.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Sisa Masa Manfaat">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Jumlah Angka Tahunan">
			<input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Biaya Perolehan">
			<input type="text" name="bil4" class="bil" autocomplete="off" placeholder="Nilai Residu">
			<select class="opt" name="operasi">
				<option value="sum">Sum Of The Year</option>
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