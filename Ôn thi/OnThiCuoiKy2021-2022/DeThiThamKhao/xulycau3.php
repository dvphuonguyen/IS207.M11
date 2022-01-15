<?php
    include "connect.php";
    $st = $_POST["gt"];
    $gt = explode('-', $st);
    echo $gt;
    $sql = "insert into nhanvien (manhanvien, tennhanvien, luongthang, gioitinh, maphong) values('".$gt[0]."', '".$gt[1]."', ".$gt[2].", ".$gt[3].", '".$gt[4]."')";
    
    if($conn->query($sql)){
        echo "<p>Thanh cong</p>";
    }else{
        echo "<p>That bai</p>";
    }
?>