<?php
include "connect.php";
$sql = "select tendocgia
                from docgia d
                where madocgia not exists (select *
                                        from sach s
                                        where masach not exists (   select *
                                                                    from muonsach m
                                                                    where d.madocgia = m.madocgia and s.masach = m.masach
                                                                    )
                                        )
        ";
$rs = $connect->query($sql);
$stt = 1;
if ($rs->num_rows > 0) {
    echo "<h2>Danh sach nhung doc gia</h2>";
    echo "<table>";
    echo "<tr><th>STT</th><th>Ten doc gia</th></tr>";
    while ($row = $rs->fetch_assoc()) {
        echo "<tr><td>" . $stt . "</td><td>" . $row[0] . "</td></tr>";
        $stt++;
    }
    echo "</table>";
} else {
    echo "<p>Khong co du lieu</p>";
}
$connect->close();
