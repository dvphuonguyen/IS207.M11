<h2>Them khach hang</h2>
<form method="post">
    Ma khach hang <input type="text" name="makh" placeholder="KH01">
    Ho ten khach hang <input type="text" name="hotenkh" placeholder="Tran Anh Hung">
    Dia chi <input type="text" name="diachi" placeholder="ABC">
    Dien thoai <input type="text" name="dienthoai" placeholder="09xxxxxxx">
    <input type="submit" name="submit" value="Them" class="btn btn-primary">   
</form>
<?php
    include "connect.php";
    echo "1";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into khachhang(makh, hotenkh, diachi, dienthoai) values('".$_POST["makh"]."', '".$_POST["hotenkh"]."', '".$_POST["diachi"]."', '".$_POST["dienthoai"]."')";
        if($conn->query($sql)){
            echo "Thanh cong";
        }
        else{
            echo "That bai";
        }
    }
?>
