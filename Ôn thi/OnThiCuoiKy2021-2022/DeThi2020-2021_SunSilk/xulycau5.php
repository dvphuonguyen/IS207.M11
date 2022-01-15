<?php
    include "connect.php";
    $sql = "select kh.hotenkh, x.soxe, count(*) from khachhang kh join xe x on x.makh = kh.makh join baoduong bd on bd.soxe = x.soxe group by bd.mabd,  kh.hotenkh, x.soxe having count(*) > ".$_POST['id']."";    
    $rs = $conn->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Ho ten khach hang</th><th>So xe</th><th>So lan bao duong</th></tr>";
    while($row = $rs->fetch_row()){
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    }
    echo "</table>";
?>