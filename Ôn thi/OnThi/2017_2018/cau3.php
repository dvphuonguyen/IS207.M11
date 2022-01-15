<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>


<body>
    <?php
    include "connect.php";
    $sql = "select tendocgia,masach, dg.madocgia where muonsach ms  docgia dg on ms.madocgia = dg.madocgia";
    $rs = $connect->query($sql);
    $stt = 1;
    if ($rs->num_rows) {
        echo "<h2>Danh sach doc gia muon sach va sach muon</h2>";
        echo "<div class='xoa_thongtin'>";
        echo "<table>";
        echo "<tr><th>STT</th><th>Ten doc gia</th><th>Ma sach</th><th>Chuc nang</th></tr>";
        while ($row = $rs->fetch_assoc()) {
            echo "<tr><td>" . $stt . "</td><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td><a href='#' class='xoa' data-masach=" . $row[1] . "data-madocgia=" . $row[2] . "></td></tr>";
            $stt++;
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>Khong co du lieu</p>";
    }
    $connect->close();
    ?>
</body>

<script>
    $(document).ready(function() {
        $(".xoa").click(function() {
            var ms = $(this).attr('masach');
            var mdg = $(this).attr('madocgia');
            $.get("xoamuonsach_ajax.php?masach=" + ms + "&&madocgia=" + mdg, function(data, status) {
                $('.xoa_thongtin').html(data);
            });
            $(this).parent().parent().remove();
        });
    });
</script>