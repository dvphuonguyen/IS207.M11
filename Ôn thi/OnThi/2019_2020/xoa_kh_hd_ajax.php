<?php
include "connect.php";
// $id = explode(",", $_GET['id']);
$id1 = $_GET['id1'];
echo $id1;
// $id1  = $_GET['id1'];
$id = explode(" ", $id1);
echo $id[0]; // piece1
echo $id[1]; // piece1
$sql = "delete from cthd where mahd = '$id[0]' and maxe='$id[1]'";
if ($connect->query($sql)) {
    echo "<p>Delete successfully</p>";
} else {
    echo "<p>Something went wrong</p>";
}
$connect->close();
