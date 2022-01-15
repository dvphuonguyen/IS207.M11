<?php
    include "connect.php";
    $id1 = $_POST["id"];
    $id = explode('@', $id1);
    $sql = "select cv.macv, cv.tencv, cv.dongia, bd.mabd from baoduong bd join ct_bd c on bd.mabd = c.mabd join congviec cv on cv.macv = c.macv where soxe = '".$id[0]."' and  DATE_FORMAT(ngaygionhan, '%Y-%M-%D') =DATE_FORMAT('".$id[1]."', '%Y-%M-%D')";
    $rs = $conn->query($sql);
    echo "<table border='1'>";
    echo "<tr><th>Ten cong viec</th><th>Don gia</th><th>Chuc nang</th></tr>";
    while($row = $rs->fetch_row()){
        echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td><a href='#' class='xoa btn btn-primary' id='".$row[3]."@".$row[0]."'>Xoa</a></td></tr>";
    }
    echo "</table>";
?>
<script>
    $(document).ready(function(){
        $('.xoa').click(function(){
            var id = $(this).attr('id');
            $.get("xulycau4_3.php?id="+id, function(data,status){if(status){$('.dscv').html(data)}});
            $(this).parent().parent().remove();
        });
    });
</script>