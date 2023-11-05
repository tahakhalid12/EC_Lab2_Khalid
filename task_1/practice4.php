<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Practice 4: PHP Multiplication Table</title>
</head>
<body>
  <h1>PHP Multiplication Table</h1>
  
  <form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Generate Table</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if (is_numeric($number) && $number > 0) {
      echo "<table>";
      for ($i = 1; $i <= $number; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $number; $j++) {
          if ($i == 1 || $j == 1) {
            echo "<th>" . $i * $j . "</th>";
          } else {
            echo "<td>" . $i * $j . "</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "<p>Please enter a positive number.</p>";
    }
  }
  ?>

</body>
</html>
