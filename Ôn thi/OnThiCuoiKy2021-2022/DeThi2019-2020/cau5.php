Ten khach <select class="makh">
    <?php 
        include "connect.php";
        $sql = "select makh, hoten from khachhang";
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

Ma hop dong <select class="mahd set">
</select>
<div class="dsx"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.makh').change(function(){
            var id = $(this).val();
            $.post("xulycau5_1.php",{
                id :id
            },function(data, status){
                $('.set').html(data);
            })
        })
    });
</script>
<script>
    $(document).ready(function(){
        $('.mahd').change(function(){
            var id = $(this).val();
            $.post("xulycau5_2.php",{
                id:id
            },function(data, status){
                $('.dsx').html(data);
            })
        })
    });
</script>
