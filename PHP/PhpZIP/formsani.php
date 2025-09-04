<!DOCTYPE html>
<html>
<body>

<h2>Form Sanitization & Validation</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    IP Address: <input type="text" name="ip"><br><br>
    Age: <input type="text" name="age"><br><br>
    Email: <input type="text" name="email"><br><br>
    Website: <input type="text" name="website"><br><br>
    <input type="submit" name="submit" value="Validate">
</form>

<?php
if(isset($_POST['submit'])){

    //  1. STRING SANITIZATION
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    echo "<h3>Name:</h3> $name <br>";

    //  2. IP VALIDATION
    $ip = $_POST['ip'];
    if(filter_var($ip, FILTER_VALIDATE_IP)){
        echo "<h3>IP:</h3> $ip is a Valid IP Address<br>";
    } else {
        echo "<h3>IP:</h3> Invalid IP Address<br>";
    }

    // 3. INTEGER VALIDATION
    $age = $_POST['age'];
    if(filter_var($age, FILTER_VALIDATE_INT)){
        echo "<h3>Age:</h3> $age is a Valid Integer<br>";
    } else {
        echo "<h3>Age:</h3> Invalid Integer<br>";
    }

    //  4. EMAIL SANITIZATION & VALIDATION
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<h3>Email:</h3> $email is a Valid Email<br>";
    } else {
        echo "<h3>Email:</h3> Invalid Email<br>";
    }

    //  5. URL SANITIZATION & VALIDATION
    $website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
    if(filter_var($website, FILTER_VALIDATE_URL)){
        echo "<h3>Website:</h3> $website is a Valid URL<br>";
    } else {
        echo "<h3>Website:</h3> Invalid URL<br>";
    }
}
?>

</body>
</html>
