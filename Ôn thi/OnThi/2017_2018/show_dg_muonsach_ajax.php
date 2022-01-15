<?php
    include "connect.php";
    $madocgia = $_POST['madocgia'];
    $sql = "select tuade from sach s join muonsach ms on s.masach = ms.masach where ms.madocgia = '$madocgia'";
    $rs = $connect->query($sql);
    $stt = 1;
    if ($rs->num_rows > 0) {
        echo "<h2>Danh sach cac sach da muon</h2>";
        echo "<table>";
        echo "<tr><th>STT</td><td>Ten sach</td></tr>";
        while ($row = $rs->fetch_row()) {
            echo "<tr><td>" . $stt . "</td><td>" . $row[0] . "</td></tr>";
            $stt +=1;
        }
        echo "</table>";
    } else {
        echo "<p>Khong co du lieu</p>";
    }
