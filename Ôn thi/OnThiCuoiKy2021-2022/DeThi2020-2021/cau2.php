<h2>Them thong tin xe khach hang</h2>
<form method="post">
    Ho ten khach hang<select name="makh">
        <?php
            include "connect.php";
            $sql = "select makh, hotenkh from khachhang";
            $rs = $conn->query($sql);
            if($rs->num_rows>0){
                echo "<option>Chon khach hang</option>";
                while($row = $rs->fetch_row()){
                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                }
                
            }else{
                echo "<option>Khong co du lieu</option>";
            }
        ?>
    </select>
    So xe <input type="text" name="soxe" placeholder="51H-XXX XX">
    Hang xe <select name="hangxe">
            <option >Chon hang xe</option>
            <option value="Toyota">Toyota</option>
            <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
        </select>
    Nam san xuat <input type="text" name="namsx" placeholder="2020">
    <input type="submit" name="submit" value="Them">
</form>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into xe (soxe, hangxe, namsx, makh) values('".$_POST["soxe"]."', '".$_POST["hangxe"]."', '".$_POST["makh"]."', '".$_POST["namsx"]."' )";
        if($conn->query($sql)){
            echo "Thanh cong";
        }else{
            echo "That bai";
        }
    }
?>