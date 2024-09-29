<form action="savecollection.php" method="post">  <!-- Add method="post" -->
    <?php
    $sql = "SELECT icode, iname FROM item";
    $result = $conn->query($sql);
    ?>
    <div class="row">
        <!-- Customer selection (Add this field) -->
        <div class="col-4">
            <label for="cno">Customer Number:</label>
            <input type="text" class="form-control" id="cno" name="cno" placeholder="Customer No." required>
        </div>
        <!-- Item selection -->
        <div class="col-4">
            <label for="item">Item:</label>
            <select class="form-select" id="item" name="icode" required>
                <option value="">Select an item</option>
                <?php
                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo "<option value = '{$row['icode']}'>{$row['iname']}</option>";
                    }
                }
                ?>
            </select>
        </div>
        <!-- Weight -->
        <div class="col-4">
            <label for="weight">Weight:</label>
            <input type="text" class="form-control" id="weight" name="weight" placeholder="kg" required>
        </div>
        <!-- Price -->
        <div class="col-4">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Rs" required>
        </div>
        <!-- Submit button -->
        <div class="col-12">
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>





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
