<!DOCTYPE html>
<html>
<body>

<h2>PHP Form Validation Example</h2>

<?php
// Initialize variables
$errorMsg = "";
$userName = $age = $emailID = $phoneNo = $url = "";

// Function to clean input data
function input_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if(isset($_POST['submit'])){

    //  Empty Field Validation
    if(empty($_POST["userName"])){
        $errorMsg .= "User Name is required<br>";
    } else {
        $userName = input_data($_POST["userName"]);

        //  String Validation (Only letters, numbers, underscore)
        if(!preg_match("/^[a-zA-Z0-9_]*$/", $userName)){
            $errorMsg .= "Only alphabets, numbers, and underscores are allowed for User Name<br>";
        }
    }

    //  Number Validation for Age
    if(empty($_POST["age"])){
        $errorMsg .= "Age is required<br>";
    } else {
        $age = input_data($_POST["age"]);
        if(!preg_match("/^[0-9]*$/", $age)){
            $errorMsg .= "Only numeric values are allowed for Age<br>";
        }
    }

    // Email Validation
    if(empty($_POST["emailID"])){
        $errorMsg .= "Email ID is required<br>";
    } else {
        $emailID = input_data($_POST["emailID"]);
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if(!preg_match($pattern, $emailID)){
            $errorMsg .= "Invalid Email ID format<br>";
        }
    }

    //  String Length Validation for Phone Number
    if(empty($_POST["phoneNo"])){
        $errorMsg .= "Phone Number is required<br>";
    } else {
        $phoneNo = input_data($_POST["phoneNo"]);
        if(strlen($phoneNo) != 10){
            $errorMsg .= "Please provide a phone number of 10 digits<br>";
        }
    }

    // URL Validation
    if(empty($_POST["url"])){
        $errorMsg .= "URL is required<br>";
    } else {
        $url = input_data($_POST["url"]);
        $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
        if(!preg_match($pattern, $url)){
            $errorMsg .= "You entered an INVALID URL<br>";
        }
    }

    //  Button Click Validation
    if(isset($_POST['submit'])){
        echo "<b>Submit button clicked.</b><br>";
    }
}
?>

<!-- HTML Form -->
<form method="post">
    Username: <input type="text" name="userName" value="<?php echo $userName; ?>"><br><br>
    Age: <input type="text" name="age" value="<?php echo $age; ?>"><br><br>
    Email: <input type="text" name="emailID" value="<?php echo $emailID; ?>"><br><br>
    Phone No: <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>"><br><br>
    Website: <input type="text" name="url" value="<?php echo $url; ?>"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display Errors or Valid Inputs
if(!empty($errorMsg)){
    echo "<h3 style='color:red;'>$errorMsg</h3>";
} elseif(isset($_POST['submit'])){
    echo "<h3 style='color:green;'>Validation Successful!</h3>";
    echo "Username: $userName<br>";
    echo "Age: $age<br>";
    echo "Email: $emailID<br>";
    echo "Phone: $phoneNo<br>";
    echo "Website: $url<br>";
}
?>

</body>
</html>
