<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    Chon so luong <input type="number" name="chonsl" class="chonsl">
    <div class="showxe_sl"></div>
</body>
<script>
    $(document).ready(function() {
        $('.chonsl').change(function() {
            var sl = $(this).val();
            alert(sl);
            $.post('showxe_sl_ajax.php', {
                    sl: sl,
                },
                function(data, status) {
                    if (status) {
                        $(".showxe_sl").html(data);
                    }
                }
            );
        });
    });
</script>