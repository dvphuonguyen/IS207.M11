<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Bổ sung hướng dẫn chung</title>
</head>
</head>
<body>
<form method="get" acction="#">
 Nhập tên/tuổi cần tìm/xóa (Vd: Phú)&nbsp;&nbsp;<input type="text" name="input">
 <br><br>
 Nhập tên, tuổi cần thêm (Vd: Phú;20)&nbsp;&nbsp;<input type="text" name="input_add">
 <br><br>
 <input type="submit" name="submit" value="Xuất mảng">&nbsp;&nbsp;
 <input type="submit" name="submit" value="Tìm theo tên">&nbsp;&nbsp;
 <input type="submit" name="submit" value="Sắp xếp tăng dần theo tuổi">&nbsp;&nbsp;
 <input type="submit" name="submit" value="Thêm 1 phần tử">&nbsp;&nbsp;
 <input type="submit" name="submit" value="Tìm theo tuổi">&nbsp;&nbsp;
 <input type="submit" name="submit" value="Xóa theo tên">&nbsp;&nbsp;
 <br><br>
</form>
</body>
<?php

	$list_friend = array("Tuấn"=>21, "Tú"=>19, "Tâm"=>22, "Tùng"=>20);
	$list_control = ["Xuất mảng", "Tìm theo tên", "Sắp xếp tăng dần theo tuổi", "Thêm 1 phần tử", "Tìm theo tuổi", "Xóa theo tên"];
	
	function xuatMang($array){
		$k = 1;
		foreach($array as $ten => $tuoi)
			echo "STT: ".$k++."\t\t\t - Tên: ".$ten."\t\t\t - Tuổi: ".$tuoi."<br>";
	}
	
	function timTen($array, $str) {
		foreach($array as $ten => $tuoi)
			if($ten==$str) return true;
		return false;
	}
	
	function timTuoi($array, $str) {
		foreach($array as $ten => $tuoi)
			if($tuoi==$str) return true;
		return false;
	}
	
	function sapXepTheoTuoi($array) {
		asort($array);
		return $array;
	}
	
	function themPhanTu($array, $strInput) {
		$info = explode(";", $strInput);
		$name = $info[0];
		$age = $info[1];
		$array = array_merge($array, array($name=>$age));
		return $array;
	}
	
	function xoaPhanTu($array, $strInput) {
		unset($array[$strInput]);
		return $array;
	}

	echo "<h3>Mảng ban đầu</h3>";
	xuatMang($list_friend);

	if (isset($_GET['submit'])) {
		$control = array_search($_GET['submit'], $list_control);
		if (!$control) $control = 0;
		echo "<h3>".$list_control[$control]."</h3>";
		if ($control == 0)
			xuatMang($list_friend);
		else if ($control == 1){
			$timTen = timTen($list_friend, $_GET['input']);
			if ($timTen)
				echo "Tìm thấy tên ".$_GET['input']." trong mảng!";
			else
				echo "Không tìm thấy tên ".$_GET['input']." trong mảng!";
		} else if ($control == 2){
			echo "<h4>Mảng đã sắp xếp</h4>";
			$list_friend_sorted = sapXepTheoTuoi($list_friend);
			xuatMang($list_friend_sorted);
		} else if ($control == 3){
			echo "<h4>Mảng đã thêm</h4>";
			$list_friend = themPhanTu($list_friend, $_GET['input_add']);
			xuatMang($list_friend);
		} else if ($control == 4){
			$timTuoi = timTuoi($list_friend, $_GET['input']);
			if ($timTuoi)
				echo "Tìm thấy tuổi ".$_GET['input']." trong mảng!";
			else
				echo "Không tìm thấy tuổi ".$_GET['input']." trong mảng!";
		} else if ($control == 5){
			$timTen = timTen($list_friend, $_GET['input']);
			if ($timTen){
				$list_friend = xoaPhanTu($list_friend, $_GET['input']);
				echo "<h4>Mảng sau khi xóa</h4>";
				xuatMang($list_friend);
			} else
				echo "Không tìm thấy tên ".$_GET['input']." trong mảng nên không xóa!";
		}
	}
?>