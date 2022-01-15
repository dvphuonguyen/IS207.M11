<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Giải phương trình bậc 2</title>
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
	<h1>Giải phương trình bậc 2</h1>
	<form method="GET">
		<table>
			<tr>
				<td class="property">Hệ số a</td>
				<td><input type="input" name="a"></td>
			</tr>
			<tr>
				<td class="property">Hệ số b</td>
				<td><input type="input" name="b"></td>
			</tr>
			<tr>
				<td class="property">Hệ số c</td>
				<td><input type="input" name="c"></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<input class="buttonSubmit" type="submit" value="Giải" name="submit">
					</center>
				</td>
			</tr>
		</table>
	</form>
<?php
 
	function giaiPhuongTrinhBac2($a, $b, $c) {
		echo "Phương trình: " . $a . "x^2 + " . $b . "x + " . $c . " = 0";
		echo "<br>";
		
		if ($a == 0) {
			if ($b == 0)
				return "Phương trình vô nghiệm!";
			else 
				return "Phương trình có một nghiệm: x = ".(- $c / $b);
		}
		
		$delta = $b * $b - 4 * $a * $c;
		$x1 = 0;
		$x2 = 00;

		if ($delta > 0) {
			$x1 = (- $b + sqrt ($delta)) / (2 * $a);
			$x2 = (- $b - sqrt ($delta)) / (2 * $a);
			return "Phương trình có 2 nghiệm: x1 = ".$x1." và x2 = ".$x2;
		} else if ($delta == 0)
			return "Phương trình có nghiệm kép: x1 = x2 = ".(- $b / (2 * $a));
		else
			return "Phương trình vô nghiệm!";
	}

	if(isset($_GET['submit']) && ($_GET['submit']=="Giải")) {
		$a= (float)$_GET['a'];
		$b= (float)$_GET['b'];
		$c= (float)$_GET['c'];
		
		echo "<div class='result'>";
		echo giaiPhuongTrinhBac2($a, $b, $c); 
		echo "</div>";
 }

?>
<body>
</html>