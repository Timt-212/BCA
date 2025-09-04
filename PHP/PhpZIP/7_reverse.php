<!DOCTYPE html><html><body>
<h2>Reverse Number</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Reverse"></form>
<?php if($_POST){$n=$_POST['num'];$r=0;$t=$n;while($t>0){$d=$t%10;$r=$r*10+$d;$t=(int)($t/10);}echo "Reverse of $n is: $r";}?>
</body></html>