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

echo 'the $friends variable ' . (is_array($friends) ? "IS" : "IS NOT") . " an array";

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

<!-- combine -->
<h3>slow deep into associative arrays</h3>
<?php

// our keys
$keys = array("a", "b", "c");
// our values
$values = array(1, 2, 3);

echo "original";
dump($keys);
dump($values);


$result = array_combine($keys, $values);

echo "modified";
dump($result);
?>
<hr>

<!-- ASSOCIATIVE ARRAYS -->
<h1> ASSOCIATIVE ARRAYS FUNCTIONS</h1>
<hr>
<hr>

<!-- array walk -->
<h3>keys and values !</h3>
<?php
function myfunction($value, $key)
{
    echo "The key $key has the value $value<br>";
}
$a = array("a" => "red", "b" => "green", "c" => "blue");
array_walk($a, "myfunction");
?>
<hr>

<!-- array flip -->
<h3>switch the values with keys</h3>
<?php
include_once "functions.php";

$data = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'occupation' => 'Engineer'
);
echo "original";
dump($data);

$flippedArray = array_flip($data);
echo "original";
dump($flippedArray);
?>
<hr>

<!-- merge recursive -->
<h3>merge recursive</h3>
<?php
include_once "functions.php";

$array1 = array("a" => array("red"), "b" => array("green", "blue"));
$array2 = array("a" => array("yellow"), "b" => array("black"));

echo "original";
dump($array1);
dump($array2);

$result = array_merge_recursive($array1, $array2);
echo "modified";
dump($result);

?>
<hr>

<!-- keys in upperacase -->
<h3>key in CASE UPPER</h3>
<?php
include_once "functions.php";

$arr = array("a" => 1, "B" => 2, "c" => 3);
echo "original";
dump($arr);

$result = array_change_key_case($arr, CASE_UPPER);
echo "modified";
dump($result)
?>
<hr>

<!-- array search for key -->
<h3>array search for key</h3>
<?php
include_once "functions.php";

$arr = array("a" => 1, "b" => 2, "c" => 3);
dump($arr);

$key = array_search(2, $arr); // $key will be "b"
dump($key);
?>
<hr>

<!-- return the keys -->
<h3>give me the keys</h3>
<?php
include_once "functions.php";

$arra = array("a" => 1, "b" => 2, "c" => 3);
echo "original";
dump($arr);

$keys = array_keys($arr);
echo "modified";
dump($keys);
?>
<hr>

<!-- return the values -->
<h3>give me the values</h3>
<?php
include_once "functions.php";

$arra = array("a" => 1, "b" => 2, "c" => 3);
echo "original";
dump($arr);

$keys = array_values($arr);
echo "modified";
dump($keys);
?>
<hr>

<!-- array key exists -->
<h3>does the key from the arr exists ?</h3>
<?php
include_once "functions.php";

$arr = array("a" => 1, "b" => 2, "c" => 3);

dump($arr);

echo 'the key ' . (array_key_exists("c", $arr) ? " DOES" : " DOES NOT") . " in the array";

?>
<hr>

<!-- array intersect key  -->
<h3>Computes the intersection of arrays using keys for comparison.</h3>
<?php
include_once "functions.php";

$array1 = array("a" => 1, "b" => 2, "c" => 3);
$array2 = array("b" => 2, "c" => 4);

echo "original";
dump($array1);
dump($array2);

$result = array_intersect_key($array1, $array2);
echo "modified";
dump($result);

?>
<hr>

<!-- array diff using key intersect key  -->
<h3>Computes the difference of arrays using keys for comparison.</h3>
<?php
include_once "functions.php";

$array1 = array("a" => 1, "b" => 2, "c" => 3);
$array2 = array("b" => 2, "c" => 4);

echo "original";
dump($array1);
dump($array2);

$result = array_diff_key($array1, $array2);
echo "modified";
dump($result);

?>
<hr>