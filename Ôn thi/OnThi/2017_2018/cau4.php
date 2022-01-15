<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <?php
    include "connect.php";
    $sql = "select madocgia, tendocgia from docgia";
    $rs = $connect->query($sql);
    if ($rs->num_rows > 0) {
        echo "<h2>Ten doc gia</h2>";
        echo "<select name='tendocgia' class='tendocgia'>";
        while ($row = $rs->fetch_row()) {
            echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
        }
        echo "</select>";
    } else {
        echo "<p>Khong co du lieu</p>";
    }
    ?>
    <div class="show_dg_muonsach"></div>
</body>
<script>
    $(document).ready(function() {
        $(".tendocgia").change(function() {
            var madocgia = $(".madocgia").val();
            alert(madocgia);
            $.post('show_dg_muonsach_ajax.php', {
                    ngay: ngay,
                },
                function(data, status) {
                    if (status) {
                        $('.show_dg_muonsach').html(data);
                    }
                }
            );
        });
    });
</script>