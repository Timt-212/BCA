<!DOCTYPE html><html><body>
<h2>Area of Rectangle</h2>
<form method="post">Length:<input type="number" name="length">Width:<input type="number" name="width"><input type="submit" value="Calculate"></form>
<?php if($_POST){$l=$_POST['length'];$w=$_POST['width'];$a=$l*$w;echo "Area of Rectangle: $a";}?>
</body></html>