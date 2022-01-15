<?php
    include "connect.php";
    $id = $_POST["id"];
    $sql = "select tennhanvien, luongthang from nhanvien where maphong = '".$id."'";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        echo "Danh sach cac nhan vien trong phong ban";
        echo "<table border='1'>";
        $stt = 1;
        echo "<tr><th>STT</th><th>Ten nhan vien</th><th>Luong thang</th></tr>";
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$stt."</td><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
            $stt ++;
        }
        echo "</table>";
    }else{
        echo "Khong co du lieu";
    }
?>