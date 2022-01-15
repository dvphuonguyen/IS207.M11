<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Hình chữ nhật</title>
</head>
</head>
<body>
<form method="GET" action="#">
 Chiều dài: <input type="input" name="chieudai"><br><br>
 Chiều rộng: <input type="input" name="chieurong"><br><br>
 <input type="submit" value="Tính" name="submit">
</form>
</body>
<?php
	if(isset($_GET['submit'])&&($_GET['submit']=="Tính")) {
		$dai = (float)$_GET['chieudai'];
		$rong = (float)$_GET['chieurong'];
		
		include "HinhChuNhat.php";
		
		$h1 = new HinhChuNhat($dai, $rong);
		
		$dientich = $h1->DienTich();
		$chuvi = $h1->ChuVi(); 
		
		echo "Diện tích:".$dientich."<br>";
		echo "Chu vi:".$chuvi;
	}
?>