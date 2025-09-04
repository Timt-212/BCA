<!DOCTYPE html><html><body>
<h2>Fibonacci Series</h2>
<form method="post"><input type="number" name="terms"><input type="submit" value="Generate"></form>
<?php if($_POST){$n=$_POST['terms'];$a=0;$b=1;echo"Series: ";for($i=1;$i<=$n;$i++){echo$a." ";$next=$a+$b;$a=$b;$b=$next;}}?>
</body></html>