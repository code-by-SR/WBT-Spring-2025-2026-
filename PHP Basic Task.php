
<?php
echo "<h2>Task 1 to 7</h2>";

echo '1. <br>';
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = " . $area . "<br>";
echo "Perimeter of Rectangle = " . $perimeter . "<br>";
?>

<?php
echo '2. <br>';
$amount = 500;

$vat = 0.15 * $amount;

echo "Amount = " . $amount . "<br>";
echo "VAT = " . $vat . "<br>";
?>

<?php
echo '3. <br>';
$num = 7;

if($num % 2 == 0){
    echo $num . " is Even";
} else {
    echo $num . " is Odd" . "<br>";
}
?>

<?php
$a = 25;
$b = 10;
$c = 15;

echo '4. <br>';
if($a > $b && $a > $c){
    echo "Largest number is " . $a;
} elseif($b > $a && $b > $c){
    echo "Largest number is " . $b;
} else {
    echo "Largest number is " . $c;
}

echo '<br><br>';

echo '5. <br>';
echo 'The odd numbers from 10 to 100 are:';

for ($i = 11; $i <= 100; $i += 2) {
    echo $i . ' ';
}

echo '<br><br>';

echo '6. <br>';
$arr = array(5, 10, 15, 20, 25, 30);
$search = 20;
$found = false;

for($i = 0; $i < count($arr); $i++){
    if($arr[$i] == $search){
        $found = true;
    }
}

if($found){
    echo $search . " is found in the array";
} else {
    echo $search . " is not found in the array";
}

echo '<br><br>';

echo '7. <br>';

for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }
    echo "<br>";
}

for($i = 3; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo $j . " ";
    }
    echo "<br>";
}

$letter = 65;
for($i = 1; $i <= 3; $i++){
    for($j = 0; $j < $i; $j++){
        echo chr($letter++) . " ";
    }
    echo "<br>";
}
?>