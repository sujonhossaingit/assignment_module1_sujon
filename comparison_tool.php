<?php
// Initialize variables
$number1 = "";
$number2 = "";
$largerNumber = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get input values from the form
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    // Use the ternary operator to determine the larger number
    $largerNumber = ($number1 > $number2) ? $number1 : $number2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <form method="post">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required>
        <br><br>

        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required>
        <br><br>

        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    // Display the larger number if available
    if ($largerNumber !== "") {
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
