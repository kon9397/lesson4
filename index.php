<?php

echo '<h1>12.1</h1>';

$arr = [];
$n = 5;
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand(0, 10);
    }
}

echo "Правый верхний угол: " . $arr[0][$n-1];
echo '<br>';
echo "Левый нижний угол: " .  $arr[$n-1][0];

echo '<hr>';

echo '<h1>12.2</h1>';

$arr = [];
$n = 5;
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand(0, 10);
    }
}

echo "Правый нижний угол: " . $arr[$n-2][$n-1] . " " . $arr[$n-1][$n-2] . " " . $arr[$n-1][$n-1];
echo '<br>';
echo "Левый верхний угол: " .  $arr[0][0] . " " . $arr[0][1] . " " . $arr[1][0];

echo '<hr>';

echo '<h1>12.3</h1>';

$arr = [];
$n = 5;
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand(0, 10);
    }
}

$number = rand(0, 4);

echo "Любой элемент второй строки массива: " . $arr[1][$number];
echo '<br>';
echo "Любой элемент массива: " . $arr[$number][$number];

echo '<hr>';

echo '<h1>12.4</h1>';

$arr = [];
$n = 5;
for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = rand(0, 10);
    }
}

$number = rand(0, 4);

echo "Любой элемент второй строки массива: " . $arr[2][$number];
echo '<br>';
echo "Любой элемент массива: " . $arr[$number][$number];

echo '<hr>';

echo '<h1>12.5</h1>';

echo "Пятая строчка<br>" ;
for($i = 0; $i < count($arr[4]); $i++) {
    echo $arr[4][$i] . '<br>';
}

$s = rand(0,4);
echo "<br>S строчка<br> " ;
for($i = 0; $i < count($arr[$s]); $i++) {
    echo $arr[$s][$i] . '<br>';
}


echo '<hr>';

echo '<h1>12.6</h1>';

echo "Вторая строчка<br>" ;
for($i = 0; $i < count($arr[1]); $i++) {
    echo $arr[1][$i] . '<br>';
}

$m = rand(0,4);
echo "<br>m строчка<br> " ;
for($i = 0; $i < count($arr[$m]); $i++) {
    echo $arr[$m][$i] . '<br>';
}


echo '<hr>';

echo '<h1>12.7</h1>';

echo "Пятая строчка<br>" ;
$rand = rand(0, 4);
for($i = 0; $i < count($arr[1]); $i++) {
    $arr[1][$rand] = 1949;
    echo $arr[1][$i] . '<br>';
}

$m = rand(0,4);
echo "<br>Замена<br> " ;
for($i = 0; $i < count($arr[$m]); $i++) {
    $arr[$rand][$rand] = 16;
    echo $arr[$m][$i] . '<br>';
}


echo '<hr>';

echo '<h1>12.8</h1>';

echo "Вторая строчка<br>" ;
$rand = rand(0, 4);
for($i = 0; $i < count($arr[2]); $i++) {
    $arr[2][$rand] = 13;
    echo $arr[2][$i] . '<br>';
}

$m = rand(0,4);
echo "<br>Замена<br> " ;
for($i = 0; $i < count($arr[$m]); $i++) {
    $arr[$rand][$rand] = 22;
    echo $arr[$m][$i] . '<br>';
}


echo '<hr>';

echo '<h1>12.22</h1>';

$arr = [];

$n = 10;

for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = ($i + 1) * ($j + 1);
    }
}

var_dump($arr);

echo '<hr>';

echo '<h1>12.23</h1>';

$arr = [];

$n = 7;

for($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = ($i + 1) * ($j + 1);
    }
}

var_dump($arr);

echo '<hr>';

echo '<h1>10.3 (а)</h1>';
$a = 20;
$b = 15;

$z = ($a > 2 * $b ? $a : 2 * $b) * (2 * $a - $b > $b ? 2 * $a - $b : $b);

echo $z;


echo '<hr>';

