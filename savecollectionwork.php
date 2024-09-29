<?php
include "php/dbpro.php";  // Ensure the database connection is working

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cno = $_POST["cno"];      // Customer number
    $icode = $_POST["icode"];  // Item code
    $weight = $_POST["weight"];
    $price = $_POST["price"];
    $date = date("Y-m-d");     // Automatically assign today's date

    // Check if the form values are not empty (add basic validation)
    if (!empty($cno) && !empty($icode) && !empty($weight) && !empty($price)) {
        // Prepare and execute the SQL statement to insert data into the table
        $sql = "INSERT INTO collection (cno, icode, weight, price, date) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $cno, $icode, $weight, $price, $date);

        // Execute the query
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Please fill in all fields!";
    }
}
?>
