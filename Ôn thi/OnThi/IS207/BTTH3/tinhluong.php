<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tính lương</title>
	<style>
		
		table, tr, td {

		}
		
		table {
			border: 1px solid black;
			background-color: #fc9a00;
		}
		
		.butonSubmit {
			border-radius: 15px;
		}
		
	</style>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td class="property">Mã nhân viên</td>
				<td><input type="input" name="maNV"></td>
			</tr>
			<tr>
				<td class="property">Tên nhân viên</td>
				<td><input type="input" name="tenNV"></td>
			</tr>
			<tr>
				<td class="property">Số ngày làm việc</td>
				<td><input type="input" name="soNgay"></td>
			</tr>
			<tr>
				<td class="property">Lương ngày</td>
				<td><input type="input" name="luongNgay"></td>
			</tr>
			<tr>
				<td class="property">Nhân viên quản lý</td>
				<td><input type="checkbox" name="nhanvienQL"></td>
			</tr>
			<tr>
				<td><input class="butonSubmit" type="submit" name="submit" value="Lương tháng"></td>
			</tr>
		</table>
	</form>
	<?php
		include 'nhanvienQL.php';
		
		if (isset($_POST['maNV']) && isset($_POST['tenNV']) && isset($_POST['soNgay']) && isset($_POST['luongNgay'])){
			$maNV = $_POST['maNV'];
			$tenNV = $_POST['tenNV'];
			$soNgay = $_POST['soNgay'];
			$luongNgay = $_POST['luongNgay'];
			$newNV = null;
			if (isset($_POST['nhanvienQL'])){
				$newNV = new nhanvienQL();
			} else {
				$newNV = new nhanvien();
			}
			$newNV->Gan($maNV, $tenNV, $soNgay, $luongNgay);
			$luongNV = $newNV->TinhLuong();
			$newNV->InNhanVien();
			echo "Lương nhân viên: ".$luongNV;
		}
	?>
</body>
</html>
