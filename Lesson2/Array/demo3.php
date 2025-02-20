<?php 
$ouput = null; 


$user = [
    'name'  => 'john',
    'email'  => 'luffy@gmail.com',
    'password'  => '1234',
    'hobbies'  => ['Tennis', 'Video Games']
];
//Accessing Elements
$output = $user['name'];
$output = $user['email'];

//Accessing nested elements
$output = $user['hobbies'][1];

//Adding a new element
$user['address'] = '123 Main Street';

//Removing Array
unset($user['address']);

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
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>   
    <div class="container mx-auto p-5 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">

        <p class="text-xl"><?= $output?></p>
        <h2 class="text-xl font-semibold my-4">User Array: </h2>
        <pre><?php print_r($user); ?></pre>
        </div>
    </div>
</body>
</html>