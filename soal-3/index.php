<?php

function findMissingNumber($arr)
{
    $min = min($arr);
    $max = max($arr);

    $range = range($min, $max);

    $diff = array_diff($range, $arr);

    return implode(', ', $diff);
}
?>

<form method="POST" action="">
    Number 1: <input type="number" name="number1" required><br><br>
    Number 2: <input type="number" name="number2" required><br><br>
    Number 3: <input type="number" name="number3" required><br><br>
    Number 4: <input type="number" name="number4" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [
        'number1' => $_POST['number1'],
        'number2' => $_POST['number2'],
        'number3' => $_POST['number3'],
        'number4' => $_POST['number4']
    ];

    $num = findMissingNumber($arr);

    echo "<br><br>";

    if ($num === null) {
        echo "Tidak Ada Angka Yang Hilang";
    } else {
        echo "Angka Yang Hilang: " . $num;
    }
}
?>