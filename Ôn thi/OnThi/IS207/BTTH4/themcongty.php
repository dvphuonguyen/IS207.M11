<h3>Thêm công ty</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0"> 
		<tr><td>Mã công ty </td><td><input type="input" name="macongty"></td></tr>
		<tr><td>Tên công ty </td><td><input type="input" name="tencongty"></td></tr>
		<tr><td>Địa chỉ </td><td><input type="input" name="diachi"></td></tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Thêm" name="submit"></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_POST['submit']) && ($_POST['submit']=="Thêm")){
		include "connect.php";
		$macongty = $_POST['macongty'];
		$tencongty = $_POST['tencongty'];
		$diachi = $_POST['diachi'];
		$sql = "insert into congty values ('$macongty', '$tencongty', '$diachi')";
		if($connect->query($sql)==true){
			echo "Thêm thành công";
		} else{
			echo "Thêm không thành công";
		}
		$connect->close();
	}
?>
