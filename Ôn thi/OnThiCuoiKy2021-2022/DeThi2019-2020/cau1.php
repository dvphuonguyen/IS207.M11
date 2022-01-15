<form method="post">
    Ma khach hang <input type="text" name="makh">
    Ten khach hang <input type="text" name="hoten">
    Dien thoai <input type="text" name="sdt">
    <input type="submit" name="submit" value="Them">
</form>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into khachhang(makh, hoten, sdt) values('".$_POST["makh"]."', '".$_POST["hoten"]."', '".$_POST["sdt"]."')";
        if($conn->query($sql)){
            echo "<p>Thanh cong</p>";
        }else{
            echo "<p>Thanh cong</p>";
        }
    }
?>