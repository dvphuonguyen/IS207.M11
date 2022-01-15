<?php
	include "connect.php";
	$sql = "select * from nhanvien";
	$result = $connect->query($sql);
	echo "<table border='1' cellspacing='0'>";
	echo "<tr><th>MANV</th><th>Tên nhân viên</th><th>Chức năng</th></tr>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_row()) {
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td>";
			echo "<td><a href='xemnhanvien.php?manhanvien=$row[0]' class='Xem'>Xem</a>, <a href='xoanhanvien.php?manhanvien=$row[0]' class='Xoa'>Xóa</a></td>";
			echo "</tr>";
		}
	} else {
		echo "Không có dòng nào";
	}
	$connect->close();
?>