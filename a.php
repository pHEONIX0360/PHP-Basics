<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);

        if ($number < 2) {
            echo "<p>$number is not a prime number.</p>";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        }
    }
    ?>
</body>
</html>
