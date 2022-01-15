<h2>Thanh toan</h2>
<form method="post">
    Ngay nhan xe <input type="date" name="ngaynhan" class="ngaynhan">
    So xe <select name="soxe" class="soxe"> 
    </select>
    
    <div class="dstt"></div>
    <input type="submit" class="submit" name="submit" value="Thanh toan">
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.ngaynhan').change(function(){
            var id = $(this).val();
            $.post('xulycau4.php', {
                id:id
            },function(data,status){
                $('.soxe').html(data);
            })
        })
    })
</script>
<script>
    $(document).ready(function(){
        $('.soxe').change(function(){
            var id = $(this).val();
            $.post('xulycau4_1.php', {
                id:id
            },function(data,status){
                $('.dstt').html(data);
            });
        })
    })
</script>
 <?php
            include "connect.php";
            if(isset($_POST["submit"])&&$_POST["submit"]=="Thanh toan"){
                 $sql = "select cv.macv, cv.dongia, bd.mabd from congviec cv join ct_bd on ct_bd.macv = cv.macv join baoduong bd on bd.mabd = ct_bd.mabd where soxe = '".$_POST["soxe"]."'";
                $rs=$conn->query($sql);
                $tong = 0;
                if($rs->num_rows>0){
                    while($row = $rs->fetch_row()){
                        $tong += $row[1];
                    }
                    $sql1 = "update baoduong set thanhtien = $tong, ngaygiotra=now() where DATE_FORMAT(ngaygionhan, '%y-%m-%d')=DATE_FORMAT('".$_POST["ngaynhan"]."', '%y-%m-%d') and soxe = '".$_POST["soxe"]."'";
                    if($conn->query($sql1)){
                     echo "Thanh cong";
                    }
                    else{
                        echo "That bai";
                    }
                }
            }
        ?> 



