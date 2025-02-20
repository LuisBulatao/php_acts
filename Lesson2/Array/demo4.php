<?php
//Multi dimensional Array

$output = null;
$users = null;

$fruits = [
        //0    //1
    ['Apple', 'Red'], //0
    ['Orange', 'Orange'], //1
    ['Banana', 'Yellow'], //2
];


$output = $fruits[2][0];

// Multi dimensional Associative Arrays

$users  = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'], //0
    ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'], ///1
    ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => 'secret'], // 2
];
// Acces email for the firts user
$output = $users[2]['name'] . ' ' . $users[2]['email']. ' ' . $users[2]['password'];

// Add a new user
$users[] = ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];

//Remove the last user
array_pop($users);
// Remove the first user
array_shift($users);

$output = count($users) . 'user is the array';

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP from scratch</title>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP Multi dimensional</h1>
        </div>
    </header>   
    <div class="container mx-auto p-5 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">

        <p class="text-xl">Output: <?= $output?></p>
        <h2 class="text-xl font-semibold my-4">User Array: </h2>
        <pre><?php print_r($users); ?></pre>
        </div>
    </div>
</body>
</html>