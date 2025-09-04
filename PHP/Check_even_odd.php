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
            if($a%2==0){
                echo "$a is an Even number";
            }
            else{
                echo "$a is an Odd Number";
            }
        }
    
    
    
    ?>
</body>
</html>