<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Hình lập phương</title>
</head>
</head>
<body>
<form method="GET" action="#">
 Chiều dài: <input type="input" name="chieudai"><br><br>
 Chiều rộng: <input type="input" name="chieurong"><br><br>
 Chiều cao: <input type="input" name="chieucao"><br><br>
 <input type="submit" value="Tính" name="submit">
</form>
</body>
<?php
	if(isset($_GET['submit'])&&($_GET['submit']=="Tính")) {
		$dai = (float)$_GET['chieudai'];
		$rong = (float)$_GET['chieurong'];
		$cao = (float)$_GET['chieurong'];
		
		include "HinhLapPhuong.php";
		
		$h1 = new HinhLapPhuong($dai, $rong, $cao);
		
		$dientich = $h1->DienTich();
		$thetich = $h1->TheTich(); 
		
		echo "Diện tích:".$dientich."<br>";
		echo "Thể tích:".$thetich;
	}
?>