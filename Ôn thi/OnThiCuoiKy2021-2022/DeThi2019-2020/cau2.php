<form method="post">
    Ma hop dong <input type="text" name="mahd">
Ten hop dong <input type="text" name="tenhd">
Ten khach hang <select name="makh">
    <?php
        include "connect.php";
        $sql = "select makh, hoten from khachhang";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            echo "<option>Chon khach hang</option>";
            while($row = $rs->fetch_row()){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
        }else{
            echo "<option>Khong co du lieu</option>";
        }
    ?>
    </select>
Ten xe <select name="maxe[]" multiple="multiple">
    <?php
        include "connect.php";
        $sql = "select maxe, tenxe from xe";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            echo "<option>Chon xe</option>";
            while($row = $rs->fetch_row()){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
        }else{
            echo "<option>Khong co du lieu</option>";
        }
    ?>
     </select>
So tien <input type="text" name="tongtien">
<input type="submit" name="submit" value="Thue xe">
</form>
<?php
    include "connect.php";
    $sql = "insert into hopdong(mahd, tenhd, ngaylap, makh, tongtien) values('".$_POST["mahd"]."', '".$_POST["tenhd"]."', now(), '".$_POST["makh"]."', '".$_POST["tongtien"]."')";
    if($conn->query($sql)){
        $nhieu = $_POST["maxe"];
        foreach($nhieu as $it){
            $sql1 = "insert into cthd(mahd, maxe) values('".$_POST["mahd"]."', '".$it."')";
            if($conn->query($sql)){
                echo "Thanh cong lan 1";
            }
        }
    }else{
        echo "That bai";
    }
?>
