<!DOCTYPE html><html><body>
<h2>Even or Odd</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Check"></form>
<?php if($_POST){$n=$_POST['num'];echo ($n%2==0)?"$n is Even":"$n is Odd";}?>
</body></html>