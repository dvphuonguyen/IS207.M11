<h2>Thanh toan</h2>
<form method="post">
    So xe <select class="soxe set" name="soxe"></select>
    Ngay nhan xe <input type="date" name="ngaynhan" class="ngaynhan" placeholder="06/01/2021">
    Thanh tien <input type="text" name="thanhtien" class="thanhtien" placeholder="50000">
    <div class="dscv"></div>
    <input type="submit" name="submit" class="btn btn-primary" value="Thanh toan">
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.ngaynhan').change(function(){
            var id = $(this).val();
            $.post("xulycau4.php", {id:id}, function(data,status){if(status){$('.set').html(data)}});
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.soxe').change(function(){
            var id = $('.soxe').val()+"@"+$('.ngaynhan').val();
            $.post("xulycau4_1.php", {id:id}, function(data,status){if(status){$('.dscv').html(data)}});
            $.post("xulycau4_2.php", {id:id}, function(data,status){if(status){
                $('.thanhtien').val(data)}}
                );
        });
    });
</script>


</script>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Thanh toan"){
        $sql = "update baduong set ngaytra = now(), thanhtien = '".$_POST['thanhtien']."' where ngaynhan = '".$_POST["ngaygionhan"]."' and soxe = '".$_POST["soxe"]."'";
        if($conn->query($sql)){
            echo "Thanh cong";
        }
        else{
            echo "That bai";
        }
    }   
?>