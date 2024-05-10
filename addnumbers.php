<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $sum = $number1 + $number2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Two Numbers</title>
</head>
<body>
    <h2>Add Two Numbers</h2>
    <form method="POST" action="">
        Number 1: <input type="number" name="number1" required><br><br>
        Number 2: <input type="number" name="number2" required><br><br>
        <input type="submit" value="Add">
    </form>

    <?php
    if (isset($sum)) {
        echo "<h3>Result: $number1 + $number2 = $sum</h3>";
    }
    ?>
</body>
</html>
