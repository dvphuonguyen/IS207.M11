<?php
            include "connect.php";
            $id = $_POST["id"];
            $sql = "select soxe from baoduong where DATE_FORMAT(ngaygionhan, '%y-%m-%d')= DATE_FORMAT('".$id."', '%y-%m-%d')";
            $rs = $conn->query($sql);
            if($rs->num_rows>0){
                echo "<option>Chon so xe</option>";
                while($row = $rs->fetch_row()){
                    echo "<option value='".$row[0]."'>".$row[0]."</option>";
                }
                
            }else{
                echo "<option>Khong co du lieu</option>";
            }
        ?>
       
        