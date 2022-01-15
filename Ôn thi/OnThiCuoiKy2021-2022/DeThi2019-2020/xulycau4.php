<?php
    include "connect.php";
    $sl = $_POST['sl'];
    $sql = "select tenxe, count(*) from xe x join cthd on x.maxe = cthd.maxe group by x.maxe, tenxe order by count(*) desc limit $sl";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        echo "<table border='1'>";
        echo "<tr><th>Ten xe</th><th>So lan thue</th></tr>";
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
        }
        echo "</table>";
    }else{
        echo "Khong co du lieu";
    }
?>