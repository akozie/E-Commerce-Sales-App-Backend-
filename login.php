<?php

$con = new mysqli("localhost","root","mysql","SalesWeb");
$st_check = $con -> prepare("select * from users where mobile=? and password=?");
$st_check -> bind_param("ss", $_GET["mobile"], $_GET["password"]);
$st_check -> execute();
$rs=$st_check -> get_result ();
if ($rs -> num_rows == 0) {
    # code...
    echo "0";
}
else {
    # code...
    echo "1";
}

 



?>