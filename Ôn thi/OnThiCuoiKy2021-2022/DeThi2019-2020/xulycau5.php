<?php
    include "connect.php";
    $id1 = $_GET["id"];
    $id = explode('-',$id1);
    // echo $id[0];
    $sql = "delete from cthd where mahd = '".$id[1]."' and maxe = '".$id[0]."'";
    if($conn->query($sql)){
        echo "Thanh cong";
    }else{
        echo "That bai";
    }
?>