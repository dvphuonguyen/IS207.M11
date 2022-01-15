<?php
    include "connect.php";
    $sql = "select s.masach, tuade from sach s join muonsach ms on s.masach = ms.masach where DATE_FORMAT(ngaymuon, '%y-%m-%d') = DATE_FORMAT('".$_POST["ngay"]."', '%y-%m-%d')";
 
    // echo $_POST["ngay"];
    $rs=$conn->query($sql);
    // echo $rs;
    if($rs->num_rows>0){
        echo "<h2>Nhung cuon sach duong muon</h2>";
        echo "<table border='1'>";
        echo "<tr><th>STT</th><th>Ma sach</th><th>Tua de</th></tr>";
        $stt = 1;
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$stt."</td><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
            $stt ++;
        }
        echo "</table>";
    }else{
        echo "<p>Khong co du lieu</p>";
    }
    $conn->close();
?>