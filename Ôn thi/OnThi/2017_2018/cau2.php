<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <label>Ngay</label><input type="date" name="ngaymuon" class="xlngay">
    <br><br>
    <div class="showsachmuon"></div>
</body>
<script>
    $(document).ready(function() {
        $(".xlngay").change(function() {
            var ngay = $(".xlngay").val();
            alert(ngay);
            $.post('showsachmuon_ajax.php', {
                    ngay: ngay,
                },
                function(data, status) {
                    if (status) {
                        $('.showsachmuon').html(data);
                    }
                }
            );
        });
    });
</script>