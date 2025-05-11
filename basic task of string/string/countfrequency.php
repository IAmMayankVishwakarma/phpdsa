<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>countfrequency</title>
</head>
<body>
  <h1>Count Frequency of Characters in a String</h1>
  <form method="POST">
    <label for="inputString">Enter a string:</label><br>
    <input type="text" id="inputString" name="inputString" required><br><br>
    <input type="submit" value="Count Frequency">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $inputString = $_POST['inputString'];
      $frequency = count_chars($inputString, 1);
          // print_r($frequency);
      echo "<h2>Character Frequency:</h2>";
      foreach ($frequency as $char => $count) {
          echo "Character '" . chr($char) . "' appears " . $count . " times.<br>";
      }
  }
?>


</body>
</html>