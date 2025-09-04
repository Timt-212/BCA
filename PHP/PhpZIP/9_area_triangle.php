<!DOCTYPE html><html><body>
<h2>Area of Triangle</h2>
<form method="post">Base:<input type="number" name="base">Height:<input type="number" name="height"><input type="submit" value="Calculate"></form>
<?php if($_POST){$b=$_POST['base'];$h=$_POST['height'];$a=0.5*$b*$h;echo "Area of Triangle: $a";}?>
</body></html>