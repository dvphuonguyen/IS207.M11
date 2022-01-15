<body>
    Ngay <input type="date" class="ngay">
    <div class="dsmuon"></div>
</body>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
 </script>
<script>
    $(document).ready(function(){
        $(".ngay").change(function(){
            var ngay = $(this).val();
            $.post("xulycau2.php",
            {
                ngay:ngay
            },
            function(data,status){
                if(status="success"){
                    $(".dsmuon").html(data);
                }
            });
        });
    });
</script>