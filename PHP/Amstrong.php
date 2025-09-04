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
        <input type="submit" value="Check Armstrong">
    </form>
    <?php
        if($_POST) {
            $a = $_POST['num'];
            $sum = 0;
            $copy = $a;
            $len = strlen($a);
            while($a>0){
                $b = $a%10;
                $sum+= pow($b,$len);
                $a = ($a/10);
            }
            if($copy==$sum){
                echo "$copy is an Armstrong Number";
            }
            else{
                 echo "$copy is Not an Armstrong Number";
            }
        }
    ?>
</body>
</html>