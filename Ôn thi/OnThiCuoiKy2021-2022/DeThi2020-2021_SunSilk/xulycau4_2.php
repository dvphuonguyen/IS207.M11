<?php
    include "connect.php";
    $id1 = $_POST["id"];
    $id = explode('@', $id1);
    $sql ="select thanhtien from baoduong where soxe = '".$id[0]."' and DATE_FORMAT(ngaygionhan, '%Y-%M-%D') =DATE_FORMAT('".$id[1]."', '%Y-%M-%D')";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        while($row=$rs->fetch_row()){
            if($row[0] > 0){echo $row[0]; }
            else{$sql1 = "select cv.dongia from baoduong bd join ct_bd c on bd.mabd = c.mabd join congviec cv on cv.macv = c.macv where soxe = '".$id[0]."' and DATE_FORMAT(ngaygionhan, '%Y-%M-%D') =DATE_FORMAT('".$id[1]."', '%Y-%M-%D')";
        $rs1 = $conn->query($sql1);
        $tong = 0;
        while($row = $rs1->fetch_row()){
            $tong += $row[0];
        }
        echo $tong;}
            break;
        }
    }
?>