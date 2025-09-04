<!DOCTYPE html><html><body>
<h2>Armstrong Number</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Check Armstrong"></form>
<?php if($_POST){$n=$_POST['num'];$s=0;$t=$n;$l=strlen((string)$n);while($t>0){$d=$t%10;$s+=pow($d,$l);$t=(int)($t/10);}echo($s==$n)?"$n is Armstrong":"$n is NOT Armstrong";}?>
</body></html>