<?php

require("connection.php");

$filename = "Webinfopen.csv"; 
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: text/csv");

// Correct SQL query
$res = $con->query('SELECT food_name, food_variety, food_price FROM food');

// Open the output stream
$output = fopen('php://output', 'w');

// Write column headers to the file
fputcsv($output, ["Serial No.", "Food Name", "Food Variety", "Food Price"]);

// Initialize the serial number
$serial = 1;

// Write data rows
while ($row = mysqli_fetch_assoc($res)) {
    fputcsv($output, [
        $serial,
        $row['food_name'],
        $row['food_variety'],
        $row['food_price']
    ]);
    $serial++;
}

// Close the output stream
fclose($output);
?>
 