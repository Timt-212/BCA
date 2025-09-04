<!DOCTYPE html><html><body>
<h2>Prime Checker</h2>
<form method="post"><input type="number" name="num"><input type="submit" value="Check Prime"></form>
<?php if($_POST){$n=$_POST['num'];$p=true;if($n<2)$p=false;else{for($i=2;$i<=sqrt($n);$i++){if($n%$i==0){$p=false;break;}}}echo $p?"$n is Prime":"$n is NOT Prime";}?>
</body></html>