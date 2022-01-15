<body>
    Ten doc gia 
    <div class="tdg">
        <select name="madocgia" class="sdg">
            <?php
                include "connect.php";
                $sql = "select * from docgia";
                $rs = $conn->query($sql);
                if($rs->num_rows>0){
                     echo "<option>Chon doc gia</option>";
                     while($row = $rs->fetch_row()){
                         echo "<option value=".$row[0].">".$row[1]."</option>";
                     }
                }else{
                    echo "<option>Khong co gia tri</option>";
                }
            ?>
        </select>   
    </div>
    <div class="dsms"></div>
</body>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
 </script>
 <script>
     $(document).ready(function(){
        $('.sdg').change(function(){
            var id = $(this).val();
            $.post("xulycau4.php", {
                id:id
            },
            function(data, status){
                if(status){
                    $('.dsms').html(data);
                }
            });
        });
     });
 </script>