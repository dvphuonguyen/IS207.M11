<?php
	if (isset($_POST['tendangnhap']) && isset($_POST['matkhau']) && $_POST['tendangnhap'] == "Mai Tuấn" && $_POST['matkhau'] == "12345"){

echo <<<END
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bảng điểm của Tuấn</title>
	<style>
		
		table, tr, td {
			border: 1px solid #fc9c09;
			border-collapse: collapse;
			border-spacing: 0;
		}
		
		table {
			background-color: #fecd92;
		}
		
		a {
			font-style: italic;
		}
	</style>
</head>
<body>
	<div style="font-size: 25px; color: #09006a;">BẢNG ĐIỂM</div>
	<div style="font-size: 15px; color: #240bff;">Tên: Mai Tuấn</div>

	<table>
		<tr>
			<td class="property">STT</td>
			<td>Tên môn</td>
			<td>Điểm</td>
		</tr>
		<tr>
			<td class="property">1</td>
			<td>Cơ sở dữ liệu</td>
			<td>7</td>
		</tr>
		<tr>
			<td class="property">2</td>
			<td>Phát triển ứng dụng web</td>
			<td>8</td>
		</tr>
		<tr>
			<td class="property">3</td>
			<td>Lập trình Java</td>
			<td>7.5</td>
		</tr>
	</table>
	<br>
	<a href="https://hungphu.tk">Xem thông tin sinh viên</a>
<body>
</html>
END;

	} else {
		header("Location: ./dangnhap.php");
	}
?>