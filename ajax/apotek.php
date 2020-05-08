<?php
require "../function.php";
$query = "SELECT * FROM apotek";
$apotek = query($query);
echo json_encode($apotek);