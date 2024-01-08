<?php
function checkNumber($number) {
    // Store the sum 
    $sum = 0;
    $divisors = [];

    // calculate if this number is perfect number or not
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $divisors[] = $i;
            $sum += $i;
        }
    }

    $divisorList = implode('+ ', $divisors);
    // print the result
    if ($sum === $number) {
        $output = "The input number is $number. Yes, this is a perfect number";
        $proof = "Proof: " .implode('+', $divisors) . "= $number\n";
    } else {
        $output = "The input number is $number. No, this is not a perfect number";
        $proof = "Proof: " .implode('+', $divisors) . " != $number\n";
    }

    return "$output\n$proof";
}

function testIsPerfectNumber() {
    $testCases = [
        [6, true],
        [8, false],
    ];

    foreach ($testCases as $test) {
        $input = $test[0];
        $expected_output = $test[1];
        
        $result = checkNumber($input);

        // Check if the result contains the expected output
        if ((strpos($result, 'Yes') !== false && $expected_output) || (
            strpos($result, 'No') !== false && !$expected_output)) {
            echo "Input $input: Test Passed.\n";
        } else {
            echo "Input $input: Test Failed.\n";
        }
    }
}


$number = 6;
$result = checkNumber($number);
echo $result;

$number = 8;
$result = checkNumber($number);
echo $result;

testIsPerfectNumber();
?>
