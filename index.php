<!-- ARRAYS -->
<h1>ARRAYS FUNCTIONS</h1>
<hr>
<hr>

<!-- count -->
<h3>count function</h3>
<?php

$friends = array('victor', 'vlad', 'sergiu');

echo "I have " . count($friends) . " friends";

?>
<hr>

<!-- is array function -->
<h3>is array ?</h3>
<?php

$friends = array('victor', 'alex', 'marius');

echo 'the $friends variable ' . (is_array($friends) ? "IS" : "IS NOT") . " an array"

?>
<hr>

<!-- sort function -->
<h3>sort function</h3>
<?php
include_once "functions.php";

$numbers = array(2, 3, 1);

echo "original";
dump($numbers);

sort($numbers);

echo "modified";
dump($numbers);

?>
<hr>

<!-- shuffle function -->
<h3>shuffle the array</h3>
<?php
include_once "functions.php";

echo "original";
$nums = array(1, 3, 5, 7, 9, 11);
dump($nums);

echo "modified";
shuffle($nums);

dump($nums);
?>
<hr>

<!-- fill the array function -->
<h3>fill the void</h3>
<?php
include_once "functions.php";

$voidArr = [];
echo "original";
dump($voidArr);

$voidArr = array_fill(1, 5, "bang");
echo "modified";
dump($voidArr);

?>
<hr>

<!-- sum function -->
<h3>sum up !</h3>
<?php
include_once "functions.php";

$arr = [1, 2, 3];
echo "original";
dump($arr);

echo "modified <br>";
echo array_sum($arr);


?>
<hr>

<!-- array unique function -->
<h3>do not be a part of the crowd, be unqiue !</h3>
<?php
include_once "functions.php";

$operSis = ['ubuntu', 'redhat', 'mint', 'mint', 'redhat', 'arch linux'];

echo "original";
dump($operSis);

echo "unique";
dump(array_unique($operSis));

?>
<hr>

<!-- sum function -->
<h3>sum up !</h3>
<?php
include_once "functions.php";

$arr = [3, 3, 3];
echo "original";
dump($arr);

echo "modified <br>";
echo array_sum($arr);

?>
<hr>

<!-- product function -->
<h3>more than sum up !</h3>
<?php
include_once "functions.php";

$arr = [3, 3, 3];
echo "original";
dump($arr);

echo "modified <br>";
echo array_product($arr);

?>
<hr>

<!-- array intersect function -->
<h3>we have a lot of things in comon bro, help me with my homework </h3>
<?php
include_once "functions.php";

$jock = ['stupid', 'tall', 'jacked', 'breathes'];

$nerd = ['smart', 'skinny', 'short', 'breathes'];

echo "original";
dump($jock);
dump($nerd);

$result = array_intersect($jock, $nerd);

echo "modified";
dump($result);

?>
<hr>

<!-- ASSOCIATIVE ARRAYS -->
<h1> ASSOCIATIVE ARRAYS FUNCTIONS</h1>
<hr>
<hr>