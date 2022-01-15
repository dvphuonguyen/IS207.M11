<?php
    include "connect.php";
    $sql = "select soxe from baoduong where DATE_FORMAT(ngaygionhan, '%Y-%M-%D') =DATE_FORMAT('".$_POST["id"]."', '%Y-%M-%D')";
   
    $rs = $conn->query($sql);
    while($row = $rs->fetch_row()){
        echo "<option value='".$row[0]."'>".$row[0]."</option>";
    }
?>