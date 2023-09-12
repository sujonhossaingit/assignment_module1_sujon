<?php
// Initialize variables
$num1 = "";
$num2 = "";
$operation = "";
$result = "";
$error = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get input values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Perform the selected arithmetic operation
    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $error = "Division by zero is not allowed.";
            }
            break;
        default:
            $error = "Invalid operation selected.";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form method="post">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" value="<?php echo $num1; ?>" required>
        <br><br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" id="num2" value="<?php echo $num2; ?>" required>
        <br><br>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Display the result or error if available
    if ($error !== "") {
        echo "<p>Error: $error</p>";
    } elseif ($result !== "") {
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>