<h2>Them Sach</h2>
<form method="post" action="#">
    <label>Ma Sach</label><input type="text" name="masach">
    <br>
    <br>
    <label>Tua De</label><input type="text" name="tuade">
    <br><br>
    <label>Nam xuat ban</label><input type="number" name="namxb">
    <br><br>
    <label>Gia</label><input type="number" name="gia">
    <br><br>
    <label>Trang thai</label><input type="checkbox" name="trangthai">
    <br><br>
    <input type="submit" name="themsach" class="themsach" value="Them">
</form>
<?php
include "connect.php";
if (isset($_POST['themsach']) && $_POST['themsach'] == "Them") {
    $ms = $_POST['masach'];
    $td = $_POST['tuade'];
    $nxb = $_POST['namxb'];
    $g = $_POST['gia'];
    $tt = isset($_POST['trangthai']) ? 0 : 1;
    $sql = "insert into sach(masach, tuade, namxb, gia, trangthai) values('$ms', '$td', '$nxb', '$g', '$tt')";
    if ($connect->query($sql)) {
        echo "Insert successfully";
    } else {
        echo "Something went wrong";
    }
}
$connect->close();
?>