<?php
// Define the temperature variable (you can replace this with your own temperature value)
$temperature = 20; // Change this value as needed

// Initialize the weather message variable
$weatherMessage = "";

// Check the temperature range and assign the appropriate message
if ($temperature <= 0) {
    $weatherMessage = "It's freezing!";
} elseif ($temperature > 0 && $temperature <= 15) {
    $weatherMessage = "It's cool.";
} elseif ($temperature > 15) {
    $weatherMessage = "It's warm.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <p>The current temperature is <?php echo $temperature; ?>&deg;C.</p>
    
    <p><?php echo $weatherMessage; ?></p>
</body>
</html>
