<h3>Thêm nhân viên</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
		<tr><td>Tên chi nhánh </td><td>
			<select type="input" name="machinhanh">
				<?php
					include "connect.php";
					$sql = "select * from chinhanh";
					$result = $connect->query($sql);
					while($row = $result->fetch_row()) {
						echo "<option value=".$row[0].">";
						echo $row[1];
						echo "</option>";
					}
				?>
			</select>
		</td></tr>
		<tr><td>Tên phòng ban </td><td>
			<select type="input" name="maphongban">
				<?php
					include "connect.php";
					$sql = "select * from phongban";
					$result = $connect->query($sql);
					while($row = $result->fetch_row()) {
						echo "<option value=".$row[0].">";
						echo $row[1];
						echo "</option>";
					}
				?>
			</select>
		</td></tr>
		<tr><td>Mã nhân viên </td><td><input type="input" name="manhanvien"></td></tr>
		<tr><td>Tên nhân viên </td><td><input type="input" name="tennhanvien"></td></tr>
		<tr><td>Lương </td><td><input type="input" name="luongthang"></td></tr>
		<tr><td>Giới tính </td><td><input type="checkbox" name="gioitinh"></td></tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" value="Thêm" name="submit">
				<input type="submit" value="Reset" name="reset">
			</td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit']) && ($_POST['submit']=="Thêm")){
		include "connect.php";
		$manhanvien = $_POST['manhanvien'];
		$tennhanvien = $_POST['tennhanvien'];
		$luongthang = $_POST['luongthang'];
		$gioitinh = isset($_POST['gioitinh']) ? 0 : 1;
		$maphongban = $_POST['maphongban'];
		$sql = "insert into nhanvien values ('$manhanvien', '$tennhanvien', '$luongthang', '$gioitinh', '$maphongban')";
		if($connect->query($sql)==true){
			echo "Thêm thành công";
		} else{
			echo "Thêm không thành công";
		}
		$connect->close();
	}
?>
