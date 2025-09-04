<!DOCTYPE html><html><body>
<h2>Factorial Calculator</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Find Factorial"></form>
<?php if($_POST){$n=$_POST['num'];$f=1;for($i=1;$i<=$n;$i++)$f*=$i;echo "Factorial of $n is: $f";}?>
</body></html>