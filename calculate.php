<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    // Initialize result variable
    $result = null;

    // Perform the selected operation
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero.";
            }
            break;
        default:
            $result = "Invalid operation.";
    }
echo "Result: ". $result;
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Calculator Result</title>
</head>
<body>
    <h2>Calculation Result</h2>
    <p><strong>Number 1:</strong> <?php echo htmlspecialchars($num1); ?></p>
    <p><strong>Number 2:</strong> <?php echo htmlspecialchars($num2); ?></p>
    <p><strong>Operation:</strong> <?php echo htmlspecialchars($operation); ?></p>
    <p><strong>Result:</strong> <?php echo htmlspecialchars($result); ?></p>
    <a href="calculator_form.html">Back to Calculator</a>
</body>
</html> -->
