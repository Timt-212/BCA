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
            $p = 0;
            for($i=2; $i<$a; $i++){
                if($a%$i==0){
                   $p = 1;
                   break;
                }
            }
            if($p==0){
                echo "$a is Prime";
            }
            else{
                echo "$a is not Prime";
            }
        }
    
    
    ?>
    
</body>
</html>