<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number1" placeholder="Number 1" required>
        <input type="number" name="number2" placeholder="Number 2" required>
        <select name="operations" required>
            <option value="addition">Addition</option> <!-- + -->
            <option value="subtraction">Subtraction</option> <!-- - -->
            <option value="multiplication">Multiplication</option> <!-- * -->
            <option value="division">Division</option> <!-- / -->
        </select>
        <br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php 
        if(isset($_POST['submit'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operation = $_POST['operations'];
            $result = '';

            if($operation == 'division' && $number2 == 0) {
                $result = 'Error: Division by zero.';
            } else {
                switch($operation) {
                    case 'addition':
                        $result = $number1 + $number2;
                        break;
                    case 'subtraction':
                        $result = $number1 - $number2;
                        break;
                    case 'multiplication':
                        $result = $number1 * $number2;
                        break;
                    case 'division':
                        $result = $number1 / $number2;
                        break;
                    default:
                        $result = "Unknown operation.";
                    }
            }
            echo "<h3>Result: $result</h3>";
        }
    ?>

</body>
</html>