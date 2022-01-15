<?php
include "connect.php";
$ngay = $_POST["ngay"];
$sql = "select sach.masach, tuade from sach join muonsach on sach.masach = muonsach.masach where ngaymuon = '$ngay'";
$stt = 1;
$rs = $connect->query($sql);

if ($rs->num_rows > 0) {
    echo "<h2>Nhung cuon sach duoc muon</h2>";
    echo "<table>";
    echo "<tr><th>STT</th><th>Ma sach</th><th>Tua de</th></tr>";
    while ($row = $rs->fetch_row()) {
        echo "<tr><td>" . $stt . "</td><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        $stt += 1;
    }
    echo "</table>";
} else {
    echo "<p>Khong co sach nao duoc khach hang muon vao ngay nay</p>";
}
$connect->close();
?>