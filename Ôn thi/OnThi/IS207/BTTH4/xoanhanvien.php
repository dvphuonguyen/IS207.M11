<?php
	if(isset($_GET['manhanvien'])){
		include "connect.php";
		$manhanvien = $_GET['manhanvien'];
		$sql = "delete from nhanvien where MaNhanVien = '$manhanvien'";
		$result = $connect->query($sql);
		echo "Xóa thành công!";
	} else {
		header("Location: index.php");
	}
?>