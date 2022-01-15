<?php
include "connect.php";
$makh = $_POST['makh'];
echo $makh;
$sql = "select mahd from hopdong where makh = '$makh'";
// echo $sql;
$rs = $connect->query($sql);

if ($rs->num_rows > 0) {

    while ($row = $rs->fetch_row()) {
        echo "<option value=" . $row[0] . ">" . $row[0] . "</option>";
    }
} else {
    echo "<option>Khong co du lieu</option>";
}
$connect->close();
