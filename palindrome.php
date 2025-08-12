<body>
  <form method="post">
    <p>Enter a number to check if it is a palindrome:</p>
    <input type="number" name="n">
    <input type="submit">
  </form>

  <?php 
  if($_POST){
    $n = $_POST["n"];
    $original = $n;
    $reverse = 0;

    while($n > 0){
      $digit = $n % 10;
      $reverse = ($reverse * 10) + $digit;
      $n = (int)($n / 10);
    }

    if($original == $reverse){
      echo "<p>$original is a Palindrome number.</p>";
    } else {
      echo "<p>$original is NOT a Palindrome number.</p>";
    }
  }
  ?>
</body>