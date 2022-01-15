<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tính diện tích và chu vi hình chữ nhật</title>
	<style>
		body {
		
		}
		
		table, tr, td {
			border: 1px solid blue;
			border-collapse: collapse;
			border-spacing: 0;
		}
		
		table {
			margin-left: auto;
			margin-right: auto;
			background-color: #ca9998;
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
	<h1>Tính diện tích và chu vi hình chữ nhật</h1>
	<form method="GET">
		<table>
			<tr>
				<td class="property">Chiều dài</td>
				<td><input type="input" name="chieudai"></td>
			</tr>
			<tr>
				<td class="property">Chiều rộng</td>
				<td><input type="input" name="chieurong"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input class="buttonSubmit" type="Submit" value="Tính" name="submit">
					</center>
				</td>
			</tr>
		</table>
	</form>
<?php
	if(isset($_GET['submit'])&&($_GET['submit']=="Tính")) {
		$dai= $_GET['chieudai'];
		$rong= $_GET['chieurong'];
		
		$dientich= (float)$dai * (float)$rong;
		$chuvi = ((float)$dai+(float)$rong)*2;
		
		echo "<div class='result'>";
		echo "Diện tích: ".$dientich."<br>";
		echo "Chu vi: ".$chuvi;
		echo "</div>";
	}
?>
<body>
</html>