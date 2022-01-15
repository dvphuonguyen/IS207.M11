<h3>Xóa công ty</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
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
			<td align="center" colspan="2"><input type="submit" value="Xóa" name="submit"></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit']) && ($_POST['submit']=="Xóa")){
		include "connect.php";
		$macongty = $_POST['macongty'];
		$sql = "DELETE from chinhanh where macongty = '$macongty'";
		$sql_2 = "DELETE from congty where macongty = '$macongty'";
		if($connect->query($sql)==true){
			echo "Xóa thành công chi nhánh";
		} else{
			echo "Xóa không thành công chi nhánh";
		}
		echo "<br>";
		if($connect->query($sql_2)==true){
			echo "Xóa thành công công ty";
		} else{
			echo "Xóa không thành công công ty";
		}
		$connect->close();
	}
?>
