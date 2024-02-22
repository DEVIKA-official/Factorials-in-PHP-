<html>
    <head>
        <title>finding factorial of numbers</title>
        <body>
        <?php
function factorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Example usage:
$number = 5;
$result = factorial($number);

echo "Factorial of $number is: $result";
?>

</body>
</head>
</html>

 