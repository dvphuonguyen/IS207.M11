<h2>Danh sach nhan vien</h2>
<div class="dsnv">
<table border='1'>
    <tr>
        <th>Ma nhan vien</th>
        <th>Ten nhan vien</th>
        <th>Chuc nang</th>
    </tr>
    <?php
        include "connect.php";
        $sql = "select manhanvien, tennhanvien from nhanvien";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            while($row = $rs->fetch_row()){
                echo "<tr><td>".$row[0]."</td>><td>".$row[1]."</td>><td><a href='#' class='xoanv' id='".$row[0]."'>Xoa</td></tr>";
            }
        }else{
            echo "<tr><td colspan='3'>Khong co du lieu</td></tr>";
        }
    ?>
</table>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.xoanv').click(function(){
            var  id =$(this).attr('id');
            // alert(id);
            $.post("xulycau7.php?id="+id,
            function(data,status){
                if(status){
                    $(".dsnv").html(data);
                }
            });
            $(this).parent().parent().remove();
        });
    });
</script>