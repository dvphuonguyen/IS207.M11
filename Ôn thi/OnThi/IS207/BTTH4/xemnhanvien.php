<?php
	if(isset($_GET['manhanvien'])){
		include "connect.php";
		$manhanvien = $_GET['manhanvien'];
		$sql = "select * from nhanvien where MaNhanVien = '$manhanvien'";
		$result = $connect->query($sql);
		$res_row = $result->fetch_row();
		$connect->close();
	} else {
		header("Location: index.php");
	}
?>

<h3>Xem nhân viên</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
		<tr><td>Mã nhân viên </td><td><input type="input" name="manhanvien" value="<?php echo $res_row[0]; ?>" disabled></td></tr>
		<tr><td>Tên nhân viên </td><td><input type="input" name="tennhanvien" value="<?php echo $res_row[1]; ?>"></td></tr>
		<tr><td>Lương tháng </td><td><input type="input" name="luongthang" value="<?php echo $res_row[2]; ?>"></td></tr>
		<tr><td>Giới tính </td><td>
			<?php 
				if ($res_row[3] == 0){
					echo '<input type="checkbox" name="gioitinh" checked>';
				} else {
					echo '<input type="checkbox" name="gioitinh">';
				}
			?>
		</td></tr>
		<tr><td>Mã phòng ban </td><td>
			<select type="input" name="maphongban" value="<?php echo $res_row[4]; ?>">
				<?php
					include "connect.php";
					$sql = "select * from phongban";
					$result = $connect->query($sql);
					while($row = $result->fetch_row()) {
						echo "<option value=".$row[0].">";
						echo $row[1];
						echo "</option>";
					}
					$connect->close();
				?>
			</select>
		</td></tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Cập nhật" name="submit"></td>
		</tr>
	</table>
</form>
<?php
	
	if(isset($_POST['submit']) && ($_POST['submit']=="Cập nhật")){
		include "connect.php";
		$manhanvien = $_GET['manhanvien'];
		$tennhanvien = $_POST['tennhanvien'];
		$luongthang = $_POST['luongthang'];
		$gioitinh = isset($_POST['gioitinh']) ? 0 : 1;
		$maphong = $_POST['maphongban'];
		$sql = "UPDATE nhanvien SET TenNhanVien = '$tennhanvien', LuongThang = '$luongthang', GioiTinh = '$gioitinh', MaPhong = '$maphong' WHERE MaNhanVien = '$manhanvien'";
		if($connect->query($sql)==true){
			echo "Chỉnh sửa thành công";
		} else{
			echo "Chỉnh sửa không thành công";
		}
		$connect->close();
		header("Refresh: 0;");
	}
	
?>