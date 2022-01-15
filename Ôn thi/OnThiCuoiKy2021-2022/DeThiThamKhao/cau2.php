<form method="post">
    Ma chi nhanh <input type="text" name="machinhanh">
    Ten chi nhanh <input type="text" name="tenchinhanh">
    Dia chi <input type="text" name="diachi">
    Ten cong ty <select name="macongty" class="ct">
        <?php
            include "connect.php";
            $sql = "select * from congty";
            $rs = $conn->query($sql);
            if($rs->num_rows>0){
                echo "<option>Chon cong ty</option>";
                while($row = $rs->fetch_row()){
                    echo "<option value=".$row[0].">".$row[1]."</option>";
                }
            }else{
                echo "<option>Khong co du lieu</option>";
            }
        ?>
    </select>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="submit" name="submit" value="Them">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="reset" name="reset" value="Reset">
        </div>
    </div>
</form>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into chinhanh(machinhanh, tenchinhanh, diachi, macongty) values('".$_POST["machinhanh"]."', '".$_POST["tenchinhanh"]."', '".$_POST["diachi"]."', '".$_POST["macongty"]."')";
       
        if($conn->query($sql)){
            echo "<p>Thanh cong</p>";
        }else{
            echo "<p>That bai</p>";
        }
    }
?>