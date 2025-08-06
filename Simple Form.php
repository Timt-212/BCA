<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user_name" placeholder="Enter Your Name">
        <br>
        <input type="email" name="user_email" placeholder="Enter Your Email">
        <br>
        <input type="submit">
    </form>
    <?php
        if($_POST){
            echo $_POST['user_name'];
            echo "<br>";
            echo $_POST['user_email'];
        }
    ?>
</body>
</html>