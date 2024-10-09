<?php

function findFormula($arr, $target)
{
    $source1 = $arr['source1'];
    $source2 = $arr['source2'];
    $source3 = $arr['source3'];
    $source4 = $arr['source4'];
    $target = $target;

    $formula = '';

    if ($source1 + $source2 + $source3 + $source4 == $target) {
        $formula = $source1 . ' + ' . $source2 . ' + ' . $source3 . ' + ' . $source4;
    } else if ($source1 - $source2 - $source3 - $source4 == $target) {
        $formula = $source1 . ' - ' . $source2 . ' - ' . $source3 . ' - ' . $source4;
    } else if ($source1 * $source2 * $source3 * $source4 == $target) {
        $formula = $source1 . ' * ' . $source2 . ' * ' . $source3 . ' * ' . $source4;
    } else if (($source1 + $source3) * $source2 - $source4 == $target) {
        $formula = '(' . $source1 . ' + ' . $source3 . ') * ' . $source2 . ' - ' . $source4;
    } else if (($source2 + $source4) * $source3 * $source1 == $target) {
        $formula = '(' . $source2 . ' + ' . $source4 . ') * ' . $source3 . ' * ' . $source1;
    } else if ($source1 * $source2 + $source3 * $source4 == $target) {
        $formula = $source1 . ' * ' . $source2 . ' + ' . $source3 . ' * ' . $source4;
    } else if ($source1 * $source2 - $source3 * $source4 == $target) {
        $formula = $source1 . ' * ' . $source2 . ' - ' . $source3 . ' * ' . $source4;
    } else if ($source1 + $source2 + $source3 * $source4 == $target) {
        $formula = $source1 . ' + ' . $source2 . ' + ' . $source3 . ' * ' . $source4;
    } else {
        $formula = $formula;
    }

    return $formula;
}
?>

<form method="POST" action="">
    Source 1: <input type="number" name="source1" required><br><br>
    Source 2: <input type="number" name="source2" required><br><br>
    Source 3: <input type="number" name="source3" required><br><br>
    Source 4: <input type="number" name="source4" required><br><br>

    Target: <input type="number" name="target" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [
        'source1' => $_POST['source1'],
        'source2' => $_POST['source2'],
        'source3' => $_POST['source3'],
        'source4' => $_POST['source4']
    ];

    $target = $_POST['target'];

    $formula = findFormula($arr, $target);

    echo "<br><br>";

    if (empty($formula)) {
        echo "Belum Ditemukan Formula Yang Tepat";
    } else {
        echo "Formula: " . $formula;
    }
}
?>