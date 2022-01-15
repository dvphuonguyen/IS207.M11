Ten cong ty <select class="macongty">
    <?php
        include "connect.php";
        $sql="select * from congty";
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
Ten chi nhanh <select class="machinhanh set" name="machinhanh">
    </select>
Ten phong ban <select class="maphong set1" name="maphong">
    </select>
    <div class="dspb"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.macongty').change(function(){
            var  a =$('.macongty').val();
            $.post("xulycau5_1.php", {
                a:a
            },
            function(data,status){
                if(status){
                    $(".set").html(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.machinhanh').change(function(){
            var a = $(this).val();
            $.post("xulycau6_1.php", {
                a:a
            },
            function(data,status){
                if(status){
                    $(".set1").html(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.maphong').change(function(){
            var id = $(this).val();
            $.post("xulycau6.php", {
                id:id
            },
            function(data,status){
                if(status){
                    $('.dspb').html(data);
                }
            });
        });
    });
</script>