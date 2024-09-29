<?php
include "php/dbpro.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cno = $_POST["cno"];      // Customer number
    $icode = $_POST["icode"];  // Item code
    $weight = $_POST["weight"];
    $price = $_POST["price"];
    $date = date("Y-m-d");     // Automatically assign today's date

    $sql = "INSERT INTO collection (cno, icode, weight, price, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $cno, $icode, $weight, $price, $date);

    $stmt->execute();
    $stmt->close();

}
?>
