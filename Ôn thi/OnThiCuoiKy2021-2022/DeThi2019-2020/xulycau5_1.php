<?php 
        include "connect.php";
        $id = $_POST["id"];
        $sql = "select mahd, tenhd from hopdong where makh = '".$id."'";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            echo "<option>Chon hop dong</option>";
            while($row = $rs->fetch_row()){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
        }else{
            echo "<option>Khong co du lieu</option>";
        }
    ?>