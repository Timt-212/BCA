<!DOCTYPE html><html><body>
<h2>Swap Two Numbers</h2>
<form method="post">A:<input type="number" name="num1">B:<input type="number" name="num2"><input type="submit" value="Swap"></form>
<?php if($_POST){$a=$_POST['num1'];$b=$_POST['num2'];echo "Before: a=$a, b=$b<br>";$a=$a+$b;$b=$a-$b;$a=$a-$b;echo "After: a=$a, b=$b";}?>
</body></html>