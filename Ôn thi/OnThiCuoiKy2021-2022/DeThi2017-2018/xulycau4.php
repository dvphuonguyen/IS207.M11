<?php
    include "connect.php";
    $sql = "select s.tuade from sach s join muonsach ms on s.masach = ms.masach where ms.madocgia = '".$_POST["id"]."'";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        echo "<table border='1'>";
        echo "<tr><th>STT</th><th>Ten sach</th></tr>";
        $stt = 1;
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$stt."</td><td>".$row[0]."</td></tr>";
            $stt ++;
        }
        echo "</table>";
    }else{
        echo "<p>Khong co du lieu</p>";
    }
?>