<!DOCTYPE html><html><body>
<h2>Leap Year Checker</h2>
<form method="post"><input type="number" name="year"><input type="submit" value="Check"></form>
<?php if($_POST){$y=$_POST['year'];echo(($y%400==0)||($y%4==0&&$y%100!=0))?"$y is Leap Year":"$y is NOT Leap Year";}?>
</body></html>