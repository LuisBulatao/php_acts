<?php
$output = null;
$string = 'Hello World';

$output = strlen($string); // Length of the string
$output = str_word_count($string); // Count of words in the string
$output = strpos($string, 'World'); // Position of 'World' in the string
$output = $string[0];
$output = substr($string, 1, 3);
$output = str_replace('Hello', 'Universe', $string);
$output = strtolower($string);
$output = strtoupper($string);
$output = ucwords($string);


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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>