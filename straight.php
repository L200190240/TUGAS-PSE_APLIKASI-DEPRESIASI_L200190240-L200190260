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
		// $bil4 = $_POST['bil4'];
		// $bil5 = $_POST['bil5'];

		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'straight':
				$hasil = ($bil1-$bil2)/$bil3;
			break;
			// case 'sum':
			// 	$hasil = ($bil1-$bil2)*$bil3;
			// break;
			// case 'activity':
			// 	$hasil = ($bil1-$bil2)/$bil3;
			// break;
			// case 'reducing':
			// 	$hasil = ($bil1-$bil2)-(($bil3-$bil4)*$bil5);
			// break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul"><u>Straight Line</u></h2>	
		<form method="post" action="straight.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Biaya Perolehan">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Nilai Residu">
			<input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Masa Manfaat(Umur Ekonomis)">
<!-- 			<input type="text" name="bil4" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Keempat">
			<input type="text" name="bil5" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kelima"> -->
			<select class="opt" name="operasi">
				<option value="straight">Straight</option>
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