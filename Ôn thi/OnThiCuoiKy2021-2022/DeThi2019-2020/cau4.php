Chon so luong <input type="text" name="sl" class="sl">

<div class="dssl"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.sl').change(function(){
            var sl = $(this).val();
            $.post('xulycau4.php',{
                sl:sl,
            },function(data, status){
                if(status){
                    $('.dssl').html(data);
                }
            });
        });
    });
</script>