<h2>Them bao duong</h2>
<form method="post">
    So xe <input type="text" name="soxe" placeholder="51H-XXX XX" class="soxe">
    
    Ho ten khach hang <input type="text" class="makh" placeholder="Tran Anh Hung" >
    
    <!-- <div class="abc">
    </div> -->
    Ma bao duong <input type="text" name="mabd" placeholder="BD001" >
    So km<input type="text" name="sokm" placeholder="20000" >
    Noi dung<input type="text" name="noidung" placeholder="Bao duong 2020" >
    <input type="submit" name="submit" value="Them">
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.soxe').change(function(){
            var id = $(this).val();
            // alert(id);
            $.post("xulycau3.php",{
                id:id
            },function(data,status){
                // $('.abc1').hide();
                // $('.makh').html(data);
                $('.makh').val(data);
            });
            
        });
    });
</script>
<?php
    include "connect.php";
    if(isset($_POST["submit"])&&$_POST["submit"]=="Them"){
        $sql = "insert into baoduong(mabd, ngaygionhan, sokm, noidung, soxe) values('".$_POST["mabd"]."', now(), '".$_POST["sokm"]."', '".$_POST["noidung"]."', '".$_POST["soxe"]."')";
        if($conn->query($sql)){
            echo "Thanh cong";
        }else{
            echo "That bai";
        }
    }
?>
