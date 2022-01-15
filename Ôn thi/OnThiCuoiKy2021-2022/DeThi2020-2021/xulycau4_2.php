<?php
            include "connect.php";
            $id1 = $_GET['id'];
            $id = explode('-', $id1);
            $sql1 = "select dongia from congviec where  macv = '".$id[0]."' ";
            $sql = "delete from ct_bd where macv = '".$id[0]."' and mabd = '".$id[1]."'";
            $rs = $conn->query($sql1);
            while($row = $rs->fetch_row()){
                $sql2 = "update baoduong set thanhtien = thanhtien - ".$row[0]." where mabd = '".$id[1]."'";
            }
            if($conn->query($sql) && $conn->query($sql2)){
                echo "Thanh cong";
            }else{
                echo "That bai";
            }
        ?>