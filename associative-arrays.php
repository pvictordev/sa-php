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
<h3>Switch the Values with Keys</h3>

<?php
include_once "functions.php";

// Original data
$data = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'occupation' => 'Engineer'
);

if (isset($_GET['flipped'])) {
    $data = array_flip($data);
    echo "<p>Flipped Data:</p>";
} else {
    echo "<p>Original Data:</p>";
}

// Display the data
dump($data);
?>

<!--append the param to the current query string -->
<a href="?<?php echo isset($_GET['flipped']) ? '' : 'flipped'; ?>"><button>Toggle</button></a>
<hr>

<!-- merge -->
<h3>merge</h3>
<?php
include_once "functions.php";

$array1 = array("a" => "red", "b" => "green");
$array2 = array("c" => "blue", "b" => "yellow");

echo "original";
dump($array1);
dump($array2);

$result = array_merge($array1, $array2);
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
<form method="GET" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input style="width: 280px;" type="numbers" name="number" id="" placeholder="give me the value and i will give you the key">
    <input type="submit" />
</form>

<?php
include_once "functions.php";

$arr = array("a" => 1, "b" => 2, "c" => 3);

if (isset($_GET["number"])) {
    $key = array_search($_GET["number"], $arr);
    dump($key);
} else {
    echo "Please enter a number to search.";
}

?>
<hr>

<!-- array_keys -->
<h3>give me the keys</h3>
<?php
include_once "functions.php";

$oses = array("windows" => "win 11", "linux" => "ubuntu", "macos" => "monterey");
echo "original";
dump($oses);

$keys = array_keys($oses);
echo "modified";
dump($keys);
?>
<hr>

<!-- return the values -->
<h3>give me the values</h3>
<?php
include_once "functions.php";

$oses = array("windows" => "win 11", "linux" => "ubuntu", "macos" => "monterey");
echo "original";
dump($oses);

$keys = array_values($oses);
echo "modified";
dump($keys);
?>
<hr>

<!-- array key exists -->
<h3>does the key from the arr exists ?</h3>
<?php
include_once "functions.php";

$arr = array("windows" => "win 11", "linux" => "ubuntu", "macos" => "monterey");

dump($arr);

echo 'the key ' . (array_key_exists("chromeos", $arr) ? " DOES EXIST" : " DOES NOT EXIST") . " in the array";

?>
<hr>

<!-- array intersect key  -->
<h3>Compare the keys of two arrays, and return the matches:</h3>
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
<h3>Compare the values of two arrays, and return the differences</h3>
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

<?php require "associative-arrays.php"; ?>