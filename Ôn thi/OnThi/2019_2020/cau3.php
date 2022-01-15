<body>
    <?php
    include "connect.php";
    $sql = "select kh.makh, hoten, count(*) from hopdong hd join khachhang kh on hd.makh = kh.makh group by kh.makh, hoten having count(*) >=2";
    $rs = $connect->query($sql);
    if ($rs->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Ten khach hang</th><th>So lan thue xe</th></tr>";
        while ($row = $rs->fetch_row()) {
            echo "<tr><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Khong co khach hang nao mua</p>";
    }
    $connect->close();
    ?>
</body>