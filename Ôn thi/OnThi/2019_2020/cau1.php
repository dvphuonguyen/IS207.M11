<h2>Them khach hang</h2>
<form method="post" action="">
    Ma khach hang <input type="text" name="makh"><br><br>
    Ten khach hang <input type="text" name="hoten"><br><br>
    So dien thoai <input type="text" name="sdt"><br><br>
    <input type="submit" name="themkh" value="Them">
</form>
<?php
include "connect.php";
if (isset($_POST['themkh']) && $_POST['themkh'] == "Them") {
    $makh = $_POST['makh'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $sql = "insert into khachhang (makh, hoten, sdt) values('$makh', '$hoten', '$sdt')";
    if ($connect->query($sql)) {
        echo "Insert successfully";
    } else {
        echo "Something went wrong!!!!";
    }
}
$connect->close();
?>