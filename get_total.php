<?php

$con = new mysqli("localhost","root","mysql","SalesWeb");
$st_check = $con -> prepare("select price,qty from items inner join bill_details on items.id=bill_details.itemid where bill_details.bill_no=?");
$st_check -> bind_param("i", $_GET["bill_no"]);
$st_check -> execute();
$rs = $st_check -> get_result();
$total = 0;
while ($row = $rs->fetch_assoc()) {
    # code...
    $total += $row["price"] * $row["qty"];
}
echo $total
?>