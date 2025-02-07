<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$num1 = 20;
$num2 = 10;

// Basics
$output = "$num1 + $num2 = ". $num1 + $num2;
$output = "$num1 - $num2 = ". $num1 - $num2;
$output = "$num1 * $num2 = ". $num1 * $num2;
$output = "$num1 / $num2 = ". $num1 / $num2;
$output = "$num1 % $num2 = ". $num1 % $num2;

// Appending Assignment Operator
$num3 = 10;
$num3 += 20;
$num3 -= 20;
$num3 *= 20;
$num3 /= 20;

$output = $num3;

// rand() -- generates a random number
$output = rand();
$output = rand(1, 10);

// round -- Rounds a floating point number
$ouput = round(4.5);

// ceil() -- Round up number up to the nearest integer
$output = ceil(4.3);

// floor() -- Round down a number
$output = floor(4.7);

// sqrt() -- Returns the square root of a number
$output = sqrt(64);

// pi() -- Returns the vlaue of PI
$output = pi();

// abs() -- Returns the absolute (positive) value of a number
$output = abs(-4.7);

// max() -- Returns the highest value in a list or array of args.
$output = max(1, 2, 3);

// min() -- Returns the lowest value in a list or array of args.
$output = min([1, 2, 3]);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
  </head>
  <body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
      <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
      </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
      <div class="bg-white rounded-lg shadow-md p-6 mt-6">
        <!-- Output -->
        <p class="text-xl"><?= $output ?></p>
      </div>
    </div>
  </body>
</html>