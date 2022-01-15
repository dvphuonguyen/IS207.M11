<?php
            include "connect.php";
            $id = $_POST['id'];
            $sql = "select hotenkh, x.soxe, count(*) as so from khachhang kh join xe x on x.makh = kh.makh join baoduong bd on bd.soxe = x.soxe group by hotenkh, x.soxe having count(*) > $id";
            $rs=$conn->query($sql);
            if($rs->num_rows>0){
                echo "<table border='1'>";
                echo "<tr><th>Ho ten khach hang</th><th>So xe</th><th>So lan bao duong</th></tr>";
                while($row = $rs->fetch_row()){
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "Khong co du lieu";
            }
        ?>