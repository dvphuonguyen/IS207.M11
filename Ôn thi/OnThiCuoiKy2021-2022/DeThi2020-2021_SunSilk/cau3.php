<h2>Them bao duong</h2>
<form method="post">
    So xe <input type="text" name="soxe" class="soxe" placeholder="51H-XXX XX">
    Ho ten khach hang <input type="text" class="makh" name="makh" placeholder="Tran Anh Hung">
    Ma bao duong <input type="text" name="mabd" class="mabd" placeholder="BD001">
    So KM <input type="text" name="sokm" class="sokm" placeholder="20000">
    Noi dung <input type="text" name="noidung" class="noidung" placeholder="Bao duong 20000">
    <input type="submit" name="submit" value="Them">
</form>
<script>
    $(document).ready(function(){
        $('.soxe').change(function(){
            var id = $('.soxe').val();
            $.post("xulycau3.php", {id:id}, function(data,status){if(status){$('.makh').val(data)}})
        });
    });
</script>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into baoduong(mabd, ngaygionhan, sokm, noidung, soxe) values('".$_POST["mabd"]."', now(), ".$_POST['sokm'].", '".$_POST["noidung"]."', '".$_POST["soxe"]."')";
        if($conn->query($sql)){echo "Thanh cong";}
        else {echo "That bai";}
    }
?>