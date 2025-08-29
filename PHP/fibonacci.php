<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
</body>
    <form method="post">
        <label>Enter the range:</label>
        <input type="number" name="range" min="1" required>
        <input type="submit">
    </form>

    <?php
    if ($_POST) {
        $n = intval($_POST['range']);
        $a = 0;
        $b = 1;
        echo "<h3>Fibonacci Series:</h3>";
        for ($i = 0; $i < $n; $i++) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
    }
    ?>
</body>
</html>