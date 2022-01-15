<h2>Danh sach nhung doc gia</h2>
<div>
    <?php
    include "connect.php";
    $sql = "select tendocgia from docgia dg where not exists(select * from sach s where not exists (select * from muonsach ms where ms.masach = s.masach and dg.madocgia = ms.madocgia))";
    $rs = $conn->query($sql);
    if($rs->num_rows>0){
        echo "<table border='1'>";
        echo "<tr><th>STT</th><th>Ten doc gia</th></tr>";
        $stt = 1;
        while($row = $rs->fetch_row()){
            echo "<tr><td>".$stt."</td><td>".$row['0']."</td></tr>";
            $stt ++;
        }
        echo "</table>";
    }else{
        echo "<p>Khong co du lieu</p>";
    }
    ?>
</div>