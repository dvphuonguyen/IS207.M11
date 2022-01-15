<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Tìm tên trong mảng</title>
</head>
</head>
<body>
<form method="get" acction="#">
 Nhập tên cần tìm <input type="text" name="tencantim"><br><br>
 <input type="submit" name="submit" value="Tìm">
</form>
</body>
<?php
	function InMang($array){
		foreach($array as $ten => $tuoi)
			echo $ten."\t".$tuoi."<br>";
	}
	
	function TimTen($array, $str) {
		foreach($array as $ten => $tuoi)
			if($ten==$str) return true;
		return false;
	}


	$list_friend = array("Tuấn"=>21, "Tú"=>19, "Tâm"=>22, "Tùng"=>20);
 
	if(isset($_GET['submit'])&&($_GET['submit']=="Tìm")) {
		$ten = $_GET['tencantim'];
		if(TimTen($list_friend, $ten))
			echo "Tìm thấy ".$ten." trong mảng<br>";
		else
			echo "Tìm không thấy <br>";

		echo "<h3>Xuất mảng</h3>";
		InMang($list_friend);
	}
?>