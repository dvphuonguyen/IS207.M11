<body>
    <?php
        include "connect.php";
        $sql = "select d.tendocgia, s.masach, d.madocgia from docgia d join muonsach ms on d.madocgia = ms.madocgia join sach s on s.masach = ms.masach";
        $rs = $conn->query($sql);
        if($rs->num_rows>0){
            echo "<div class='thongtin'>";
            echo "<table border='1'>";
            echo "<tr><th>STT</th><th>Ten doc gia</th><th>Ma sach</th><th>Chuc nang</th></tr>";
            $stt=1;
            while($row = $rs->fetch_row()){
                echo "<tr><td>".$stt."</td><td>".$row[0]."</td><td>".$row[1]."</td><td><a href='#' class='xoa' id='".$row[1]."-".$row[2]."'>Xoa</td></tr>";
                $stt ++;
            }
            echo "</table>";
            echo "</div>";
        }else{
            echo "<p>Khong co du lieu</p>";
        }
    ?>
</body>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
 </script>
<script>
    $(document).ready(function(){
        $(".xoa").click(function(){
            var ma = $(this).attr('id');
            $.get("xulycau3.php?id="+ma,
            function(data, status){
                $('.thongtin').html(data);
            });
            $("this").parent().parent().remove();
        });
    });
</script>