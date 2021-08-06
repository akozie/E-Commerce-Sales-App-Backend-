<?php

$con = new mysqli("localhost","root","mysql","SalesWeb");
$st_check = $con -> prepare("insert into temp_order values(?,?,?)");
$st_check -> bind_param("iis", $_GET["itemid"], $_GET["qty"], $_GET["mobile"]);
$st_check -> execute();





?>