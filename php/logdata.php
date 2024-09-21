<?php
include "db.php";

$valr = $_POST["vals"];
$strr = "SELECT * FROM users WHERE umail = '$valr[0]' "