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
<div class="dscn"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.macongty').change(function(){
            var id = $(this).val();
            $.post("xulycau4.php", {
                id:id
            },
            function(data,status){
                if(status){
                    $('.dscn').html(data);
                }
            });
        });
    });
</script>