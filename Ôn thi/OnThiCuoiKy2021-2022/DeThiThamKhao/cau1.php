<form method="post">
    Ma cong ty <input type="text" name="macongty">
    Ten cong ty <input type="text" name="tencongty">
    Dia chi <input type="text" name="diachi">
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
        $sql = "insert into congty(macongty, tencongty, diachi) values('".$_POST["macongty"]."', '".$_POST["tencongty"]."', '".$_POST["diachi"]."')";
        if($conn->query($sql)){
            echo "<p>Thanh cong</p>";
        }else{
            echo "<p>That bai</p>";
        }
    }
?>