<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    Ten khach
    <select class="makh" name="makh" id="makh">
        <?php
        include "connect.php";
        $sql = "select makh, hoten from khachhang";
        $rs = $connect->query($sql);
        if ($rs->num_rows) {
            echo "<option value=''>Choose value</option>";
            while ($row = $rs->fetch_row()) {
                echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
            }
        } else {
            echo "<option>Khong co khach hang</option>";
        }
        ?>
    </select>
    <br><br>
    Ma hop dong
    <div class="show_hd"></div>
    <!-- <br><br> -->
    <!-- <div class="showxe_sl"></div> -->
</body>
<script>
    $(document).ready(function() {
        $('.makh').change(function() {
            var makh = $(this).val();
            alert(makh);
            // $('#mahd').attr('data-makh', makh);
            $.post('show_hd_ajax.php', {
                    ma: makh,
                },
                function(data, status) {
                    if (status) {
                        $(".show_hd").html(data);
                    }
                }
            );
        });
    });
</script>