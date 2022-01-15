<form method="post">
    Ten chi nhanh <select class="machinhanh" name="machinhanh">
        <?php
            include "connect.php";
            $sql = "select * from chinhanh";
            $rs = $conn->query($sql);
            if($rs->num_rows>0){
                 echo "<option>Chon chi nhanh</option>";
                 while($row = $rs->fetch_row()){
                     echo "<option value=".$row[0].">".$row[1]."</option>";
                 }
            }else{
                echo "<option>Khong co du lieu</option>";
            }
        ?>
    </select>
    Ten phong ban <select class="maphong set" name="maphong">
    </select>
    Ma nhan vien <input type="text" class="manhanvien" name="manhanvien">
    Ten nhan vien <input type="text" class="tennhanvien" name="tennhanvien">
   Luong <input type="number" class="luongthang" name="luongthang">
   Gioi tinh <input type="radio" class="gioitinh" name="gioitinh" >
   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="submit" class="submit" name="submit" value="Them">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="reset" class="reset"  name="reset"value="Reset">
        </div>
    </div>
</form>
<div class="tb"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<script>
    $(document).ready(function(){
        $('.machinhanh').change(function(){
            var  a =$('.machinhanh').val();
            $.post("xulycau3_1.php", {
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
        $('.submit').click(function(){
            var  a =0;
            if($('input[name="gioitinh"]').is(":checked")){
                a = 1;
            }
            var gt = $('.manhanvien').val()+"-"+$('.tennhanvien').val()+"-"+$('.luongthang').val()+"-"+a+"-"+$('.maphong').val()+"-"+$('.machinhanh').val();
            $.post("xulycau3.php", {
                gt:gt
            },
            function(data,status){
                if(status){
                    $(".tb").html(data);
                }
            });
        });
    });
</script>