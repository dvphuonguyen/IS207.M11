<?php
include "connect.php";
$makh = $_POST['ma'];
// echo $makh;
$sql = "select mahd from hopdong where makh = '$makh'";
// echo $sql;
$rs = $connect->query($sql);
if ($rs->num_rows) {
    echo "<select class='mahd' name='mahd' id='mahd' data-makh=" . $makh . ">";
    echo "<option value=''>Choose value</option>";
    while ($row = $rs->fetch_row()) {
        echo "<option value=" . $row[0] . ">" . $row[0] . "</option>";
    }
    echo "</select>";
    echo "<br><br>";
    echo " <div class='show_kh_hd'></div>";
} else {
    echo "<p>Khong co hop dong</p>";
}
?>
<script>
    $(document).ready(function() {
        $('.mahd').change(function() {
            var mahd = $(this).val();
            alert(mahd);
            var makh = $('#mahd').data('makh');
            alert(makh);
            $.post('show_kh_hd_ajax.php', {
                    makh: makh,
                    mahd: mahd,
                },
                function(data, status) {
                    if (status) {
                        $(".show_kh_hd").html(data);
                    }
                }
            );
        });
    });
</script>