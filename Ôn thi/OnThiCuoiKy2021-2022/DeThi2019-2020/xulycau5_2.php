<?php
    include "connect.php";
    $id = $_POST["id"];
    $sql = "select x.maxe, x.tenxe from xe x join cthd on cthd.maxe = x.maxe WHERE mahd = '".$id."'";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        echo "<table border='1'>";
        echo "<tr><th>Ten xe</th><th>Chuc nang</th></tr>";
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$row[1]."</td><td><a href='#' class='xoa' id='".$row[0]."-".$id."'>Xoa</td></tr>";
        }
    }else{
        echo "Khong co du lieu";
    }
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.xoa').click(function(){
            var id = $(this).attr('id');
            $.post("xulycau5.php?id="+id,function(data, status){
                $('.dsx').html(data);
            })
            $(this).parent().parent().remove();
        })
    });
</script>