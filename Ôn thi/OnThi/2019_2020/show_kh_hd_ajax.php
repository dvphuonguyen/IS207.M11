<?php
include "connect.php";
$makh = $_POST['makh'];
$mahd = $_POST['mahd'];
echo $makh;
echo $mahd;
$sql = "select x.maxe, tenxe from xe x join cthd on x.maxe = cthd.maxe join hopdong hd on hd.mahd = cthd.mahd where hd.mahd = '$mahd' and hd.makh = '$makh'";
echo $sql;
$rs = $connect->query($sql);
// if ($rs->num_rows > 0) {
echo "<table border='1'>";
echo "<tr><th>Ten xe</th><th>Xoa</th></tr>";
while ($row = $rs->fetch_row()) {
    echo "<tr><td>" . $row[1] . "</td><td><a href='#' id='" . $row[0] . "' data-kh='" . $makh . "' data-hd='" . $mahd . "' class='xoa' value='Xoa'> Xoa</td></tr>";
}
echo "</table>";
// } else {
//     echo "<p>Khong co xe trong hop dong</p>";
// }
$connect->close();
?>
<script>
    $(document).ready(function() {
        $('.xoa').click(function() {
            var mahd = $(this).data('hd');
            alert(mahd);
            var maxe = $(this).attr('id');
            alert(maxe);
            $.get('xoa_kh_hd_ajax.php?id1=' + mahd + ' ' + maxe, function(data, status) {
                if (status) {
                    $(".show_kh_hd").html(data);
                }
            }, );
            $(this).parent().parent().remove();
        });
    });
</script>