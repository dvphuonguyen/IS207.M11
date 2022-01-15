<?php
    include "connect.php";
    $id1 = $_GET['id'];
    $id = explode("-", $id1);
    $sql = "delete from muonsach where masach = '$id[0]' and madocgia='$id[1]'";
    if($conn->query($sql)){
        echo "<p>Thanh cong</p>";
    }else{
        echo "<p>That bai</p>";
    }
?>