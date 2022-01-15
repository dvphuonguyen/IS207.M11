<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <form method="post" action="">
        Ma hop dong <input type="text" name="mahd"><br><br>
        Ten hop dong <input type="text" name="tenhd"><br><br>
        Ten khach hang
        <select name="makh" class="makh">
            <?php
            include "connect.php";
            $sql = "select makh, hoten from khachhang";
            $rs = $connect->query($sql);
            if ($rs->num_rows) {
                while ($row = $rs->fetch_row()) {
                    echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                }
            } else {
                echo "<option>Khong co khach hang</option>";
            }
            ?>
        </select>
        <br><br>
        Ten xe
        <select name="maxe[]" class="maxe" multiple="mutiple">
            <?php
            include "connect.php";
            $sql = "select maxe, tenxe from xe";
            $rs = $connect->query($sql);
            if ($rs->num_rows) {
                while ($row = $rs->fetch_row()) {
                    echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                }
            } else {
                echo "<option>Khong co xe</option>";
            }
            ?>
        </select>
        <br><br>
        So tien <input type="number" name="tongtien"><br><br>
        <input type="submit" name="themhd_cthd" value="Thue xe">
    </form>
    <?php
    include "connect.php";
    if (isset($_POST['themhd_cthd']) && $_POST['themhd_cthd'] == "Thue xe") {
        $mahd = $_POST['mahd'];
        $tenhd = $_POST['tenhd'];
        $makh = $_POST['makh'];
        $tongtien = $_POST['tongtien'];
        // $maxe = implode(',', $_POST['maxe']);
        $today = date("d/m/Y");
        $sql = "insert into hopdong (mahd, tenhd, ngaylap, makh, tongtien) values('$mahd', '$tenhd', '$today', '$makh', '$tongtien')";
        if ($connect->query($sql)) {
            echo "Inser HD successfully";
        } else {
            echo "Sonething went wrong";
        }
        foreach ($_POST['maxe'] as $maxe) {
            $sql1 =  "insert into cthd (mahd, maxe) values('$mahd', '$maxe');";
            if ($connect->query($sql1)) {
                echo "Inser CTHD for ".$maxe ." successfully";
            } else {
                echo "Sonething went wrong";
            }
        }
    }
    $connect->close();
    ?>
</body>