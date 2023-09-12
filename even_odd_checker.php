<?php
// Initialize variables
$number = "";
$result = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the input number from the form
    $number = $_POST['number'];

    // Check if the number is even or odd
    if ($number % 2 === 0) {
        $result = "$number is an even number.";
    } else {
        $result = "$number is an odd number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h1>Even/Odd Checker</h1>

    <form method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" value="<?php echo $number; ?>" required>
        <br><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    // Display the result if available
    if ($result !== "") {
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
