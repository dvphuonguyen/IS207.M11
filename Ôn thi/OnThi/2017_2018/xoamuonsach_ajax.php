<?php
include "connect.php";
$ms = $_GET["masach"];
$mdg = $_GET["madocgia"];
$sql = "delete from muonsach where madocgia = '$mdg' and masach ='$masach'";
$rs = $connect->query($sql);
if ($rs) {
    echo "Delete successfully";
} else {
    echo "Something went wrong";
}
?>