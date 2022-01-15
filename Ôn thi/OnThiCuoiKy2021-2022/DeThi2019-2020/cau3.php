<table border='1'>
    <tr>
        <th>Ten khach hang</th>
        <th>So lan thue xe</th>
    </tr>
    <?php
        include "connect.php";
        $sql = "select hoten, count(mahd) from hopdong hd join khachhang kh on kh.makh = hd.makh group by kh.makh";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            while($row = $rs->fetch_row()){
                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
            }
        }else{
            echo "<tr><td colspan='2'>Khong co du lieu</td></tr>";
        }
    ?>
</table>