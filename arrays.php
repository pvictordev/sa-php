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