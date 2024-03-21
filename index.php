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

$friends = array('victor', 'vlad', 'sergiu');

echo 'the $friends variable ' . (is_array($friends) ? "IS" : "IS NOT") . " an array";

?>
<hr>

<!-- sum function, prod function, custom division and substraction -->
<h3>calculator</h3>

<form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="number" name="number1" value="" required>
    <input type="number" name="number2" value="">
    <input type="submit" name="+" value="+">
    <input type="submit" name="-" value="-">
    <input type="submit" name="*" value="*">
    <input type="submit" name="/" value="/">
</form>

<?php
include_once "functions.php";

function calc()
{
    // take the values and put them in an array as concatenated string
    $numbersArray = array();

    if (isset($_POST['number1']) && isset($_POST['number2'])) {

        $combinedString = $_POST['number1'] . " " . $_POST['number2'];

        $numbersArray[] = $combinedString;
    } else {
        $numbersArray[] = "0";
    }

    // divide the first string from the numbers array into array of 2 strings
    $spliting = explode(" ", $numbersArray[0]);

    // custom functions
    function array_subtract(&$arr)
    {
        $result = reset($arr);
        $arr = array_slice($arr, 1);
        foreach ($arr as $value) {
            $result -= $value;
        }
        return $result;
    }

    function array_divide(&$arr)
    {
        $result = reset($arr);
        $arr = array_slice($arr, 1);
        foreach ($arr as $value) {
            $result /= $value;
        }
        return $result;
    }

    // main logic
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["+"])) {
        echo array_sum($spliting);
    }
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["-"])) {
        echo array_subtract($spliting);
    }
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["*"])) {
        echo array_product($spliting);
    }
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["/"])) {
        echo array_divide($spliting);
    }
}
calc();

?>
<hr>

<!-- shuffle and sort functions -->
<h3>shuffle and sort the array</h3>
<form method="GET" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="shuffle" value="Shuffle Array">
    <input type="submit" name="sort" value="Sort Array">
</form>

<?php

$nums = array(1, 3, 5, 7, 9, 11);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["shuffle"])) {
    shuffle($nums);
    echo "<p>Shuffled:</p>";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["sort"])) {
    sort($nums);
    echo "<p>Sorted:</p>";
}

echo implode(", ", $nums);

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

<!-- array unique function -->
<h3>do not be a part of the crowd, be unqiue !</h3>
<?php
include_once "functions.php";

$operSis = ['ubuntu', 'redhat', 'mint', 'mint', 'redhat', 'arch'];

echo "original";
dump($operSis);

echo "unique";
dump(array_unique($operSis));

?>
<hr>

<!-- array intersect function -->
<h3>we have a lot of things in comon bro </h3>
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

<h3>Sum of squares of even numbers</h3>
<?php

// Function to calculate the sum of squares of even numbers in an array
function sumOfSquaresOfEvenNumbers($numbers)
{
    $evenNumbers = array_filter($numbers, function ($num) {
        return $num % 2 == 0;
    });

    $squares = array_map(function ($num) {
        return $num * $num;
    }, $evenNumbers);

    $sum = array_sum($squares);

    return $sum;
}

$inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sumOfSquares = sumOfSquaresOfEvenNumbers($inputArray);

echo "Sum of squares of even numbers: " . $sumOfSquares;
?>
<hr>

<!-- combine -->
<h3>slow dive into associative arrays</h3>
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