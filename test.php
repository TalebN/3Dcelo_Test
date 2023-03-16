
<?php

// Map of tree heights
$map = [
    [3,0,3,7,3],
    [2,5,5,1,2],
    [6,5,3,3,2],
    [3,3,5,4,9],
    [3,5,3,9,0],
];

$rows = count($map);
$cols = count($map[0]);


// Count trees visible from left
$countLeft = 0;
for ($r = 0; $r < $rows; $r++) {
    $maxHeight = 0;
    for ($c = 0; $c < $cols; $c++) {
        if ($map[$r][$c] > $maxHeight) {
            $maxHeight = $map[$r][$c];
            $countLeft++;
        }
    }
}

// Count trees visible from right
$countRight = 0;
for ($r = 0; $r < $rows; $r++) {
    $maxHeight = 0;
    for ($c = $cols - 1; $c >= 0; $c--) {
        if ($map[$r][$c] > $maxHeight) {
            $maxHeight = $map[$r][$c];
            $countRight++;
        }
    }
}

// Count trees visible from top
$countTop = 0;
for ($c = 0; $c < $cols; $c++) {
    $maxHeight = 0;
    for ($r = 0; $r < $rows; $r++) {
        if ($map[$r][$c] > $maxHeight) {
            $maxHeight = $map[$r][$c];
            $countTop++;
        }
    }
}

// Count trees visible from bottom
$countBottom = 0;
for ($c = 0; $c < $cols; $c++) {
    $maxHeight = 0;
    for ($r = $rows - 1; $r >= 0; $r--) {
        if ($map[$r][$c] > $maxHeight) {
            $maxHeight = $map[$r][$c];
            $countBottom++;
        }
    }
}

// Total visible trees
$total = $countLeft + $countRight + $countTop + $countBottom - 4 * $rows;

echo "Total visible trees : " . $total;

?>
