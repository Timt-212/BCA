<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
    if($_POST){
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $a;
        $a = $b;
        $b = $c;
        echo "Value of a is $a";
        echo "Value of b is $b";
    }
    
    ?>
</body>
</html>