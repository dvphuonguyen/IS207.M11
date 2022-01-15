<h3>Thêm phòng ban</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
		<tr><td>Mã phòng ban </td><td><input type="input" name="maphongban"></td></tr>
		<tr><td>Tên phòng ban </td><td><input type="input" name="tenphongban"></td></tr>
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
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Thêm" name="submit"></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit']) && ($_POST['submit']=="Thêm")){
		include "connect.php";
		$maphongban = $_POST['maphongban'];
		$tenphongban = $_POST['tenphongban'];
		$machinhanh = $_POST['machinhanh'];
		$sql = "insert into phongban values ('$maphongban', '$tenphongban', '$machinhanh')";
		if($connect->query($sql)==true){
			echo "Thêm thành công";
		} else{
			echo "Thêm không thành công";
		}
		$connect->close();
	}
?>
