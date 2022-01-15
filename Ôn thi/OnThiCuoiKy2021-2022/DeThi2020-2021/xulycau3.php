<?php
            include "connect.php";
            $id = $_POST['id'];
            // echo $id;
            $sql = "select makh from xe where soxe = '".$id."'";
            // echo $sql;
            $rs=$conn->query($sql);
            if($rs->num_rows>0){
                while($row = $rs->fetch_row()){
                    echo $row[0];
                    break;
                }
            }
            // echo "<input type='text' class='makh' value='".$rs[0]."'>";
            
        ?>