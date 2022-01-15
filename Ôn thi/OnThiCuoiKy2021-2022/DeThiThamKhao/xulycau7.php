<?php
    include "connect.php";
    $id = $_GET["id"];
    $sql = "delete from nhanvien where manhanvien= '".$id."'";
    if($conn->query($sql)){
        echo "Thanh cong";
    }else{
        echo "That bai";
    }
?>