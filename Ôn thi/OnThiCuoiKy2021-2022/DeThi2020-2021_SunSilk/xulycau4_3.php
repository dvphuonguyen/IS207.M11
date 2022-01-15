<?php
    include "connect.php";
    $id1 = $_GET["id"];
    $id = explode("@", $id1);
    $sql1 = "select thanhtien from baoduong where soxe = '".$id[0]."' and DATE_FORMAT(ngaygionhan, '%Y-%M-%D') =DATE_FORMAT('".$id[1]."', '%Y-%M-%D')";
    $rs = $conn->query($sql1);
    $t = 0;
    if($rs->num_rows>0){
        $sql3 = "select cv.dongia from congviec cv join ct_bd c on c.macv = cv.macv where macv ='".$id[1]."'";
        $rs1 = $conn->query($sql3);
        if($rs1->num_rows>0){
            while($row = $rs1->fetch_row()){
                $t= $row[0];
                break;
            }
        }
        $sql2 = "update baoduong set thanhtien = thanhtien - $t where mabd ='".$id[0]."'";
    }
    $sql = "delete from ct_bd where mabd ='".$id[0]."' and macv ='".$id[1]."'";
    if($conn->query($sql)){echo "Thanh cong";}
    else {echo "That bai";}
?>



