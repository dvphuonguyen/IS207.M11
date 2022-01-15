<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tính số ngày</title>
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
		}
		
		.property {
			color: black;
			font-size: 20px;	
		}
		
		.buttonSubmit {
			height: 30px;
			
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
				<td class="property">Ngày</td>
				<td><input type="input" name="ngay"></td>
			</tr>
			<tr>
				<td class="property">Tháng</td>
				<td><input type="input" name="thang"></td>
			</tr>
			<tr>
				<td class="property">Năm</td>
				<td><input type="input" name="nam"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input class="buttonSubmit" type="Submit" value="Tổng" name="submit">
					</center>
				</td>
			</tr>
		</table>
	</form>
<?php
	function KTNN($nam){
		if ((($nam % 4 == 0) && ($nam % 100!= 0)) || ($nam%400 == 0))
			return true;
		return false;
	}
 
	if(isset($_GET['submit']) && ($_GET['submit']=="Tổng")) {
		$ngay= (int)$_GET['ngay'];
		$thang= (int)$_GET['thang'];
		$nam= (int)$_GET['nam'];
		
		$list_ngay_cua_thang = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
		if(KTNN($nam)) $list_ngay_cua_thang[2] = 29;
		
		$s = $ngay;
		for($i=1; $i < $thang; $i++) {
			$s += $list_ngay_cua_thang[$i];
		}
		
		echo "<div class='result'>";
		echo "Tổng số ngày từ đầu năm:".$s."<br>"; 
		echo "</div>";
 }

?>
<body>
</html>