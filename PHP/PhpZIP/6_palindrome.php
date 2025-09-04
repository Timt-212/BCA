<!DOCTYPE html><html><body>
<h2>Palindrome Checker</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Check"></form>
<?php if($_POST){$n=$_POST['num'];echo($n==strrev($n))?"$n is Palindrome":"$n is NOT Palindrome";}?>
</body></html>