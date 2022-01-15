<h2>Them thong tin xe khach hang</h2>
<form method="post">
    Ho ten khach hang <select name="makh">
        <?php
            include "connect.php";
            $sql ="select makh, hotenkh from khachhang";
            $rs = $conn->query($sql);
            while($row = $rs->fetch_row()){
                echo "<option value='".$row[0]."'>".$row[1]."</option>";
            }
        ?>
    </select>
    So xe <input type="text" name="soxe" placeholder="51H-XXX XX">
    Hang xe <select name="hangxe" multiple="multiple">
        <option value="Toyota">Toyota</option>
        <option value="BMW">BMW</option>
        <option value="Audi">Audi</option>
    </select>
    Nam san xuat<input type="text" name="namsx" placeholder="2020">
    <input type="submit" name="submit" value="Them" class="btn btn-primary">
</form>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into xe(soxe, hangxe, namsx, makh) values('".$_POST["soxe"]."', '".$_POST["hangxe"]."', '".$_POST["namsx"]."', '".$_POST["makh"]."')";
        if($conn->query($sql)){
            echo "Thanh cong";
        }
        else{
            echo "That bai";    
        }
    }
?>