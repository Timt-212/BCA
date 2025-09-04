<!DOCTYPE html><html><body>
<h2>Sum of Digits</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Find Sum"></form>
<?php if($_POST){$num=$_POST['num'];$sum=0;$t=$num;while($t>0){$d=$t%10;$sum+=$d;$t=(int)($t/10);}echo "Sum of digits of $num is: $sum";}?>
</body></html>