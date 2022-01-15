<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập hệ thống xem điểm</title>
	<style>
		body {
		
		}
		
		table, tr, td {

		}
		
		table {
			margin-left: auto;
			margin-right: auto;
			width: 500px;
		}
		
		.property {
			color: black;
			font-size: 20px;	
		}
		
		.buttonSubmit {
			height: 30px;
			border-radius: 15px;
		}
		
		h1 {
			text-align: center;
			color: #2312ff;
		}
		
		.result {
			text-align: center;
			padding-top: 20px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>Đăng nhập hệ thống xem điểm</h1>
	<form method="POST" action="bangdiem.php">
		<table>
			<tr>
				<td class="property">Tên đăng nhập</td>
				<td><input type="input" name="tendangnhap"></td>
			</tr>
			<tr>
				<td class="property">Mật khẩu</td>
				<td><input type="input" name="matkhau"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input class="buttonSubmit" type="submit" value="Đăng nhập" name="submit">
					</center>
				</td>
			</tr>
		</table>
	</form>
<body>
</html>