<?php

// 1. Right-angled triangle star pattern
function rightAngledTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat("* ", $i).'<br/>'. PHP_EOL;
    }
}


// 2. Inverted right-angled triangle star pattern
function invertedTriangle($n) {
    for ($i = $n; $i >= 1; $i--) {
        echo str_repeat("* ", $i).'<br/>'. PHP_EOL;
    }
}

// 3. Pyramid star pattern
function pyramid($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", $i).'<br/>' . PHP_EOL;
    }
}

// 4. Inverted Pyramid
function invertedPyramid($n) {
    for ($i = $n; $i >= 1; $i--) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", $i).'<br/>' . PHP_EOL;
    }
}

// 5. Diamond Pattern
function diamond($n) {
    // Upper part
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", $i).'<br/>' . PHP_EOL;
    }
    // Lower part
    for ($i = $n - 1; $i >= 1; $i--) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", $i).'<br/>' . PHP_EOL;
    }
}


// 1. Right-angled triangle number pattern
function rightNumberTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ".'<br/>';
        }
        echo PHP_EOL;
    }
}

// 2. Inverted right-angled number pattern
function invertedNumberTriangle($n) {
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ".'<br/>';
        }
        echo PHP_EOL;
    }
}

// 3. Floyd’s Triangle
function floydsTriangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num++ . " ".'<br/>';
        }
        echo PHP_EOL;
    }
}

// 4. Pyramid Number Pattern
function pyramidNumbers($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ".'<br/>';
        }
        echo PHP_EOL;
    }
}

// 5. Diamond Number Pattern
function diamondNumbers($n) {
    // Upper half
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ".'<br/>';
        }
        echo PHP_EOL;
    }
    // Lower half
    for ($i = $n - 1; $i >= 1; $i--) {
        echo str_repeat(" ", $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ".'<br/>';
        }
        echo PHP_EOL;
    }
}

rightAngledTriangle(5);
invertedTriangle(5);
pyramid(5);
invertedPyramid(5);
diamond(5);

rightNumberTriangle(5);
invertedNumberTriangle(5);
floydsTriangle(5);
pyramidNumbers(5);
diamondNumbers(5);


?>
