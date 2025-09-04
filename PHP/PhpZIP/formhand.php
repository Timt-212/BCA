<!DOCTYPE html>
<html>
<body>

<h2>Student Details Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
        <tr>
            <td>Student Name:</td>
            <td><input type="text" name="student_name"></td>
        </tr>
        <tr>
            <td>Roll Number:</td>
            <td><input type="text" name="roll_no"></td>
        </tr>
        <tr>
            <td>Course:</td>
            <td>
                <select name="course">
                    <option value="BCA">BCA</option>
                    <option value="MCA">MCA</option>
                    <option value="B.Tech">B.Tech</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td><textarea name="comments" rows="4" cols="40"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
// Initialize variables
$name = $roll = $course = $comments = "";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['student_name']);
    $roll = htmlspecialchars($_POST['roll_no']);
    $course = htmlspecialchars($_POST['course']);
    $comments = htmlspecialchars($_POST['comments']);

    echo "<h3>Submitted Student Details:</h3>";
    echo "Name: $name <br>";
    echo "Roll No: $roll <br>";
    echo "Course: $course <br>";
    echo "Comments: $comments <br>";
}
?>

</body>
</html>
