<h3>Thêm chi nhánh</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
		<tr><td>Mã chi nhánh </td><td><input type="input" name="machinhanh"></td></tr>
		<tr><td>Tên chi nhánh </td><td><input type="input" name="tenchinhanh"></td></tr>
		<tr><td>Địa chỉ </td><td><input type="input" name="diachi"></td></tr>
		<tr><td>Tên công ty </td><td>
			<select type="input" name="macongty">
				<?php
					include "connect.php";
					$sql = "select * from congty";
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
		$machinhanh = $_POST['machinhanh'];
		$tenchinhanh = $_POST['tenchinhanh'];
		$diachi = $_POST['diachi'];
		$macongty = $_POST['macongty'];

		$sql = "insert into chinhanh values ('$machinhanh', '$tenchinhanh', '$diachi', '$macongty')";
		if($connect->query($sql)==true){
			echo "Thêm thành công";
		} else{
			echo "Thêm không thành công";
		}
		
		$connect->close();
	}
?>
