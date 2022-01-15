<?php
            include "connect.php";
            $id = $_POST['id'];
            $sql = "select cv.macv, cv.dongia, bd.mabd from congviec cv join ct_bd on ct_bd.macv = cv.macv join baoduong bd on bd.mabd = ct_bd.mabd where soxe = '".$id."'";
            $rs=$conn->query($sql);
            $tong = 0;
            if($rs->num_rows>0){
                echo "<table border='1'>";
                echo "<tr><th>Ten cong viec</th><th>Don gia</th><th>Chuc nang</th></tr>";
                while($row = $rs->fetch_row()){
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><a href='#' class='xoa' id='".$row[0]."-".$row[2]."'>Xoa</td></tr>";
                    $tong += $row[1];
                }
                echo "</table>";
                echo "Thanh toan <input type='text name='thanhtien' class='thanhtien' value='".$tong."'>";
            }else{
                echo "Khong co du lieu";
            }
        ?>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
         <script>
             $(document).ready(function(){
                 $('.xoa').click(function(){
                    var id = $(this).attr('id');
                    $.post("xulycau4_2.php?id="+id, function(data, status){
                        $(".dstt").html(data);
                    });
                    $(this).parent().parent().remove();
                 });
             })
         </script>