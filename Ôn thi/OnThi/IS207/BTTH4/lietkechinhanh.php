<h3>Liệt kê chi nhánh</h3>
<form method="POST" action="#">
	<table border="1" cellspacing="0">
		<tr>
			<td>Tên công ty </td>
			<td>
				<select type="input" name="macongty">
					<?php
					include "connect.php";
					$sql = "select * from congty";
					$result = $connect->query($sql);
					while ($row = $result->fetch_row()) {
						echo "<option value=" . $row[0] . ">";
						echo $row[1];
						echo "</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Liệt kê" name="submit"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['submit']) && ($_POST['submit'] == "Liệt kê")) {
	include "connect.php";
	$macongty = $_POST['macongty'];
	$sql = "select * from chinhanh where macongty = '$macongty'";
	$result = $connect->query($sql);
	echo "<table border='1' cellspacing='0'>Danh sách các chi nhánh";
	echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Tên chi nhánh</th><th>Địa chỉ</th></tr>";
	$k = 1;
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_row()) {
			echo "<tr><td>$k</td>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>";
			echo "</tr>";
			$k++;
		}
	} else {
		echo "Không có dòng nào";
	}
	$connect->close();
}
?>