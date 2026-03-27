<?php
require_once "Calculator.php";

$calc = new Calculator();
$display = "";

// Keep previous input
if (isset($_POST['display'])) {
    $display = $_POST['display'];
}

// Handle button clicks
if (isset($_POST['btn'])) {

    $btn = $_POST['btn'];

    if ($btn == "C") {
        $display = "";

    } elseif ($btn == "B") {
        $display = substr($display, 0, -1);

    } elseif ($btn == "=") {
        $display = $calc->evaluate($display);

    } elseif ($btn == "√") {
        $display = $calc->squareRoot($display);

    } else {
        $display .= $btn;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Calculator</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<header>
  <h1>CALCULATOR IN PHP</h1>
</header>

<div class="calculator">

<form method="POST">

<input type="text" name="display" class="display" id="display"
value="<?php echo htmlspecialchars($display); ?>" readonly>

<div class="buttons">

  <button type="submit" name="btn" value="%">%</button>
  <button type="submit" name="btn" value="√">√</button>
  <button type="submit" name="btn" value="C">C</button>
  <button type="submit" name="btn" value="B">B</button>

  <button type="submit" name="btn" value="7">7</button>
  <button type="submit" name="btn" value="8">8</button>
  <button type="submit" name="btn" value="9">9</button>
  <button type="submit" name="btn" value="/">÷</button>

  <button type="submit" name="btn" value="4">4</button>
  <button type="submit" name="btn" value="5">5</button>
  <button type="submit" name="btn" value="6">6</button>
  <button type="submit" name="btn" value="*">×</button>

  <button type="submit" name="btn" value="1">1</button>
  <button type="submit" name="btn" value="2">2</button>
  <button type="submit" name="btn" value="3">3</button>
  <button type="submit" name="btn" value="-">−</button>

  <button type="submit" name="btn" value=".">.</button>
  <button type="submit" name="btn" value="0">0</button>
  <button type="submit" name="btn" value="=">=</button>
  <button type="submit" name="btn" value="+">+</button>

</div>

</form>
</div>

</body>
</html>