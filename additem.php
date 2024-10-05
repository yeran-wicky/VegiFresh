<?php
include "php/db.php";
include "sqlobj.php";

$vals = $_POST["pvals"];
$myclass = new sqlobj($bdd);

$th = "item:weight:price";
$btn = array();
$tbl = $myclass -> valtotable($th,$vals,$btn);
echo $tbl;
?>
