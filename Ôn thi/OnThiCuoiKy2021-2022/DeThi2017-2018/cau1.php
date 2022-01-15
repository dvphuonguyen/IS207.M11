<form method="post" action="">
    Ma sach <input type="text" name="masach" placeholder="MS_001">
    Tua de <input type="text" name="tuade" placeholder="Lap trinh web">
    Nam xuat ban <input type="date" name="namxb" placeholder="05/20/2018">
    Gia <input type="number" name="gia" placeholder="35000">
    Trang thai <input type="radio" name="trangthai" checked>
    <input type="submit" name="submit" value="Them">
</form>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $trangthai = 0;

        if($_POST["trangthai"]){
            $trangthai = 1;
        }
        $sql = "insert into sach(masach, tuade, namxb, gia, trangthai) values('".$_POST["masach"]."','".$_POST["tuade"]."','".$_POST["namxb"]."','".$_POST["gia"]."',".$trangthai.")";
        
        if($conn->query($sql)){
            echo "Thanh cong";
        }else{
            echo "That bai";
        }
        
    }
    $conn->close();
?>