echo '<h1>10.3 (б)</h1>';
$a = 20;
$b = 15;

function maximum($a, $b) {
    if ($a > $b) {
        return $a;
    }
    return $b;
}

$z = maximum($a, 2 * $b) * maximum(2 * $a - $b, $b);

echo $z;


echo '<hr>';

echo '<h1>10.4 (а)</h1>';
$a = 20;
$b = 15;

$z = ($a < 3 * $b ? $a : 3 * $b) * (2 * $a - $b < 2 * $b ? 2 * $a - $b : 2 * $b);

echo $z;


echo '<hr>';

echo '<h1>10.4 (б)</h1>';
$a = 20;
$b = 15;

function minimum($a, $b) {
    if ($a < $b) {
        return $a;
    }
    return $b;
}

$z = minimum($a, 3 * $b) * minimum(2 * $a - $b, 2 * $b);

echo $z;


echo '<hr>';

echo '<h1>10.5 (а)</h1>';

$x = rand(-100, 100);
$y = rand(-100, 100);

if($x < 0) {
    $x = -1;
} elseif($x === 0) {
    $x = 0;
} else {
    $x = 1;
}

if($y < 0) {
    $y = -1;
} elseif($y === 0) {
    $y = 0;
} else {
    $y = 1;
}

$z = $x + $y;
echo $z;

echo '<hr>';

echo '<h1>10.5 (б)</h1>';

$x = rand(-100, 100);
$y = rand(-100, 100);

function sign($a) {
    if($a < 0) {
        return -1;
    } elseif($a === 0) {
        return 0;
    } else {
        return 1;
    }
}



$z = sign($x) + sign($y);
echo $z;

echo '<hr>';

echo '<h1>10.22</h1>';

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);
$d = rand(1, 100);
$e = rand(1, 100);
$f = rand(1, 100);

echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
echo '$c = ' . $c . '<br>';
echo '$d = ' . $d . '<br>';
echo '$e = ' . $e . '<br>';
echo '$f = ' . $f . '<br>';


$max = maximum($a, maximum($b, maximum($c, maximum($d, maximum($e, $f)))));
echo 'Максимум: ' . $max;

echo '<hr>';

echo '<h1>10.35</h1>';

function line($number) {
    for($i = 0; $i < $number; $i++) {
        echo '*';
    }
}

line(rand(1, 30));

echo '<hr>';

echo '<h1>10.36</h1>';

function vertLine($number) {
    for($i = 0; $i < $number; $i++) {
        echo '*<br>';
    }
}

vertLine(rand(1, 30));

echo '<hr>';

echo '<h1>10.37 (а)</h1>';
$figure = '';
for($i = 0; $i < 5; $i++) {
    $figure .= '<br>';
    for($j = 0; $j < 10; $j++) {
        $figure .= '*';
    }
}

echo $figure;

echo '<hr>';

echo '<h1>10.37 (б)</h1>';

for($i = 0; $i < 5; $i++) {
    line(10);
    echo '<br>';
}


echo '<hr>';


echo '<h1>10.41</h1>';

function factorial($n) {
    if ($n == 1 or $n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(rand(1, 20));

echo '<hr>';

echo '<h1>10.42</h1>';

function power($a, $n) {
    if ($n == 1) {
        return $a;
    } else {
        return $a * power($a, $n - 1);
    }
}

echo power(rand(1, 20), rand(1,7));

echo '<hr>';

echo '<h1>10.45</h1>';

function member($memb, $dif, $n) {
    if($n > 0) {
        $memb = $dif + member($memb, $dif, $n - 1);
    }
    return $memb;
}

function sum($sum, $dif, $n) {
    if($n > 0) {
        $sum += ($n * $dif) + sum($sum, $dif, $n - 1);
    }
    return $sum;
}

$n = 3;
$differ = 7;
$first = 1;
echo member($first, $differ, $n - 1);
echo '<br>';
echo sum($first, $differ, $n - 1);

echo '<hr>';






