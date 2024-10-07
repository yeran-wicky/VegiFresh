<?php
include "php/db.php";
include "sqlobj.php";

$vals = $_POST["pvals"];
$its = explode("#", $vals[6]);
print_r($its);
for($i1=0; $i1 < count($its); $i1++){
    echo ($its[$i1]);
}


?>