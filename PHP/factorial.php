<body>
  <form method="post">
    <p>Enter a number to find its factorial:</p>
    <input type="number" name="n">
    <input type="submit">
  </form>

  <?php 
  if($_POST){
    $n = $_POST["n"];
    $fact = 1;

    for($i = 1; $i <= $n; $i++){
      $fact = $fact * $i;
    }

    echo "<p>Factorial of $n is: $fact</p>";
  }
  ?>
</body>
