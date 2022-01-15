
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Chương trình cộng, trừ, nhân, chia hai phân số</title>
	<style>
		body {
			
		}
		table, tr, td {
			vertical-align: top;
			border: 1px solid #c881ff;
			border-collapse: collapse;
			border-spacing: 0;
			background-color: #cbccff;
		}
		table {
			margin-left: auto;
			margin-right: auto;
			width: 500;
		}
		.property {
			color: #2a19fd;	
		}
		.buttonSubmit {
			height: 20px;
			width: 80px;
			text-align: center;
			border-radius: 15px;
		}
		h3 {
			text-align: center;
			color: blue;
		}
	</style>
</head>
<body>
	<div style="margin-left: auto; margin-right: auto; width: 400px; border: 1px solid black;">
		<h3>Chương trình cộng, trừ, nhân, chia hai phân số</h3>
		<table>
			<form method="POST">
					<td style="width:200px">
						Tử phân số 1 <input type="number" name="tu1" style="width:60px"><br><br>
						Mẫu phân số 1 <input type="number" name="mau1" style="width:60px"><br><br>
						Tử phân số 2 <input type="number" name="tu2" style="width:60px"><br><br>
						Mẫu phân số 2 <input type="number" name="mau2" style="width:60px"><br><br>
						<input class="buttonSubmit" type="submit" name="submit" value="="><br><br>
<?php
	include 'phanso.php';
	if (isset($_POST['tu1']) && isset($_POST['mau1']) && isset($_POST['tu2']) && isset($_POST['mau2'])
		&& isset($_POST['submit']) && isset($_POST['type'])){
		$phanSo_1 = new phanso($_POST['tu1'], $_POST['mau1']);
		$phanSo_2 = new phanso($_POST['tu2'], $_POST['mau2']);
		
		if ($_POST['type'] == "cong"){
			$strKetQua = "Tổng ".$phanSo_1->xuatPhanSo()." + ".$phanSo_2->xuatPhanSo()." = ".($phanSo_1->congPhanSo($phanSo_2))->xuatPhanSo()."<br><br>";
			echo $strKetQua;
		} else if ($_POST['type'] == "tru") {
			$strKetQua = "Hiệu ".$phanSo_1->xuatPhanSo()." - ".$phanSo_2->xuatPhanSo()." = ".($phanSo_1->truPhanSo($phanSo_2))->xuatPhanSo()."<br><br>";
			echo $strKetQua;
		} else if ($_POST['type'] == "nhan") {
			$strKetQua = "Tích ".$phanSo_1->xuatPhanSo()." * ".$phanSo_2->xuatPhanSo()." = ".($phanSo_1->nhanPhanSo($phanSo_2))->xuatPhanSo()."<br><br>";
			echo $strKetQua;
		} else if ($_POST['type'] == "chia") {
			$strKetQua = "Thương ".$phanSo_1->xuatPhanSo()." / ".$phanSo_2->xuatPhanSo()." = ".($phanSo_1->chiaPhanSo($phanSo_2))->xuatPhanSo()."<br><br>";
			echo $strKetQua;
		}
	}
?>
						
					</td>
					<td>
						<fieldset style="width:100px; padding-top:0px;">
							<legend>Phép tính</legend>
							<input type="radio" name="type" value="cong"><label>+</label><br>
							<input type="radio" name="type" value="tru"><label>-</label><br>
							<input type="radio" name="type" value="nhan"><label>*</label><br>
							<input type="radio" name="type" value="chia"><label>/</label>
						</fieldset>		
					</td>
			</form>
		</table>
		<br>
	</div>
<body>
</html>
