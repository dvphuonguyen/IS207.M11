<?php
    include "connect.php";
    $sql ="select hotenkh from khachhang kh join xe x on kh.makh = x.makh where x.maxe = '".$_POST["id"]."'";
    $rs = $conn->query($sql);
    while($row = $rs->fetch_row()){
        echo $row[0];
        break;
    }
?>
