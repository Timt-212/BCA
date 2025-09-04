<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php
        if($_POST){
            $a = $_POST['num'];
            $c = 0;
            while($a!=0){
                $b = $a%10;
                $c = ($c*10) + $b;
                $a = (int)($a/10);           
            }
            echo "Reverse Number is $c";
        }
    
    ?>
    
</body>
</html>