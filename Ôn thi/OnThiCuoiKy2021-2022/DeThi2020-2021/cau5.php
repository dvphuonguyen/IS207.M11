<h2>Liet ke</h2>
Chon so lan bao duong <input type="number" name="sl" class="sl">

<div class="dssl"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.sl').change(function(){
            var id = $(this).val();
            $.post("xulycau5.php",{
                id:id
            },function(data,status){
                $('.dssl').html(data);
            })
        });
    });
</script>